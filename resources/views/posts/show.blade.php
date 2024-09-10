@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Post Title and Image -->
        <div class="card mb-4">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Post Image" style="max-width: 100%;">
            @endif
            <div class="card-body">
                <h1 class="card-title">{{ $post->title }}</h1>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Comments</h5>
            </div>
            <ul class="list-group list-group-flush">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <p class="mb-1">{{ $comment->content }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Add Comment Form -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('posts.comments.store', $post) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="3" required></textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </form>
            </div>
        </div>

        <!-- Impressions Section -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Impressions</h5>
                <p>Likes: {{ $post->impressions->where('type', 'like')->count() }} | Dislikes: {{ $post->impressions->where('type', 'dislike')->count() }}</p>
                <form action="{{ route('posts.impressions.store', [$post, 'like']) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-success">Like</button>
                </form>
                <form action="{{ route('posts.impressions.store', [$post, 'dislike']) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Dislike</button>
                </form>
            </div>
        </div>
    </div>
@endsection
