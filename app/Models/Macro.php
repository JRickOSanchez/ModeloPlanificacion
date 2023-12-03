<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Macro
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $branch
 * @property string $sport
 * @property \Illuminate\Support\Carbon $start_at
 * @property \Illuminate\Support\Carbon $end_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Acento> $acentos
 * @property-read int|null $acentos_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Mesociclo> $mesociclos
 * @property-read int|null $mesociclos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Macro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Macro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Macro query()
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereSport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereUserId($value)
 * @mixin \Eloquent
 */
class Macro extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'macros';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'start_at'   => 'datetime',
        'end_at'     => 'datetime',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'user_id',
        'sport',
        'branch',
        'start_at',
        'end_at'
    ];

    /**
     * @return HasMany
     */
    public function acentos(): HasMany
    {
        return $this->hasMany(Acento::class, 'macro_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function mesociclos(): HasMany
    {
        return $this->hasMany(Mesociclo::class, 'macro_id', 'id');
    }
}
