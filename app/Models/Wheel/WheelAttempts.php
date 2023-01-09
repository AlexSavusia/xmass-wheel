<?php

declare(strict_types=1);

namespace App\Models\Wheel;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $user_id
 * @property int $attempts_count
 * @property Carbon $free_attempt_available_time_at
 * @property Carbon $create_at
 * @property Carbon $updated_at
 */
final class WheelAttempts extends Model
{
    public $timestamps = true;
    public $incrementing = false;

    protected $primaryKey = null;
    protected $table = 'wheel.wheel_attempts';
    protected $fillable = [
        'user_id',
        'attempts_count',
        'free_attempt_available_time_at',
    ];
    protected $dates = [
        'free_attempt_available_time_at',
        'created_at',
        'updated_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}