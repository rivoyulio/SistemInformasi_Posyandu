@extends('layouts.main')
@section('container')
@if(session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('pesan')}}
  <button type="button" name="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


@endif


<table class="table table-bordered mt-5">
  <h2>Vitamin</h2>
  <!-- <a href="/vitamin/create" class="btn btn-primary">Tambah Data Vitamin</a> -->

  <tr style="background-color:  white;">
    <th>No</th>
    <th>Jenis Vitamin</th>
    <th>Usia Anak</th>
    <!-- <th>Aksi</th> -->
  </tr>

  @foreach ($vitamins as $vitamin)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $vitamin->jenis_vitamin}}</td>
    <td>{{ $vitamin->usia_anak}}</td>
    <!-- <td>
      <a href="/vitamin/{{$vitamin->id}}/edit" class="btn btn-warning">Edit</a>
      <form class="d-inline" action="/vitamin/{{$vitamin->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
    </td> -->
  </tr>
@endforeach
</table>

@endsection
