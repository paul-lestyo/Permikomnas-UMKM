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
        <label for="judul">Judul</label>
        <input name="judul" type="text" value="{{$slider->judul}}"><br>
        @if($errors->has('judul'))
            <div>{{ $errors->first('judul') }}</div>    
        @endif
        <br>
        <label for="text">Text</label>
        <textarea name="text" cols="30" rows="10">{{$slider->text}}</textarea><br>
        @if($errors->has('text'))
            <div>{{ $errors->first('text') }}</div>    
        @endif
        <br>
        <label for="urutan">urutan</label>
        <select name="urutan" disabled>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        @if($errors->has('urutan'))
            <div>{{ $errors->first('urutan') }}</div>    
        @endif<br>
        <label for="">gambar lama</label>
        <img src="{{url('uploads').'/'.$slider->gambar}}" width="100" alt="{{$slider->judul}}"><br>
        <input type="hidden" name="old_gambar" value="{{$slider->gambar}}">

        <input type="file" name="gambar"><br>
        @if($errors->has('gambar'))
            <div>{{ $errors->first('gambar') }}</div>    
        @endif
        
        <input type="submit" name="submit" value="update">
    </form>
    
</body>
</html>