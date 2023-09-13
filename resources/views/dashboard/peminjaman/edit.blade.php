@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Peminjaman</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/peminjaman/{{ $peminjaman->id }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="petugas" class="form-label">Nama Petugas</label>
        <select class="form-select" name="petugas_id">
            <option value="" disabled>Pilih Nama Petugas</option>
          @foreach ($petugases as $petugas)
            @if (old('petugas_id', $peminjaman->id) == $petugas->id)
              <option value="{{ $petugas->id }}" selected>{{ $petugas->namapetugas }}</option>
              @else
              <option value="{{ $petugas->id }}">{{ $petugas->namapetugas }}</option>
            @endif           
          @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="siswa" class="form-label">Nama siswa</label>
        <select class="form-select" name="siswa_id">
            <option value="" disabled>Pilih Nama siswa</option>
          @foreach ($siswas as $siswa)
            @if (old('siswa_id', $peminjaman->siswa_id) == $siswa->id)
              <option value="{{ $siswa->id }}" selected>{{ $siswa->namasiswa }}</option>
              @else
              <option value="{{ $siswa->id }}">{{ $siswa->namasiswa }}</option>
            @endif           
          @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="buku" class="form-label">judul buku</label>
        <select class="form-select" name="buku_id">
            <option value="" disabled>Pilih judul buku</option>
          @foreach ($bukus as $buku)
            @if (old('buku_id', $peminjaman->buku_id) == $buku->id)
              <option value="{{ $buku->id }}" selected>{{ $buku->judul }}</option>
              @else
              <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
            @endif           
          @endforeach
        </select>
    </div>
</div>
   
    <button type="submit" class="btn btn-primary">Create Peminjaman</button><br><br>
</form>

</div>
@endsection