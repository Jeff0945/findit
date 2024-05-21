<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StatusFactory extends Factory
{
    protected $model = Status::class;
    
    public function definition(): array
    {
        return [
            'item_id' => Item::factory(),
            'value'      => fake()->randomElement(['unclaimed', 'claimed', 'donated']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
