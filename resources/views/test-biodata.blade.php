<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Biodata</h2>
    </center>
    @foreach ($query as $item)
        Name : {{ $item->name }}<br>
        BornDate : {{ $item->bornDate }}<br>
        gender : {{ $item->gender }}<br>
        Address : {{ $item->address }}<br>
        Religion : {{ $item->religion }}<br>
        Age : {{ $item->age }}<br>
        Hobby : {{ $item->hobby }}<br>
        <hr>
    @endforeach
</body>

</html>
