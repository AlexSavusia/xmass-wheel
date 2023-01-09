<?php

declare(strict_types=1);

namespace App\Models\Wheel;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $prize_type
 * @property string $prize_slug
 * @property string $prize_name
 * @property int $prize_amount
 * @property int $accrual_count
 * @property int $initial_accrual_count
 * @property int $period
 * @property Carbon $updated_at
 * @property Carbon $initial_at
 */
final class AccrualPrize extends Model
{
    const CREATED_AT = null;

    public $incrementing = false;
    public $timestamps = true;

    protected $primaryKey = 'prize_slug';
    protected $table = 'wheel.accrual_prize';
    protected $fillable = [
        'prize_type',
        'prize_name',
        'prize_slug',
        'prize_amount',
        'period',
        'accrual_count',
        'initial_accrual_count',
        'updated_at',
        'initial_at',
    ];
    protected $dates = [
        'updated_at',
        'initial_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}