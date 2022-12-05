@extends('dashboard.layouts.main')
@section('title','Perawat')
@section('Perawat','active')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data Perawat</h3>
    <form action="/perawatdashboard" method="post">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Perawat</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
        @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="telp" class="form-label">Telepon</label>
        <input type="text" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" value="{{old('telp')}}">
        @error('telp')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{old('alamat')}}</textarea>
        @error('alamat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Create Data Perawat</button>
      </div>


    </form>

  </div>
</div>

@endsection
