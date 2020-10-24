@extends('layouts.app')
@section('title', $post->title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card shadow-lg">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Posts</a></li>
                            <li class="breadcrumb-item"><a
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                            <li class="breadcrumb-item">{{ $post->title }}</li>
                        </ol>
                    </nav>
                    <div class="card-body">
                        <img style="max-height: 500px; object-fit: cover; object-position: center"
                            class="card-img-top rounded" src="{{ $post->takeImage }}" alt="{{ $post->slug }}">
                        <h1>{{ $post->title }}</h1>
                        <div class="media my-3">
                            <img width="50" class="rounded-circle mr-3" src="{{ $post->user->gravatar() }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $post->user->name }}
                                </div>
                                <div>
                                    {{ '@' . $post->user->username }}
                                </div>
                            </div>

                        </div>
                        <hr>
                        <p>{!! nl2br($post->body) !!}</p>
                        @foreach ($post->tags as $tag)
                            <a href="/tags/{{ $tag->slug }}">#{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow-lg">
                    <div class="alert alert-secondary" role="alert">Kategori</div>                          
                    <div class="card-body">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('tags.show', $tag->slug) }}"><div class="card text-white bg-dark py-2 mb-1"><span class="btn btn-dark">{{ $tag->name }}</span></div></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
