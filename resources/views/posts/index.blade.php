<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Blog Post</h1>

    <ul>
        @foreach ($posts as $post)
            <li> {{$post->title}} <a href="/posts/{{ $post->id }}">See full post</a></li>
            
        @endforeach
    </ul>

    <p><a href="/posts/create">Create New Post</a></p>
</body>
</html>