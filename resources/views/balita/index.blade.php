@extends('layouts.main')
@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h2 class="mt-3">Data Balita</h2>
  <!-- <a href="/balita/create" class="btn btn-primary">Tambah Data Balita</a> -->

  <tr style="background-color:  white;">
    <th>ID</th>
    <th>NIB</th>
    <th>Nama</th>
    <th>Tanggal</th>
    <th>Jenis Kelamin</th>
    <th>Nama Ibu</th>
    <th>Nama Ayah</th>
    <th>Alamat</th>
    <th>Berat Badan</th>
  </tr>

  @foreach ($balitas as $balita)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $balita->nib}}</td>
    <td>{{ $balita->nama}}</td>
    <td>{{ $balita->tanggal}}</td>
    <td>{{ $balita->jenis_kelamin}}</td>
    <td>{{ $balita->nama_ibu}}</td>
    <td>{{ $balita->nama_ayah}}</td>
    <td>{{ $balita->alamat}}</td>
    <td>{{ $balita->berat_badan}}</td>
  </tr>
@endforeach
</table>
{{$balitas->links('pagination::bootstrap-5')}}

@endsection
