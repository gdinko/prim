<?php

namespace Gdinko\Prim\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Gdinko\Prim\Models\PrimLog
 *
 * @property int $id
 * @property string|null $url
 * @property int|null $status
 * @property array|null $request
 * @property array|null $response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrimLog whereUrl($value)
 * @mixin \Eloquent
 */
class PrimLog extends Model
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
