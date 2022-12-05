@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data Dosen</h3>
    <form action="/dosen" method="post">
      @csrf
      <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{old('nip')}}">
        @error('nip')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
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
        <label class="form-label">Jurusan</label>
        <select class="form-select" name="jurusan_id" aria-label="Default select example">
          @foreach ($jurusans as $jurusan)
            @if (old('jurusan_id')==$jurusan->id)
            <option value="{{$jurusan->id}}" selected>{{$jurusan->nama}}</option>
            @else
            <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
            @endif
          @endforeach
        </select>
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
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
        @error('email')
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
        <button type="submit" name="submit" class="btn btn-primary float-end">Create Dosen</button>
      </div>


    </form>

  </div>
</div>

@endsection
