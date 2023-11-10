<?php

namespace Database\Seeders;

use App\Models\Macro;
use Illuminate\Database\Seeder;

class Macros extends Seeder
{
    /**
     * @var array|array[]
     */
    private array $values = [
        [
            'name'    => 'Tenis 2024',
            'user_id' => 1
        ],
        [
            'name'    => 'Olimpiadas de Box 2025',
            'user_id' => 1
        ],
        [
            'name'    => 'Olimpiadas de invierno - Patinaje 2025',
            'user_id' => 1
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->values as $value) {
//            Macro::create($value);
        }
    }
}
