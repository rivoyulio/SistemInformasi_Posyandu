<?php

namespace App\Http\Controllers;

use App\Models\Penimbangan;
use Illuminate\Http\Request;

class PenimbanganDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.penimbangan.index',[
        'penimbangans' => Penimbangan::latest()->paginate(7)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.penimbangan.create',[

      ]);
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
        'kode_timbang'=>'required',
        'tanggal_timbang'=>'required',
        'usia_anak'=>'required',
        'berat_badan'=>'required',
        'jenis_imunisasi'=>'required',
        'jenis_vitamin'=>'required'
      ]);
      Penimbangan::create($validateData);
      return redirect('/penimbangandashboard')->with('pesan','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penimbangan  $penimbangan
     * @return \Illuminate\Http\Response
     */
    public function show(Penimbangan $penimbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penimbangan  $penimbangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penimbangan $penimbangan,$id)
    {
        return view('dashboard.penimbangan.edit',[
          'penimbangans'=>Penimbangan::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penimbangan  $penimbangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penimbangan $penimbangan,$id)
    {
      $validateData=$request->validate([
        'kode_timbang'=>'required',
        'tanggal_timbang'=>'required',
        'usia_anak'=>'required',
        'berat_badan'=>'required',
        'jenis_imunisasi'=>'required',
        'jenis_vitamin'=>'required'
      ]);
      Penimbangan::where('id',$id)->update($validateData);
      return redirect('penimbangandashboard')->with('pesan','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penimbangan  $penimbangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penimbangan $penimbangan,$id)
    {
        Penimbangan::destroy($id);
        return redirect('/penimbangandashboard')->with('pesan','Data Berhasil Dihapus');
    }
}
