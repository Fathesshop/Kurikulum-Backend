<!-- Controller (dari app/Http/Controllers/) -->
@extends('layouts.app')
<!--mengambil variabel apa aja yang ada di layouts/app.blade.php -->
@section('title')
    Edit - {{ $article->title }} - Fathesshop
@endsection
@section('content')
    <!-- menggunakan variabel/content yang di selipkan dari extends -->

    <h1> Edit Artikel Baru </h1>
    <form action="/artikel/{{ $article->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-input field="title" label="Judul" type="text" value="{{ $article->title }}" />
        <x-textarea field="subject" label="Subject" value="{{ $article->subject }}" />
        @if ($article->thumbnail)
            <img src="/image/{{ $article->thumbnail }}" width="150">
        @else
            <p>Kamu belum pumya thumbnail</p>
        @endif
        <x-inputfile />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
