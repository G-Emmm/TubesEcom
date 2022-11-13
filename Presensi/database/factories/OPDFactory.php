<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Wilayah;
use \App\Models\Tenant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OPD>
 */
class OPDFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id_wilayah = \App\Models\Wilayah::pluck('id_wilayah');
        $id_tenant = \App\Models\Tenant::pluck('id_tenant');

        return [
            'nama_opd' => $this->faker->company(),
            'id_wilayah' => Wilayah::inRandomOrder()->first()->id_wilayah,
            'longitude' => $this->faker->longitude(),
            'latitude' => $this->faker->latitude(),
            'id_tenant' => Tenant::inRandomOrder()->first()->id_tenant,
        ];
    }
}
