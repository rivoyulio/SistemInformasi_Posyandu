@extends('dashboard.layouts.main')
@section('title','Jadwal')
@section('jadwal','active')

@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h1>Data Jadwal</h1>
  <a href="/jadwaldashboard/create" class="btn btn-primary">Tambah Data jadwal</a>

  <tr>
    <th>No</th>
    <th>Hari</th>
    <th>Nama Perawat</th>
    <th>Jam Masuk</th>
    <th>Jam Keluar</th>
    <th>Aksi</th>
    <!-- <th>Aksi</th> -->
  </tr>

  @foreach ($jadwals as $jadwal)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $jadwal->hari}}</td>
    <td>{{ $jadwal->nama_perawat}}</td>
    <td>{{ $jadwal->jam_masuk}}</td>
    <td>{{ $jadwal->jam_keluar}}</td>
    <td>
      <a href="/jadwaldashboard/{{$jadwal->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
      <form class="d-inline" action="/jadwaldashboard/{{$jadwal->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
    </td>
  </tr>
@endforeach
</table>
{{$jadwals->links('pagination::bootstrap-5')}}

@endsection
