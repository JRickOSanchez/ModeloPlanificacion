<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Mesociclo
 *
 * @property int $id
 * @property int $macro_id
 * @property int $acento_id
 * @property string $etapa
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Acento|null $acento
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo whereAcentoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo whereEtapa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo whereMacroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mesociclo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Mesociclo extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = 'mesociclos';

    /**
     * @var string[]
     */
    public $fillable = [
        'macro_id',
        'acento_id',
        'etapa'
    ];

    /**
     * @return HasOne
     */
    public function acento(): HasOne
    {
        return $this->hasOne(Acento::class, 'id', 'acento_id');
    }
}
