@extends('layouts.main')
@section('container')
@if(session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('pesan')}}
  <button type="button" name="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


@endif



<table class="table table-bordered mt-5">
  <h2>Data Perawat</h2>
  <!-- <a href="/perawat/create" class="btn btn-primary">Tambah Data Perawat</a> -->

  <tr style="background-color:  white;">
    <th>No</th>
    <th>Nama perawat</th>
    <th>Email</th>
    <th>No Telp</th>
    <th>Alamat</th>
    <!-- <th>Aksi</th> -->
  </tr>

  @foreach ($perawats as $perawat)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $perawat->nama}}</td>
    <td>{{ $perawat->email}}</td>
    <td>{{ $perawat->telp}}</td>
    <td>{{ $perawat->alamat}}</td>
    <!-- <td>
      <a href="/perawat/{{$perawat->id}}/edit" class="btn btn-warning">Edit</a>
      <form class="d-inline" action="/perawat/{{$perawat->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
    </td> -->
  </tr>
@endforeach
</table>

@endsection
