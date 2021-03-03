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
        <label for="nama_toko">nama_toko</label>
        <input name="nama_toko" type="text" value="{{$toko->nama_toko}}"><br>
        @if($errors->has('nama_toko'))
            <div>{{ $errors->first('nama_toko') }}</div>    
        @endif
        <br>
        <label for="">logo lama</label>
        <img src="{{ url('uploads/'.$toko->logo) }}" width="100" alt="{{$toko->nama_toko}}"><br>
        <input type="hidden" name="old_logo" value="{{$toko->logo}}">

        <input type="file" name="logo"><br>
        @if($errors->has('logo'))
            <div>{{ $errors->first('logo') }}</div>    
        @endif
        
        <input type="submit" name="submit" value="update">
    </form>
    
</body>
</html>