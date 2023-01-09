<?php

declare(strict_types=1);

namespace App\Models\Prize;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $slug
 * @property string $code
 * @property int $amount
 * @property Carbon $expiry_date
 * @property Carbon $issued_at
 */
final class Prize extends Model
{
    const UPDATED_AT = null;

    protected $table = 'wheel.prize';
    protected $fillable = [
        'id',
        'type',
        'name',
        'slug',
        'code',
        'amount',
        'expiry_date',
        'issued_at',
    ];
    protected $dates = [
        'expiry_date',
        'created_at',
        'issued_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}