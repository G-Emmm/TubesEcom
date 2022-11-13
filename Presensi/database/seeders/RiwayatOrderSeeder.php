<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RiwayatOrder;

class RiwayatOrderSeeder extends Seeder
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
                'id_wilayah' => 3,
                'id_paket' => 1,
                'tgl_awal' => '2015-12-31 00:00:00',
                'tgl_akhir' => '2022-12-31 00:00:00',
                'id_status_bayar' => 2,
                'tgl_bayar' => '2015-12-31 00:00:00',
            ],
            [
                'id_wilayah' => 4,
                'id_paket' => 2,
                'tgl_awal' => '2016-12-31 00:00:00',
                'tgl_akhir' => '2021-12-31 00:00:00',
                'id_status_bayar' => 1,
                'tgl_bayar' => '2016-12-31 00:00:00',
            ],
        ];
        RiwayatOrder::insert($data);
    }
}
