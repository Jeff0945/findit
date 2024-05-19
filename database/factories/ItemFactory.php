<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ItemFactory extends Factory
{
    protected $model = Item::class;
    
    public function definition(): array
    {
        return [
            'name'            => fake()->words(3, true),
            'found_at'        => fake()->streetAddress(),
            'characteristics' => fake()->word(),
            'status'          => fake()->word(),
            'reported_by'     => PersonalInfo::factory()->create(),
            'reported_at'     => Carbon::now(),
            'acknowledged_by' => PersonalInfo::factory()->create(),
            'claimed_by'      => PersonalInfo::factory()->create(),
            'claimed_at'      => Carbon::now(),
            'released_by'     => PersonalInfo::factory()->create(),
            'created_by'      => User::factory()->create(),
            'created_at'      => Carbon::now(),
            'updated_at'      => Carbon::now(),
        ];
    }
}
