<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/motors" method="POST">
        @csrf
        <label for="text">Nama :</label>
        <input type="text" id="text" name="nama">
        <label for="number">Harga :</label>
        <input type="number" name="harga" id="harga">
        <label for="number">Stok :</label>
        <input type="number" name="stok" id="stok">
        <button type="submit">Kirim</button>
    </form>
</body>
</html>