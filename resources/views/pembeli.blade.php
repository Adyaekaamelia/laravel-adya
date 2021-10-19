<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Pembeli</h1>
    @foreach ($c as $data)
        <p>Id : {{ $data->id }}</p>
        <p>Nama pembeli : {{ $data->namapembeli }}</p>
        <p>Nama : {{ $data->nama }}</p>
        <p>Jenis KElamin: {{ $data->jeniskelamin }}</p>
        <p>Alamat : {{ $data->alamat }}</p>
        <p>Kode Pos: {{ $data->kodepos }}</p>
        <p>Kota : {{ $data->kota }}</p>
        <p>Tgl : {{ $data->_lahir }}</p>
        <hr>
    @endforeach
</body>

</html>
