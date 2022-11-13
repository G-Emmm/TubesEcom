<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\Paket;

class PaketSeeder extends Seeder
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
                'nama_paket' => 'Platinum',
            ],
            [
                'nama_paket' => 'Gold',
            ],
            [
                'nama_paket' => 'Silver',
            ],
        ];
        Paket::insert($data);
    }
}
