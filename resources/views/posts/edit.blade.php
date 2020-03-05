<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Create new post </h1>

    <form action="/posts/{{ $post->id }}" method="POST">

        @csrf
        @method("PUT")
        Title <br/>
        <input type="text" name="title" value="{{ $post->title }}">
        <br/><br/>
        Description <br/>
        <textarea name="description" id="" cols="30" rows="14">{{ $post->description }}</textarea>
        <br/>
        <input type="submit" value="submit">
    </form>

    <p><a href="/">All posts</a></p>
</body>
</html>