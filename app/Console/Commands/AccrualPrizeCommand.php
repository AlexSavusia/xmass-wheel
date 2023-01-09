<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Prize\Prize;
use App\Models\Wheel\AccrualPrize;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Throwable;

final class AccrualPrizeCommand extends Command
{
    protected $signature = 'accrual:prize {init?}';

    public function __construct(
        private readonly Prize $prize,
        private readonly AccrualPrize $accrualPrize
    )
    {
        parent::__construct();
    }

    /**
     * @throws Throwable
     */
    public function handle()
    {
        $isInit = $this->argument('init');
        if ($isInit) {
            $this->handleInit();
        } else {
            $this->handleRegular();
        }
    }

    private function handleInit(): void
    {
        $prize = $this->accrualPrize->newModelQuery()
            ->whereNull('initial_at')
            ->get();
        foreach ($prize as $accrualPrize) {
            $this->accrualPrize($accrualPrize, $accrualPrize->initial_accrual_count);
            $accrualPrize->initial_at = Carbon::now();
            $accrualPrize->updated_at = Carbon::now();
            $accrualPrize->update();
        }
    }

    private function handleRegular(): void
    {
        $prize = $this->accrualPrize->newModelQuery()
            ->whereNotNull('updated_at')
            ->get();
        foreach ($prize as $accrualPrize) {
            if ($accrualPrize->period === 0) {
                continue;
            }
            if ($accrualPrize->updated_at->addMinutes($accrualPrize->period)->getTimestamp() > Carbon::now()->getTimestamp()) {
                $this->accrualPrize($accrualPrize, $accrualPrize->accrual_count);
                $this->accrualPrize->newModelQuery()
                    ->where('prize_slug', '=', $accrualPrize->prize_slug)
                    ->update([
                        'updated_at' => Carbon::now(),
                    ]);
            }
        }
    }

    private function accrualPrize(AccrualPrize $accrualPrize, int $accrualCount): void
    {
        $count = 0;
        while ($count < $accrualCount) {
            $count++;
            $this->createPrize($accrualPrize);
        }
    }

    private function createPrize(AccrualPrize $accrualPrize): void
    {
        try {
            $code = Str::random(4);
            $id = $this->prize->newModelQuery()->create(
                [
                    'type' => $accrualPrize->prize_type,
                    'name' => $accrualPrize->prize_name,
                    'slug' => $accrualPrize->prize_slug,
                    'code' => "xm22$code",
                    'amount' => $accrualPrize->prize_amount,
                    'created_at' => Carbon::now(),
                ]
            );
            Log::info('created prize', ['id' => $id]);
        } catch (QueryException $exception) {
            Log::error($exception->getMessage());
            if (str_contains($exception->getMessage(), 'wheel_prize_code_unique')) {
                $this->createPrize($accrualPrize);
            }
        }
    }
}