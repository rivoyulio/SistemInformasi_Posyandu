@extends('dashboard.layouts.main')
@section('title','Kematian')
@section('Kematian','active')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data Kematian</h3>
    <form action="/kematiandashboard" method="post">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
        @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="tanggal_kematian" class="form-label">Tanggal Kematian</label>
        <input type="date" class="form-control @error('tanggal_kematian') is-invalid @enderror" id="tanggal_kematian" name="tanggal_kematian" value="{{old('tanggal_kematian')}}">
        @error('tanggal_kematian')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{old('keterangan')}}">
        @error('keterangan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
     

      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Create Data Vitamin</button>
      </div>


    </form>

  </div>
</div>

@endsection
