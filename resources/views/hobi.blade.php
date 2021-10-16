<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($data as $data1)
            Nis : {{ $data1['nis'] }}<br>
            Nama : {{ $data1['nama'] }}<br>
            Kelas : {{ $data1['kelas'] }}<br>

            Hobi :
            <ul>
                @foreach ($data1['hobii'] as $hobii)
                    <li>{{ $hobii }}</li>
                @endforeach
            </ul>
            <hr>
        @endforeach
    </ul>
</body>

</html>
