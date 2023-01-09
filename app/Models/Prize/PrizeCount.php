<?php

declare(strict_types=1);

namespace App\Models\Prize;

use Illuminate\Database\Eloquent\Model;

final class PrizeCount extends Model
{
    protected $table = 'wheel.prize_count';
    protected $fillable = [
        'prize_slug',
        'ticketers_count',
        'non_ticketers_count',
        'total',
        'updated_at',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}