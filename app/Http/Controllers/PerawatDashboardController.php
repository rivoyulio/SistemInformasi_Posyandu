<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;

class PerawatDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.perawat.index',[
        'perawats' => Perawat::latest()->paginate(7)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.perawat.create',[

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
        'nama'=>'required',
        'email'=>'required',
        'telp'=>'required',
        'alamat'=>'required'
      ]);
      Perawat::create($validateData);
      return redirect('/perawatdashboard')->with('pesan','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function show(Perawat $perawat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function edit(Perawat $perawat,$id)
    {
        return view('dashboard.perawat.edit',[
          'perawats'=>Perawat::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perawat $perawat,$id)
    {
      $validateData=$request->validate([
        'nama'=>'required',
        'email'=>'required',
        'telp'=>'required',
        'alamat'=>'required'
      ]);
      Perawat::where('id',$id)->update($validateData);
      return redirect('perawatdashboard')->with('pesan','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perawat $perawat,$id)
    {
        Perawat::destroy($id);
        return redirect('/perawatdashboard')->with('pesan','Data Berhasil Dihapus');
    }
}
