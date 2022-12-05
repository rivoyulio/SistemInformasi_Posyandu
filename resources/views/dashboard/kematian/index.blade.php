@extends('dashboard.layouts.main')
@section('title','Kematian')
@section('kematian','active')

@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h1>Data Kematian</h1>
  <a href="/kematiandashboard/create" class="btn btn-primary">Tambah Data Kematian</a>

  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tanggal Kematian</th>
    <th>keterangan</th>
    <th>Aksi</th>
    <!-- <th>Aksi</th> -->
  </tr>

  @foreach ($kematians as $kematian)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $kematian->nama}}</td>
    <td>{{ $kematian->tanggal_kematian}}</td>
    <td>{{ $kematian->keterangan}}</td>
    <td>
      <a href="/kematiandashboard/{{$kematian->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
      <form class="d-inline" action="/kematiandashboard/{{$kematian->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
    </td>
  </tr>
@endforeach
</table>
{{$kematians->links('pagination::bootstrap-5')}}

@endsection
