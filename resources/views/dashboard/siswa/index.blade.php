@extends('layout.main')

@section('nav')
    
    <a href="/dashboard/siswa/create" class="nav-link">Tambah Siswa Baru</a>

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
          <th scope="col">Nis</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Kelas</th>
          <th scope="col">Alamat</th>
          <th scope="col">hp</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($siswas as $siswa)               
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $siswa->nis }}</td>
          <td>{{ $siswa->namasiswa }}</td>
          <td>{{ $siswa->kelas }}</td>
          <td>{{ $siswa->alamat }}</td>
          <td>{{ $siswa->hp }}</td>
          <td><a href="/dashboard/siswa/{{ $siswa->id }}/edit" class="badge bg-warning">Edit</a></td>
          <td>
          <form action="/dashboard/siswa/{{ $siswa->id }}" method="post" class="d-inline">
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