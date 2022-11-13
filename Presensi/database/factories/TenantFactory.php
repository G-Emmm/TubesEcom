<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Wilayah;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id_wilayah = \App\Models\Wilayah::pluck('id_wilayah');

        return [
            'id_wilayah' => Wilayah::inRandomOrder()->first()->id_wilayah,
            'alamat_tenant' => $this->faker->address(),
            'no_telptent' => $this->faker->phoneNumber() , 
        ];
    }
}
