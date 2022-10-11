<?php

namespace Gdinko\Prim\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Gdinko\Prim\Models\PrimErrorLog
 *
 * @property int $id
 * @property string|null $url
 * @property int|null $status
 * @property array|null $request
 * @property array|null $response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimErrorLog whereUrl($value)
 * @mixin \Eloquent
 */
class PrimErrorLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'status',
        'request',
        'response',
    ];

    protected $casts = [
        'request' => 'array',
        'response' => 'array',
    ];
}
