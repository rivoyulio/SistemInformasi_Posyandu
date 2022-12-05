@extends('dashboard.layouts.main')
@section('title','Vitamin')
@section('Vitamin','active')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data Vitamin</h3>
    <form action="/vitamindashboard/{{$vitamins->id}}" method="post">
      @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="jenis_vitamin" class="form-label">Jenis Vitamin</label>
        <input type="text" class="form-control @error('jenis_vitamin') is-invalid @enderror" id="jenis_vitamin" name="jenis_vitamin" value="{{old('jenis_vitamin',$vitamins->jenis_vitamin)}}">
        @error('jenis_vitamin')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="usia_anak" class="form-label">Usia Anak</label>
        <input type="text" class="form-control @error('usia_anak') is-invalid @enderror" id="usia_anak" name="usia_anak" value="{{old('usia_anak',$vitamins->usia_anak)}}">
        @error('usia_anak')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
     
      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Update Data Vitamin</button>
      </div>


    </form>

  </div>
</div>

@endsection
