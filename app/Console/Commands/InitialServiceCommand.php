<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

final class InitialServiceCommand extends Command
{
    protected $signature = 'initial:service {truncate}';

    private readonly bool $truncate;

    public function __construct(
    )
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->truncate = boolval($this->argument('truncate'));

        if ($this->truncate) {
            DB::statement('TRUNCATE TABLE wheel.attempt_accrual_histories');
            DB::statement('TRUNCATE TABLE wheel.prize');
            DB::statement('TRUNCATE TABLE wheel.spin');
            DB::statement('TRUNCATE TABLE wheel.wheel_attempts');
        }
        $this->prizeCountTable();
        $this->accrualPrizeTable();
    }

    public function prizeCountTable(): void
    {
        if ($this->truncate) {
            DB::statement('TRUNCATE TABLE wheel.prize_count');
        }

        DB::statement("
            INSERT INTO wheel.prize_count (prize_slug, ticketers_count, non_ticketers_count, total) 
            VALUES 
                ('none', 1, 1, 0),
                ('free', 2, 2, 0),
                ('discount_20', 0, 1, 1000),
                ('discount_30', 0, 1, 900),
                ('discount_50', 0, 1, 790),
                ('discount_70', 0, 1, 370),
                ('deposit_5', 1, 1, 1000),
                ('deposit_10', 1, 1, 50),
                ('deposit_50', 1, 1, 20),
                ('deposit_100', 1, 1, 9),
                ('deposit_250', 1, 1, 5),
                ('deposit_1000', 1, 1, 1),
                ('ondemand_3', 1, 1, 100),
                ('ondemand_5', 1, 1, 90),
                ('ondemand_10', 1, 1, 90),
                ('ticket_1', 0, 1, 50),
                ('ticket_3', 0, 1, 10),
                ('ticket_12', 0, 1, 5)
        ");
    }

    public function accrualPrizeTable(): void
    {
        if ($this->truncate) {
            DB::statement('TRUNCATE TABLE wheel.accrual_prize');
        }

        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'free',
                'prize_name' => 'Free spin',
                'prize_slug' => 'free',
                'prize_amount' => 0,
                'accrual_count' => 0,
                'initial_accrual_count' => 1,
                'period' => 0,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'none',
                'prize_name' => 'No reward',
                'prize_slug' => 'none',
                'prize_amount' => 0,
                'accrual_count' => 0,
                'initial_accrual_count' => 1,
                'period' => 0,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'discount',
                'prize_name' => '20% OFF (promo code)',
                'prize_slug' => 'discount_20',
                'prize_amount' => 20,
                'accrual_count' => 0,
                'initial_accrual_count' => 10000,
                'period' => 0,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'discount',
                'prize_name' => '30% OFF (promo code)',
                'prize_slug' => 'discount_30',
                'prize_amount' => 30,
                'accrual_count' => 0,
                'initial_accrual_count' => 10000,
                'period' => 0,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'discount',
                'prize_name' => '50% OFF (promo code)',
                'prize_slug' => 'discount_50',
                'prize_amount' => 50,
                'accrual_count' => 0,
                'initial_accrual_count' => 10000,
                'period' => 0,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'discount',
                'prize_name' => '70% OFF (promo code)',
                'prize_slug' => 'discount_70',
                'prize_amount' => 70,
                'accrual_count' => 5,
                'initial_accrual_count' => 500,
                'period' => 6*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'deposit',
                'prize_name' => '$5 store credits',
                'prize_slug' => 'deposit_5',
                'prize_amount' => 5,
                'accrual_count' => 10,
                'initial_accrual_count' => 40,
                'period' => 6*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'deposit',
                'prize_name' => '$10 store credits',
                'prize_slug' => 'deposit_10',
                'prize_amount' => 10,
                'accrual_count' => 1,
                'initial_accrual_count' => 5,
                'period' => 16*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'deposit',
                'prize_name' => '$50 store credits',
                'prize_slug' => 'deposit_50',
                'prize_amount' => 50,
                'accrual_count' => 1,
                'initial_accrual_count' => 7,
                'period' => 52*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'deposit',
                'prize_name' => '$100 store credits',
                'prize_slug' => 'deposit_100',
                'prize_amount' => 100,
                'accrual_count' => 1,
                'initial_accrual_count' => 1,
                'period' => 90*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'deposit',
                'prize_name' => '$250 store credits',
                'prize_slug' => 'deposit_250',
                'prize_amount' => 250,
                'accrual_count' => 1,
                'initial_accrual_count' => 0,
                'period' => 144*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'deposit',
                'prize_name' => '$1000 store credits',
                'prize_slug' => 'deposit_1000',
                'prize_amount' => 1000,
                'accrual_count' => 1,
                'initial_accrual_count' => 0,
                'period' => 361*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'ondemand',
                'prize_name' => '3 mockup pack (coupon)',
                'prize_slug' => 'ondemand_3',
                'prize_amount' => 0,
                'accrual_count' => 1,
                'initial_accrual_count' => 6,
                'period' => 361*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'ondemand',
                'prize_name' => '5 mockup pack (coupon)',
                'prize_slug' => 'ondemand_5',
                'prize_amount' => 0,
                'accrual_count' => 1,
                'initial_accrual_count' => 4,
                'period' => 8*60+30,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'ondemand',
                'prize_name' => '10 mockup pack (coupon)',
                'prize_slug' => 'ondemand_10',
                'prize_amount' => 0,
                'accrual_count' => 1,
                'initial_accrual_count' => 4,
                'period' => 361*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'ticket',
                'prize_name' => '3 mockup pack (coupon)',
                'prize_slug' => 'ticket_1',
                'prize_amount' => 0,
                'accrual_count' => 1,
                'initial_accrual_count' => 2,
                'period' => 16*60,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'ticket',
                'prize_name' => '5 mockup pack (coupon)',
                'prize_slug' => 'ticket_3',
                'prize_amount' => 0,
                'accrual_count' => 1,
                'initial_accrual_count' => 2,
                'period' => 90*30,
            ]
        );
        DB::table('wheel.accrual_prize')->insert(
            [
                'prize_type' => 'ticket',
                'prize_name' => '10 mockup pack (coupon)',
                'prize_slug' => 'ticket_12',
                'prize_amount' => 0,
                'accrual_count' => 1,
                'initial_accrual_count' => 0,
                'period' => 144*60,
            ]
        );
    }
}