@extends('admin.layouts.app')
@section('title', 'Dashboard UMKM')
@section('content')
    <div class="content">
        <div class="container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <span>
                        <b> Success - </b> {{ $message }}</span>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Tabel Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                <a class="btn btn-info btn-round" href="{{ route('admin.product.add') }}">Tambah Data</a>
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Gambar Produk</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Toko</th>
                                            <th>Link</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Gambar Produk</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Toko</th>
                                            <th>Link</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($product as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->nama_product }}</td>
                                                <td><img src="{{ url('uploads/' . $item->gambar) }}" width="100"
                                                        alt="{{ $item->judul }}"></td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->category->nama_category }}</td>
                                                <td>{{ $item->toko->nama_toko }}</td>
                                                <td><a href="{{ $item->shope_link }}" target="_blank">
                                                        <img src="{{ url('aset/shopee.png') }}" alt=""></a>
                                                    <a href="{{ $item->toped_link }}" target="_blank">
                                                        <img src="{{ url('aset/toped.png') }}" alt=""></a>
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('admin.product.edit', $item->id) }}"
                                                        class="btn btn-link btn-success btn-just-icon edit">
                                                        <i class=" material-icons">edit</i></a>
                                                    <form action="{{ route('admin.product.delete', $item->id) }}"
                                                        class="d-inline">
                                                        <button class="btn btn-link btn-danger btn-just-icon remove"
                                                            onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data ?')">
                                                            <i class="material-icons">close</i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>
    @include('admin.layouts.footer')
@endsection
