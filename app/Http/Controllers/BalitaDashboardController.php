<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;

class BalitaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.balita.index',[
        'balitas' => Balita::latest()->paginate(8)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.balita.create',[
      
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
        'nib'=>'required|unique:balitas|size:4',
        'nama'=>'required',
        'tanggal'=>'required',
        'jenis_kelamin'=>'required|in:L,P',
        'nama_ibu'=>'required',
        'nama_ayah'=>'required',
        'alamat'=>'required',
        'tanggal'=>'required',
        'berat_badan'=>'required'
      ]);
      Balita::create($validateData);
      return redirect('/balitadashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function show(Balita $balita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function edit(Balita $balita,$id)
    {
      return view('dashboard.balita.edit',[
        'balitas'=>Balita::find($id)
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balita $balita, $id)
    {
      $validateData=$request->validate([
        'nib'=>'required|size:4',
        'nama'=>'required',
        'tanggal'=>'required',
        'jenis_kelamin'=>'required|in:L,P',
        'nama_ibu'=>'required',
        'nama_ayah'=>'required',
        'alamat'=>'required',
        'tanggal'=>'required',
        'berat_badan'=>'required'
      ]);
      Balita::where('id',$id)
      ->update($validateData);
      return redirect('/balitadashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balita $balita, $id)
    {
        Balita::destroy($id);
        return redirect('/balitadashboard')->with('pesan','Data Berhasil dihapus');
    }
}
