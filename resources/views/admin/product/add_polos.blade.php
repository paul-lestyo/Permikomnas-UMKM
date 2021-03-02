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
        <label for="nama_product">Nama product</label>
        <input name="nama_product" type="text" value=""><br>
        @if($errors->has('nama_product'))
            <div>{{ $errors->first('nama_product') }}</div>    
        @endif
        <br>
        <label for="text">Text</label>
        <textarea name="text" cols="30" rows="10"></textarea><br>
        @if($errors->has('text'))
            <div>{{ $errors->first('text') }}</div>    
        @endif
        <br>
        <label for="gambar">gambar product</label><br>
        <input type="file" name="gambar"><br>
        @if($errors->has('gambar'))
            <div>{{ $errors->first('gambar') }}</div>    
        @endif
        <label for="harga">harga product</label>
        <input name="harga" type="number" min="1000" value="1000"><br>
        @if($errors->has('harga'))
            <div>{{ $errors->first('harga') }}</div>    
        @endif
        <br>
        <label for="category">category</label>
        <select name="category_id">
            @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->nama_category}}</option>    
            @endforeach
        </select>
        @if($errors->has('category'))
            <div>{{ $errors->first('category') }}</div>    
        @endif <br>
        <label for="toko">toko</label>
        <select name="toko_id">
            @foreach ($toko as $item)
                <option value="{{$item->id}}">{{$item->nama_toko}}</option>    
            @endforeach
        </select>
        @if($errors->has('toko'))
            <div>{{ $errors->first('toko') }}</div>    
        @endif <br>
        
        <input type="submit" name="submit" value="tambah">
    </form>
    
</body>
</html>