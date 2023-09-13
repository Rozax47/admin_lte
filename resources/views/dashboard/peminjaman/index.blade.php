@extends('layout.main')

@section('nav')
    
    <a href="/dashboard/peminjaman/create" class="nav-link">Peminjaman Baru</a>

@endsection

@section('container')

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-8 mt-5">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">id_petugas</th>
          <th scope="col">id_siswa</th>
          <th scope="col">id_buku</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($peminjamen as $peminjaman)               
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $peminjaman->petugas_id}}</td>
          <td>{{ $peminjaman->siswa_id }}</td>
          <td>{{ $peminjaman->buku_id }}</td>
          <td><a href="/dashboard/peminjaman/{{ $peminjaman->id }}/edit" class="badge bg-warning">Edit</a></td>
          <td>
          <form action="/dashboard/peminjaman/{{ $peminjaman->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="confirm('kamu yakin puh')">Hapus</button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection