@extends('layout.main')

@section('container')
  
@section('nav')
    
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link">Log out</button>
    </form>

@endsection

@endsection