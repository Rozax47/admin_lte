@extends('layout.main')

@section('nav')
    
    <a href="/dashboard/petugas/create" class="nav-link">Tambah Petugas Baru</a>

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
          <th scope="col">Nama Petugas</th>
          <th scope="col">hp</th>
          <th scope="col">Username</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($petugases as $petugas)               
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $petugas->namapetugas }}</td>
          <td>{{ $petugas->hp }}</td>
          <td>{{ $petugas->username }}</td>
          <td><a href="/dashboard/petugas/{{ $petugas->id }}/edit" class="badge bg-warning">Edit</a></td>
          <td>
          <form action="/dashboard/petugas/{{ $petugas->id }}" method="post" class="d-inline">
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