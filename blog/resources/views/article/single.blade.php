<!-- Controller (dari app/Http/Controllers/) -->
@extends('layouts.app')
<!--mengambil variabel apa aja yang ada di layouts/app.blade.php -->
@section('title')
{{ $article->title }} - Fathesshop
@endsection
@section('content')
    <!-- menggunakan variabel/content yang di selipkan dari extends -->

    <h1> {{ $article->title }} </h1>
    <p>{{ $article->subject }}</p>

    <div class="row mb-2">
    <a href="/artikel/{{ $article->id }}/edit" class="btn btn-info btn-sm">Edit</a>
    <form action="/artikel/{{ $article->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Hapus</button>
    </form>
</div>
    <a href="/artikel" class="btn btn-sm btn-info">Kembali</a>
@endsection
