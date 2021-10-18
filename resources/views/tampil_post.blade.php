<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Post</h1>
    @foreach ($p as $data)
        <p>Id : {{ $data->id }}</p>
        <p>Title : {{ $data->title }}</p>
        <p>Content : {{ $data->content }}</p>
        <hr>
    @endforeach
</body>

</html>
