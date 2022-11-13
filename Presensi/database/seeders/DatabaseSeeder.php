<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wilayah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Wilayah::create([
            'id_wilayah' => 1,
            'kode' => 33,
            'nama' => 'Jawa Tengah',
            'level' => 1,
            'id_parent' => null,
        ]);
        Wilayah::create([
            'id_wilayah' => 2,
            'kode' => 3372,
            'nama' => 'Surakarta',
            'level' => 2,
            'id_parent' => 1,
        ]);
        Wilayah::create([
            'id_wilayah' => 3,
            'kode' => 337204,
            'nama' => 'Jebres',
            'level' => 3,
            'id_parent' => 2,
        ]);
        Wilayah::create([
            'id_wilayah' => 4,
            'kode' => 33720401,
            'nama' => 'Mojosongo',
            'level' => 4,
            'id_parent' => 3,
        ]);
    }
}
