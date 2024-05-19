<?php

namespace Database\Factories;

use App\Models\PersonalInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PersonalInfoFactory extends Factory
{
    protected $model = PersonalInfo::class;
    
    public function definition(): array
    {
        return [
            'name'           => $this->faker->name(),
            'id_number'      => $this->faker->year . '-' . $this->faker->numberBetween(0, 9999),
            'contact_number' => $this->faker->phoneNumber(),
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ];
    }
}
