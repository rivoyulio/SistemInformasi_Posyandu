@extends('dashboard.layouts.main')
@section('title','Penimbangan')
@section('Penimbangan','active')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data Penimbangan</h3>
    <form action="/penimbangandashboard" method="post">
      @csrf
      <div class="mb-3">
        <label for="kode_timbang" class="form-label">Kode Timbang</label>
        <input type="text" class="form-control @error('kode_timbang') is-invalid @enderror" id="kode_timbang" name="kode_timbang" value="{{old('kode_timbang')}}">
        @error('kode_timbang')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="tanggal_timbang" class="form-label">Tanggal</label>
        <input type="date" class="form-control @error('tanggal_timbang') is-invalid @enderror" id="tanggal_timbang" name="tanggal_timbang" value="{{old('tanggal_timbang')}}">
        @error('tanggal_timbang')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="usia_anak" class="form-label">Usia Anak</label>
        <input type="text" class="form-control @error('usia_anak') is-invalid @enderror" id="usia_anak" name="usia_anak" value="{{old('usia_anak')}}">
        @error('usia_anak')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="berat_badan" class="form-label">Berat Badan</label>
        <input type="text" class="form-control @error('berat_badan') is-invalid @enderror" id="berat_badan" name="berat_badan" value="{{old('berat_badan')}}">
        @error('berat_badan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jenis_imunisasi" class="form-label">Jenis Imunisasi</label>
        <input type="text" class="form-control @error('jenis_imunisasi') is-invalid @enderror" id="jenis_imunisasi" name="jenis_imunisasi" value="{{old('jenis_imunisasi')}}">
        @error('jenis_imunisasi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jenis_vitamin" class="form-label">Jenis Vitamin</label>
        <input type="text" class="form-control @error('jenis_vitamin') is-invalid @enderror" id="jenis_vitamin" name="jenis_vitamin" value="{{old('jenis_vitamin')}}">
        @error('jenis_vitamin')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
     

      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Create Data Penimbangan</button>
      </div>


    </form>

  </div>
</div>

@endsection
