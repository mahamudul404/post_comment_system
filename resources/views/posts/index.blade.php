@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">All Posts</h1>

        <div class="row">
            <div class="col-md-12 mb-4">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
            </div>

            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Post Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">Likes: {{ $post->impressions->where('type', 'like')->count() }} | Dislikes:
                                {{ $post->impressions->where('type', 'dislike')->count() }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">View Post</a>

                            <form class="mt-4" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Post</button>
                            </form>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
