@extends('dashboard.layouts.main')
@section('title','Vitamin')
@section('vitamin','active')

@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h1>Data Vitamin</h1>
  <a href="/vitamindashboard/create" class="btn btn-primary">Tambah Data Vitamin</a>

  <tr>
    <th>No</th>
    <th>Jenis Vitamin</th>
    <th>Usia Anak</th>
    <th>Aksi</th>
    <!-- <th>Aksi</th> -->
  </tr>

  @foreach ($vitamins as $vitamin)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $vitamin->jenis_vitamin}}</td>
    <td>{{ $vitamin->usia_anak}}</td>
    <td>
      <a href="/vitamindashboard/{{$vitamin->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
      <form class="d-inline" action="/vitamindashboard/{{$vitamin->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
    </td>
  </tr>
@endforeach
</table>
{{$vitamins->links('pagination::bootstrap-5')}}

@endsection
