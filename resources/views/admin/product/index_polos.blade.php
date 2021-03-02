<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini index product</h1>
    <a href={{route('admin.product.add')}}>tambah product</a>
    <table border="1">
        <tr>
            <th>Nama product</th>
            <th>Text</th>
            <th>Gambar product</th>
            <th>Harga</th>
            <th>Category</th>
            <th>Toko</th>
            <th>action</th>
        </tr>
        @foreach ($product as $item)
            <tr>
                <td>{{ $item->nama_product }}</td>
                <td>{{ $item->text }}</td>
                <td><img src="{{ url('uploads/'.$item->gambar) }}" width="100" alt="{{$item->judul}}"></td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->category->nama_category }}</td>
                <td>{{ $item->toko->nama_toko }}</td>
                <td><a href={{route('admin.product.edit',['id' => $item->id])}}>edit</a> || <a href={{route('admin.product.delete',['id' => $item->id])}}>delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>