<?php

declare(strict_types=1);

namespace App\Models\Wheel;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $user_id
 * @property int $order_id
 * @property int $count
 * @property string $type
 * @property Carbon $created_at
 */
final class AttemptAccrualHistories extends Model
{
    const UPDATED_AT = null;

    public $incrementing = false;
    public $timestamps = true;

    protected $primaryKey = false;
    protected $table = 'wheel.attempt_accrual_histories';
    protected $fillable = [
        'user_id',
        'order_id',
        'count',
        'type',
        'created_at',
    ];
    protected $dates = [
        'created_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}