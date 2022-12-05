<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.jadwal.index',[
        'jadwals'=>Jadwal::latest()->paginate(7)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validateData=$request->validate([
            'hari'=>'required',
            'nama_perawat'=>'required',
            'jam_masuk'=>'required',
            'jam_keluar'=>'required'
      ]);
      Jadwal::create($validateData);
      return redirect('/jadwaldashboard')->with('pesan','Data berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal,$id)
    {
        return view('dashboard.jadwal.edit',[
          'jadwals'=>Jadwal::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal,$id)
    {
        $validateData=$request->validate([
            'hari'=>'required',
            'nama_perawat'=>'required',
            'jam_masuk'=>'required',
            'jam_keluar'=>'required'
        ]);
        Jadwal::where('id',$id)->update($validateData);
        return redirect('/jadwaldashboard')->with('pesan','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal, $id)
    {
      Jadwal::destroy($id);
      return redirect('/jadwaldashboard')->with('pesan','Data Berhasil Dihapus');
    }
}
