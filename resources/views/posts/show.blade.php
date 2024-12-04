<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Post Details</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('posts.index') }}>CRUDPosts</a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Add Post</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm">Back to Posts</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit Post</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>