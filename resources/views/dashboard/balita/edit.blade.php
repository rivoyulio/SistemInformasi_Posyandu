@extends('dashboard.layouts.main')
@section('title','Balita')
@section('balita','active')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data balita</h3>
    <form action="/balitadashboard/{{$balitas->id}}" method="post">
      @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="nib" class="form-label">NIB</label>
        <input type="text" class="form-control @error('nib') is-invalid @enderror" id="nib" name="nib" value="{{old('nib',$balitas->nib)}}">
        @error('nib')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama',$balitas->nama)}}">
        @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{old('tanggal',$balitas->tanggal)}}">
        @error('tanggal')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" {{old('jenis_kelamin',$balitas->jenis_kelamin)=='L' ? 'checked' : ''}} checked>
          <label class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked(old('jenis_kelamin',$balitas->jenis_kelamin)=='P')>
          <label class="form-check-label">Perempuan</label>
        </div>
        @error('jenis_kelamin')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama_ibu" class="form-label">Nama Ibu</label>
        <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" value="{{old('nama_ibu',$balitas->nib,$balitas->nama_ibu)}}">
        @error('nama_ibu')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama_ayah" class="form-label">Nama Ayah</label>
        <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" value="{{old('nama_ayah',$balitas->nama_ibu)}}">
        @error('nama_ayah')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{old('alamat',$balitas->alamat)}}</textarea>
        @error('alamat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="berat_badan" class="form-label">Berat Badan</label>
        <input type="text" class="form-control @error('berat_badan') is-invalid @enderror" id="berat_badan" name="berat_badan" value="{{old('berat_badan',$balitas->berat_badan)}}">
        @error('berat_badan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Update Data Balita</button>
      </div>


    </form>

  </div>
</div>

@endsection
