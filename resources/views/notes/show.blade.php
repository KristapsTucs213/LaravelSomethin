<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Single Note view</h1>
    <p>Title: {{ $note->title }}</p>
    <p>Content: {{ $note->content }}</p>

    <a href="/notes">Back To All Posts</a>

</body>

</html>
