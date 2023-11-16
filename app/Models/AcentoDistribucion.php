<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AcentoDistribucion
 *
 * @property int $id
 * @property int $acento_id
 * @property int $porcentaje
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion query()
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion whereAcentoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion wherePorcentaje($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcentoDistribucion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AcentoDistribucion extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'acentos_distribucion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'acento_id',
        'porcentaje'
    ];
}