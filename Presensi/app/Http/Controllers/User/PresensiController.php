<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presensi = Presensi::all();

        return view('pages.user.presensi.index', [
            'presensi' => $presensi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('pages.user.presensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_profil' => 'required',
            'tanggal' => 'required',
            'jam_datang' => 'required',
            'jam_pulang' => 'required',
            'longitude' => 'required',
            'latitude' =>'required',
        ]);

        $presensi = new Presensi;
        $presensi->id_profil = $request->input('id_profil');
        $presensi->tanggal = $request->input('tanggal');
        $presensi->jam_datang = $request->input('jam_datang');
        $presensi->jam_pulang = $request->input('jam_pulang');
        $presensi->longitude = $request->input('longitude');
        $presensi->latitude = $request->input('latitude');

        $presensi->save();

        return redirect(route('presensi.index'));
    }
}
