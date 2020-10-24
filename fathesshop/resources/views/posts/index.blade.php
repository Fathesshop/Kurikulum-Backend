@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                @isset($category)
                    <h4>Category: {{ $category->name }}</h4>
                @endisset
                @isset($tag)
                    <h4>Tag: {{ $tag->name }}</h4>
                @endisset
                @if (!isset($category) && !isset($tag))
                    <h4>All Posts</h4>
                @endif
                <hr>
            </div>
            <div>
                @if (Auth::check())
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login to Create New Post</a>
                @endif
            </div>
        </div>
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow">

                        <div class="container mt-2">
                            <div>
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <img style="height: 200px; object-fit: cover; object-position: center"
                                        class="card-img-top rounded" src="{{ $post->takeImage }}" alt="{{ $post->slug }}">
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> <a href="{{ route('categories.show', $post->category->slug) }}"
                                    class="text-secondary"><small>{{ $post->category->name }}</small> -</a>
                                @foreach ($post->tags as $tag)

                                    <a href="{{ route('tags.show', $tag->slug) }}"
                                        class="text-secondary"><small>{{ $tag->name }}</small></a>
                                @endforeach
                            </div>
                            <h5>
                                <a href="{{ route('posts.show', $post->slug) }}" class="card-title text-dark ">{{ $post->title }}</a>
                            </h5>
                            <div class="text-secondary">{{ Str::limit($post->body, '100') }}</div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div>
                                <img width="25" class="rounded-circle mr-3" src="{{ $post->user->gravatar() }}"
                                    alt="">{{ $post->user->name }}
                            </div>
                            <div>
                                {{ $post->created_at->diffForHumans() }}
                            </div>
                        </div>
                        @can(['update', 'delete'], $post)
                            {{-- @if (auth()
                    ->user()
                    ->is($post->user)) --}}
                                <div class="card-footer d-flex justify-content-between">
                                    <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success mr-1">Edit</a>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="
                                                            #modelId">Delete</button>
                                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Apakah Anda ingin menghapusnya</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="header">Title: {{ $post->title }}</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="/posts/{{ $post->slug }}/delete" method="post">
                                                        @csrf
                                                        @method("delete")
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tidak</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        <strong>There are no posts</strong>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div>{{ $posts->links() }}</div>
        </div>
    </div>
@endsection
