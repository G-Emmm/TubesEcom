<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusBayar;

class StatusBayarSeeder extends Seeder
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
                'nama_status' => 'Belum dibayar',
            ],
            [
                'nama_status' => 'Sudah dibayar',
            ],
            [
                'nama_status' => 'Menunggu pembayaran',
            ],
        ];
        StatusBayar::insert($data);
    }
}
