<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Macro
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Macro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Macro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Macro query()
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Macro whereName($value)
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
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'user_id',
    ];
}
