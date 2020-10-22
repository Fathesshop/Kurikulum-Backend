<!-- Controller (dari app/Http/Controllers/) -->
@extends('layouts.app')
<!--mengambil variabel apa aja yang ada di layouts/app.blade.php -->
@section('title', 'Create Artikel - Fathesshop')
@section('content')
    <!-- menggunakan variabel/content yang di selipkan dari extends -->

    <h1> Buat Artikel Baru </h1>
    <form action="/artikel" method="post" enctype="multipart/form-data">
        @csrf
        <x-input field="title" label="Judul" type="text" />
        <x-textarea field="subject" label="Subject" />
        <x-inputfile />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
