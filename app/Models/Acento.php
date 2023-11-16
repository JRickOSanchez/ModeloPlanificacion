<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Acento
 *
 * @property int                             $id
 * @property int                             $macro_id
 * @property string                          $nombre
 * @property int                             $semanas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Acento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Acento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Acento query()
 * @method static \Illuminate\Database\Eloquent\Builder|Acento whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Acento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Acento whereMacroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Acento whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Acento whereSemanas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Acento whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Acento extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'acentos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'macro_id',
        'nombre',
        'semanas'
    ];

    /**
     * @return HasMany
     */
    public function distribucion(): HasMany
    {
        return $this->hasMany(AcentoDistribucion::class, 'acento_id', 'id');
    }
}
