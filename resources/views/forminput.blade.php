<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input laravel</title>
</head>
<body>
    <form action="/formulir/luaran" method="get">
    {{ csrf_field() }}
    Nim : <input type="text" name="nim"> <br/>
    Nama :<input type="text" name="nama"> <br/>
    Alamat :<textarea name="alamat" cols="70" rows="5"></textarea>
    <br/>
    <input type="submit" value="Simpan">
    </form>
</body>
</html>