<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Pembelian</h1>
    @foreach ($b as $data)
        <p>Id : {{ $data->id }}</p>
        <p>Nama pembelian : {{ $data->namapembelian }}</p>
        <p>Nama barang : {{ $data->barang }}</p>
        <p>Nama suplier : {{ $data->namasuplier }}</p>
        <p>Quality : {{ $data->quality }}</p>
        <p>Tgl : {{ $data->tgl }}</p>
        <hr>
    @endforeach
</body>

</html>
