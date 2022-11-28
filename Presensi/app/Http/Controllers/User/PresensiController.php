<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\UserProfil;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index()
    {
        $presensi = Presensi::getTodayPresensi(Auth::id());
        return view('pages.user.presensi.index', [
            'presensi' => $presensi
        ]);
    }

    private function distance($lat1, $lon1, $lat2, $lon2) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        }
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $km = $dist * 60 * 1.1515 * 1.609344;
        return $km;
    }

    public function store(Request $request)
    {
        $request->validate([
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        $id_profil = Auth::id();
        $presensi = Presensi::getTodayPresensi($id_profil);
        if ($presensi) {
            return redirect()->back()->with('error', 'Anda sudah melakukan presensi hari ini');
        }

        $profil = UserProfil::where('id_profil', $id_profil)->first();
        $opd = $profil->opd;
        $opd_long = $opd->longitude;
        $opd_lat = $opd->latitude;
        $long = $request->input('longitude');
        $lat = $request->input('latitude');
        $jarak = $this->distance($opd_lat, $opd_long, $lat, $long);
        if ($jarak > 0.5) {
            return redirect()->back()->with('error', 'Anda tidak berada di lokasi kerja. Jarak anda dengan lokasi kerja adalah ' . $jarak . ' km');
        }
        $presensi = new Presensi;
        $presensi->id_profil = $id_profil;
        $presensi->tanggal = date('Y-m-d');
        $presensi->jam_datang = date('H:i:s');
        $presensi->longitude = $long;
        $presensi->latitude = $lat;
        $presensi->keterangan = 'Hadir';
        $presensi->save();
        return redirect()->back()->with('success', 'Presensi berhasil');
    }
}
