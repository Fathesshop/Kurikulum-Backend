@extends('layouts.app')
<!-- mengambil variabel apa aja yang ada di layouts/app.blade.php -->
@section('title', 'Artikel - Fathesshop')
@section('content')
    <!-- menggunakan variabel/content yang di selipkan dari extends -->

    @foreach ($articles->chunk(3) as $articleChunk)
        <div class="row">
            @foreach ($articleChunk as $article)
                <div class="col card mb-1 ml-1 mr-1 shadow">
                <img class="card-img-top" src="/image/{{$article->thumbnail}}">
                    <div class="card-body">
                        <strong>
                            <p>{{ ucfirst($article->title) }} </p>
                        </strong>
                        <p>{{ $article->subject }} </p>
                        <a href="/artikel/{{ $article->slug }}" class="btn btn-info btn-sm stretched-link ">Baca</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    <div>
        {{ $articles->links() }}
    </div>
    @include('layouts.footer')
    @endsection