// resources/views/posts/index.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Posts with Comments</title>
</head>
<body>
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <h2>{{ $post->title }} by {{ $post->member->name }}</h2>
        <p>{{ $post->body }}</p>
        <h3>Comments:</h3>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->content }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
