<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Pesanan</h1>
    @foreach ($a as $data)
        <p>Id : {{ $data->id }}</p>
        <p>Nama pesanan : {{ $data->namapesanan }}</p>
        <p>Nama pelanggan : {{ $data->namapelanggan }}</p>
        <p>Nama barang : {{ $data->barang }}</p>
        <p>Quality : {{ $data->quality }}</p>
        <p>Tgl Pesan : {{ $data->tgl_pesan }}</p>
        <hr>
    @endforeach
</body>

</html>
