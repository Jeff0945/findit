<?php

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AttachmentFactory extends Factory
{
    protected $model = Attachment::class;
    
    public function definition(): array
    {
        return [
            'path'       => $this->faker->imageUrl(),
            'item_id'    => Item::factory()->create(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
