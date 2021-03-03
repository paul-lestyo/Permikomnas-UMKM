<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini index toko</h1>
    <a href={{route('admin.toko.add')}}>tambah toko</a>
    <table border="1">
        <tr>
            <th>Nama Toko</th>
            <th>Logo Toko</th>
            <th>action</th>
        </tr>
        @foreach ($toko as $item)
            <tr>
                <td>{{ $item->nama_toko }}</td>
                <td><img src="{{ url('uploads/'.$item->logo) }}" width="100" alt="{{$item->judul}}"></td>
                <td><a href={{route('admin.toko.edit',['id' => $item->id])}}>edit</a> || <a href={{route('admin.toko.delete',['id' => $item->id])}}>delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>