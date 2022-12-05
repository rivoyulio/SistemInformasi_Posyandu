@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data Jurusan</h3>
    <form action="/jurusan/{{$jurusans->id}}" method="post">
      @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama',$jurusans->nama)}}">
        @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Update Jurusan</button>
      </div>


    </form>

  </div>
</div>

@endsection
