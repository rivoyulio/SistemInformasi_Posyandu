@extends('dashboard.layouts.main')
@section('title','Penimbangan')
@section('penimbangan','active')

@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h1>Data Penimbangan</h1>
  <a href="/penimbangandashboard/create" class="btn btn-primary">Tambah Data Penimbangan</a>

  <tr>
    <th>No</th>
    <th>Kode Timbang</th>
    <th>Tanggal</th>
    <th>Usia</th>
    <th>Berat Badan</th>
    <th>Jenis Imunisasi</th>
    <th>Jenis Vitamin</th>
    <!-- <th>Aksi</th> -->
  </tr>

  @foreach ($penimbangans as $penimbangan)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $penimbangan->kode_timbang}}</td>
    <td>{{ $penimbangan->tanggal_timbang}}</td>
    <td>{{ $penimbangan->usia_anak}}</td>
    <td>{{ $penimbangan->berat_badan}}</td>
    <td>{{ $penimbangan->jenis_imunisasi}}</td>
    <td>{{ $penimbangan->jenis_vitamin}}</td>
    <td>
      <a href="/penimbangandashboard/{{$penimbangan->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
      <form class="d-inline" action="/penimbangandashboard/{{$penimbangan->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
    </td>
  </tr>
@endforeach
</table>
{{$penimbangans->links('pagination::bootstrap-5')}}

@endsection
