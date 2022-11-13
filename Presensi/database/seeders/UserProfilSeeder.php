<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserProfil;

class UserProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Andi',
                'alamat_user' => 'Jogja',
                'id_opd' => 1,
            ],
            [
                'nama' => 'Ani',
                'alamat_user' => 'Solo',
                'id_opd' => 1,
            ],
            [
                'nama' => 'Anto',
                'alamat_user' => 'Klaten',
                'id_opd' => 1,
            ],
        ];
        UserProfil::insert($data);
    }
}
