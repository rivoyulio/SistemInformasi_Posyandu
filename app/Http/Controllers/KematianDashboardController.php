<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use Illuminate\Http\Request;

class KematianDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.kematian.index',[
        'kematians'=>Kematian::latest()->paginate(7)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.kematian.create');
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
        'tanggal_kematian'=>'required',
        'keterangan'=>'required'
      ]);
      Kematian::create($validateData);
      return redirect('/kematiandashboard')->with('pesan','Data berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function show(Kematian $kematian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function edit(Kematian $kematian,$id)
    {
        return view('dashboard.kematian.edit',[
          'kematians'=>Kematian::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kematian $kematian,$id)
    {
        $validateData=$request->validate([
            'nama'=>'required',
            'tanggal_kematian'=>'required',
            'keterangan'=>'required'
        ]);
        Kematian::where('id',$id)->update($validateData);
        return redirect('/kematiandashboard')->with('pesan','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kematian $kematian, $id)
    {
      Kematian::destroy($id);
      return redirect('/kematiandashboard')->with('pesan','Data Berhasil Dihapus');
    }
}
