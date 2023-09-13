@extends('layout.main')


@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Data Siswa Baru</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/siswa/{{ $siswa->id }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="nis" class="form-label">Nis</label>
      <input type="text" class="form-control @error('nis')
      is-invalid
    @enderror" id="nis" name="nis" required autofocus value="{{ old('nis', $siswa->nis) }}">
      @error('nis')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="namasiswa" class="form-label">Nama Siswa</label>
      <input type="text" class="form-control  @error('namasiswa')
      is-invalid
    @enderror" id="namasiswa" name="namasiswa" required value="{{ old('namasiswa',$siswa->namasiswa) }}">
      @error('namasiswa')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <input type="text" class="form-control  @error('kelas')
      is-invalid
    @enderror" id="kelas" name="kelas" required value="{{ old('kelas',$siswa->kelas) }}">
      @error('kelas')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control  @error('alamat')
      is-invalid
    @enderror" id="alamat" name="alamat" required value="{{ old('alamat',$siswa->alamat) }}">
      @error('alamat')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="hp" class="form-label">hp</label>
      <input type="text" class="form-control  @error('hp')
      is-invalid
    @enderror" id="hp" name="hp" required value="{{ old('hp',$siswa->hp) }}">
      @error('hp')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    
    </div>
   
    <button type="submit" class="btn btn-primary">Update Data Siswa</button><br><br>
</form>


</div>
@endsection