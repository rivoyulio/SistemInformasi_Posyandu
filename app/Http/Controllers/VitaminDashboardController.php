<?php

namespace App\Http\Controllers;

use App\Models\Vitamin;
use Illuminate\Http\Request;

class VitaminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.vitamin.index',[
        'vitamins'=>Vitamin::latest()->paginate(7)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.vitamin.create');
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
        'jenis_vitamin'=>'required',
        'usia_anak'=>'required'
      ]);
      Vitamin::create($validateData);
      return redirect('/vitamindashboard')->with('pesan','Data berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function show(Vitamin $vitamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vitamin $vitamin,$id)
    {
        return view('dashboard.vitamin.edit',[
          'vitamins'=>Vitamin::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vitamin $vitamin,$id)
    {
        $validateData=$request->validate([
          'jenis_vitamin'=>'required',
          'usia_anak'=>'required'
        ]);
        Vitamin::where('id',$id)->update($validateData);
        return redirect('/vitamindashboard')->with('pesan','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitamin $vitamin, $id)
    {
      Vitamin::destroy($id);
      return redirect('/vitamindashboard')->with('pesan','Data Berhasil Dihapus');
    }
}
