@extends('layout.main')

@section('nav')

    <a href="/dashboard/buku/create" class="nav-link">Tambah Buku Baru</a>

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
          <th scope="col">Kode Buku</th>
          <th scope="col">Judul</th>
          <th scope="col">Pengarang</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Bukus as $buku)               
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $buku->kodebuku }}</td>
          <td>{{ $buku->judul}}</td>
          <td>{{ $buku->pengarang}}</td>
          <td>{{ $buku->penerit}}</td>
          <td><a href="/dashboard/buku/{{ $buku->id }}/edit" class="badge bg-warning">Edit</a></td>
          <td>
          <form action="/dashboard/buku/{{ $buku->id }}" method="post" class="d-inline">
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