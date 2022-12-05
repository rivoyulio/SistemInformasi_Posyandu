@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data mahasiswa</h3>
    <form action="/mahasiswa" method="post">
      @csrf
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{old('nim')}}">
        @error('nim')
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
        <label class="form-label">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" {{old('jenis_kelamin')=='L' ? 'checked' : ''}} checked>
          <label class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked(old('jenis_kelamin')=='P')>
          <label class="form-check-label">Perempuan</label>
        </div>
        @error('jenis_kelamin')
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
        <button type="submit" name="submit" class="btn btn-primary float-end">Create Mahasiswa</button>
      </div>


    </form>

  </div>
</div>

@endsection
