<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini index slider</h1>
    <table border="1">
        <tr>
            <th>judul</th>
            <th>text</th>
            <th>gambar</th>
            <th>urutan</th>
            <th>action</th>
        </tr>
        @foreach ($slider as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->text }}</td>
                <td><img src="{{ url('uploads/'.$item->gambar) }}" width="100" alt="{{$item->judul}}"></td>
                <td>{{ $item->urutan }}</td>
                <td><a href={{route('admin.slider.edit',['id' => $item->id])}}>edit</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>