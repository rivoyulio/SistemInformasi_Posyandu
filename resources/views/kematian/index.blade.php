@extends('layouts.main')
@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h2 class="mt-3">Data Kematian</h2>
  <!-- <a href="/kematian/create" class="btn btn-primary">Tambah Data Kematian</a> -->

  <tr style="background-color:  white;">
    <th>ID</th>
    <th>Nama</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
  </tr>

  @foreach ($kematians as $kematian)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $kematian->nama}}</td>
    <td>{{ $kematian->tanggal_kematian}}</td>
    <td>{{ $kematian->keterangan}}</td>
  </tr>
@endforeach
</table>
{{$kematians->links('pagination::bootstrap-5')}}

@endsection
