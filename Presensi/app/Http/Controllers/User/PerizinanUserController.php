<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perizinan;

class PerizinanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perizinan = Perizinan::all();

        return view('pages.user.perizinan.index', [
            'perizinan' => $perizinan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.perizinan.create');
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
            'start_izin' => 'required',
            'end_izin' => 'required',
            'jenis_izin' => 'required',
            'keperluan' => 'required',
            'keterangan' =>'required'
        ]);

        $perizinan = new Perizinan;
        $perizinan->start_izin = $request->input('start_izin');
        $perizinan->end_izin = $request->input('end_izin');
        $perizinan->jenis_izin = $request->input('jenis_izin');
        $perizinan->keperluan = $request->input('keperluan');
        $perizinan->keterangan = $request->input('keterangan');

        $perizinan->save();

        return redirect(route('perizinan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
