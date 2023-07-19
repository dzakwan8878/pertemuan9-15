<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/mobil/store" method="post">
        @csrf
       <label for="">nama mobil</label><br>
       <input type="text"name="nama_mobil" requeri><br>
       <label for="">merek mobil</label><br>
       <input type="text" name="merek_mobil" required><br>
       <label for="">CC</label><br>
       <input type="text"name="CC" required><br>
       <button type="submit">simpan</button>
</body>

</html>