@extends('dashboard.layouts.main')
@section('title','Perawat')
@section('perawat','active')

@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h1>Data Perawat</h1>
  <a href="/perawatdashboard/create" class="btn btn-primary">Tambah Data Penimbangan</a>

  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Telp</th>
    <th>Alamat</th>
    <th>Aksi</th>
    <!-- <th>Aksi</th> -->
  </tr>

  @foreach ($perawats as $perawat)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $perawat->nama}}</td>
    <td>{{ $perawat->email}}</td>
    <td>{{ $perawat->telp}}</td>
    <td>{{ $perawat->alamat}}</td>
    <td>
      <a href="/perawatdashboard/{{$perawat->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
      <form class="d-inline" action="/perawatdashboard/{{$perawat->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
    </td>
  </tr>
@endforeach
</table>
{{$perawats->links('pagination::bootstrap-5')}}

@endsection
