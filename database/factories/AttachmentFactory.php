<?php

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\Item;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AttachmentFactory extends Factory
{
    protected $model = Attachment::class;

    public function definition(): array
    {
        $imageUrl = $this->faker->imageUrl();
        $fileName = basename(parse_url($imageUrl, PHP_URL_PATH));

        return [
            'original_file_name' => $fileName,
            'path'               => $imageUrl,
            'item_id'            => Item::factory()->has(Status::factory())->create(),
            'created_at'         => Carbon::now(),
            'updated_at'         => Carbon::now(),
        ];
    }
}
