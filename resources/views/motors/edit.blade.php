<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit-Motor</title>
</head>
<body>
    <form action="/motors/{{$motor->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="text">Nama :</label>
        <input type="text" id="text" name="nama" value="{{$motor->nama}}">
        <label for="number">Harga :</label>
        <input type="number" name="harga" id="harga" value="{{$motor->harga}}">
        <label for="number">Stok :</label>
        <input type="number" name="stok" id="stok" value="{{$motor->stok}}">
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>