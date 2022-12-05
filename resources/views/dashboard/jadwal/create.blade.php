@extends('dashboard.layouts.main')
@section('title','Jadwal')
@section('Jadwal','active')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data Jadwal</h3>
    <form action="/jadwaldashboard" method="post">
      @csrf
      <div class="mb-3">
        <label for="hari" class="form-label">Hari</label>
        <input type="text" class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" value="{{old('hari')}}">
        @error('hari')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama_perawat" class="form-label">Nama Perawat</label>
        <input type="text" class="form-control @error('nama_perawat') is-invalid @enderror" id="nama_perawat" name="nama_perawat" value="{{old('nama_perawat')}}">
        @error('nama_perawat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jam_masuk" class="form-label">Jam Masuk</label>
        <input type="text" class="form-control @error('jam_masuk') is-invalid @enderror" id="jam_masuk" name="jam_masuk" value="{{old('jam_masuk')}}">
        @error('jam_masuk')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jam_keluar" class="form-label">Jam Keluar</label>
        <input type="text" class="form-control @error('jam_keluar') is-invalid @enderror" id="jam_keluar" name="jam_keluar" value="{{old('jam_keluar')}}">
        @error('jam_keluar')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
     

      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Create Data Jadwal</button>
      </div>


    </form>

  </div>
</div>

@endsection
