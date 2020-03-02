<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Create new post </h1>

    <form action="/" method="POST">

        @csrf
        
        Title <br/>
        <input type="text" name="title">
        <br/><br/>
        Description <br/>
        <textarea name="description" id="" cols="30" rows="14"></textarea>
        <br/>
        <input type="submit" value="submit">
    </form>

    <p><a href="/">All posts</a></p>
</body>
</html>