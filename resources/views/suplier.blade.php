<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Suplier</h1>
    @foreach ($d as $data)
        <p>Id : {{ $data->id }}</p>
        <p>Nama suplier : {{ $data->namasuplier }}</p>
        <p>Nama : {{ $data->nama }}</p>
        <p>Alamat : {{ $data->alamat }}</p>
        <p>Kode Pos: {{ $data->kodepos }}</p>
        <p>Kota : {{ $data->kota }}</p>
        <hr>
    @endforeach
</body>

</html>
