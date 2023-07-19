<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>data mobil</h1>
    <table>
        <thead>
            <tr>
                <th>NOMOR</th>
                <th>Nama mobil</th>
                <th>Merek mobil</th>
                <th>CC</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataMobil as $mobil)
            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$mobil['nama_mobil']}}</td>
                <td>{{$mobil['merekMobil']}}</td>
                <td>{{$mobil['CC']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
