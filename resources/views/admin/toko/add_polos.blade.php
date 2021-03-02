<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama_toko">Nama Toko</label>
        <input name="nama_toko" type="text" value=""><br>
        @if($errors->has('nama_toko'))
            <div>{{ $errors->first('nama_toko') }}</div>    
        @endif
        <br>
        <label for="logo">Logo Toko</label><br>
        <input type="file" name="logo"><br>
        @if($errors->has('logo'))
            <div>{{ $errors->first('logo') }}</div>    
        @endif
        
        <input type="submit" name="submit" value="update">
    </form>
    
</body>
</html>