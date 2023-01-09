<?php

declare(strict_types=1);

namespace App\Models\Wheel;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


final class WheelSpin extends Model
{
    public $timestamps = false;

    protected $table = 'wheel.spin';
    protected $fillable = [
        'user_id',
        'prize_id',
        'prize_type',
        'prize_slug',
        'spin_at',
    ];
    protected $dates = [
        'spin_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}