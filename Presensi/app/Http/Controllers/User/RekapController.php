<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\UserProfil;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;

class RekapController extends Controller
{
    // public function index()
    // {
    //     $presensi = Presensi::getTodayPresensi(Auth::id());
    //     return view('pages.user.rekap.index', ['presensi' => $presensi]);
    // }
    public function index()
    {
        $presensi = Presensi::getPresensi(Auth::id());
        // count 'hadir' in presensi
        $hadir = 0;
        $sakit = 0;
        $izin = 0;
        $cuti = 0;
        $alpha = 0;
        foreach ($presensi as $p) {
            if ($p->keterangan == 'Hadir') {
                $hadir++;
            } elseif ($p->keterangan == 'Sakit') {
                $sakit++;
            } elseif ($p->keterangan == 'Izin') {
                $izin++;
            } elseif ($p->keterangan == 'Cuti') {
                $cuti++;
            }
        }
        // count 'hadir' in presensi
        $total_presensi = count($presensi);
        $profil = UserProfil::where('id_profil', Auth::id())->first();
        $opd = $profil->opd;
        $jadwal = Jadwal::getJadwal($opd->id_opd);
        $day = date('d');
        $month = date('m');
        $year = date('Y');
        $jadwal_presensi = 0;
        if ($month != 1) {
            for ($i = 1; $i < $month; $i++) {
                for ($j = 1; $j <= cal_days_in_month(CAL_GREGORIAN, $i, $year); $j++) {
                    foreach ($jadwal as $k) {
                        if (date('w', mktime(0, 0, 0, $i, $j, $year)) == $k->hari_presensi) {
                            $jadwal_presensi++;
                        }
                    }
                }
            }
        }
        for ($i = 1; $i <= $day; $i++) {
            foreach ($jadwal as $j) {
                if (date('w', mktime(0, 0, 0, $month, $i, $year)) == $j->hari_presensi) {
                    $jadwal_presensi++;
                }
            }
        }
        $alpha = $jadwal_presensi - $total_presensi;


        return view('pages.user.rekap.index', [
            'presensi' => $presensi,
            'total_presensi' => $total_presensi,
            'hadir' => $hadir,
            'sakit' => $sakit,
            'izin' => $izin,
            'alpha' => $alpha,
            'cuti' => $cuti,
            'jadwal_presensi' => $jadwal_presensi
        ]);
    }
}
