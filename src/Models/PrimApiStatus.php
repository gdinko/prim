<?php

namespace Gdinko\Prim\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Gdinko\Prim\Models\PrimApiStatus
 *
 * @property int $id
 * @property int $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PrimApiStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimApiStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimApiStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimApiStatus whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimApiStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimApiStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimApiStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PrimApiStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
    ];
}
