<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Perizinan;
use Illuminate\Support\Facades\DB;

class PerizinanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $perizinan = Perizinan::all();
        $perizinan = DB::table('perizinan')
            ->join('users', 'perizinan.id_profil', '=', 'users.id')
            ->select('perizinan.*', 'users.name')
            ->get();

        return view('pages.admin.perizinanAdmin.index', [
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id_perizinan)
    {
        $perizinan = DB::table('perizinan')
            ->join('users', 'perizinan.id_profil', '=', 'users.id')
            ->where('id_perizinan', '=', $id_perizinan )
            ->select('perizinan.*', 'users.name')
            ->first();
            
        return view('pages.admin.perizinanAdmin.edit',[
            'perizinan' => $perizinan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_perizinan)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $perizinan = Perizinan::find($id_perizinan);
        $perizinan->status = $request->input('status');

        $perizinan->save();

        if ($perizinan->status == 2) {
            DB::table('presensi')->insert([
                'id_profil' => $perizinan->id_profil,
                'keterangan' => 'IZIN'
            ]);
            
            ;
        }

        return redirect(route('perizinanAdmin.index'));
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
