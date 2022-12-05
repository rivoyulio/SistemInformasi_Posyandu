<?php

namespace App\Http\Controllers;

use App\Models\Penimbangan;
use App\Models\Jurusan;
use Illuminate\Http\Request;


class PenimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('penimbangan.index',[
        'penimbangans' => Penimbangan::latest()->paginate(8)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dosen.create',[
        'jurusans' =>Jurusan::all()
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
        'nip'=>'required|unique:dosens|size:9',
        'nama'=>'required',
        'jurusan_id'=>'required',
        'email'=>'required|email:rfc,dns',
        'telp'=>'required',
        'alamat'=>'required'
      ]);
      Dosen::create($validateData);
      return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
      return view('dosen.edit',[
        'dosens'=>$dosen,
        'jurusans'=>Jurusan::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
      $validateData=$request->validate([
        'nip'=>'required',
        'nama'=>'required',
        'jurusan_id'=>'required',
        'email'=>'required|email:rfc,dns',
        'telp'=>'required',
        'alamat'=>'required'
      ]);
      Dosen::where('id',$dosen->id)->update($validateData);
      return redirect('/dosen')->with('pesan','Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
      Dosen::destroy($dosen->id);
      return redirect('/dosen')->with('pesan','Data berhasil dihapus');
    }
}
