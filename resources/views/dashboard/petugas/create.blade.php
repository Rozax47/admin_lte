@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambahkan Petugas Baru</h1>
</div>



<div class="col-lg-8">
<form method="post" action="/dashboard/petugas" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="namapetugas" class="form-label">Nama Petugas</label>
      <input type="text" class="form-control  @error('namapetugas')
      is-invalid
    @enderror" id="namapetugas" name="namapetugas" required value="{{ old('namapetugas') }}">
      @error('namapetugas')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="hp" class="form-label">hp</label>
      <input type="text" class="form-control  @error('hp')
      is-invalid
    @enderror" id="hp" name="hp" required value="{{ old('hp') }}">
      @error('hp')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">User Name</label>
      <input type="text" class="form-control  @error('username')
      is-invalid
    @enderror" id="username" name="username" required value="{{ old('username') }}">
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control  @error('password')
      is-invalid
    @enderror" id="password" name="password" required value="{{ old('password') }}">
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    
    </div>
   
    <button type="submit" class="btn btn-primary">Tambahkan Petugas</button><br><br>
</form>

</div>
@endsection