<!DOCTYPE html>
<html>
<head>
    <title>Blog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BlogApp</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                </li>
                <!-- Add more navigation links as needed -->
            </ul>
        </div>
    </nav>


    {{-- @extends('layouts.app') --}}

@section('content')
    <div class="container text-center mt-5">
        <h1 class="display-4">Welcome to Our Blog</h1>
        <p class="lead">Discover and share your thoughts on our platform.</p>

        <!-- Optional: Display some featured posts or call to actions -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Featured Post</h5>
                        <p class="card-text">Check out our latest featured post to get started.</p>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary">Read Posts</a>
                    </div>
                </div>
            </div>
            <!-- Add more columns for additional sections as needed -->
        </div>
    </div>
@endsection

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
