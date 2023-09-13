@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Post</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/buku" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="kodebuku" class="form-label">Kode Buku</label>
      <input type="text" class="form-control @error('kodebuku')
      is-invalid
    @enderror" id="kodebuku" name="kodebuku" required autofocus value="{{ old('kodebuku') }}">
      @error('kodebuku')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control  @error('judul')
      is-invalid
    @enderror" id="judul" name="judul" required value="{{ old('judul') }}">
      @error('judul')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="pengarang" class="form-label">Pengarang</label>
      <input type="text" class="form-control  @error('pengarang')
      is-invalid
    @enderror" id="pengarang" name="pengarang" required value="{{ old('pengarang') }}">
      @error('pengarang')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="penerit" class="form-label">Penerbit</label>
      <input type="text" class="form-control  @error('penerit')
      is-invalid
    @enderror" id="penerit" name="penerit" required value="{{ old('penerit') }}">
      @error('pengarang')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    
    </div>
   
    <button type="submit" class="btn btn-primary">Create Post</button><br><br>
</form>

</div>
@endsection