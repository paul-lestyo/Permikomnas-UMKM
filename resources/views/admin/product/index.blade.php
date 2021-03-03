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
                            <h4 class="card-title">Tabel Slider</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                <a class="btn btn-info btn-round">Tambah Data</a>
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama product</th>
                                            <th>Text</th>
                                            <th>Gambar product</th>
                                            <th>Harga</th>
                                            <th>Category</th>
                                            <th>Toko</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama product</th>
                                            <th>Text</th>
                                            <th>Gambar product</th>
                                            <th>Harga</th>
                                            <th>Category</th>
                                            <th>Toko</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($product as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->nama_product }}</td>
                                                <td>{{ $item->text }}</td>
                                                <td><img src="{{ url('uploads/' . $item->gambar) }}" width="100"
                                                        alt="{{ $item->judul }}"></td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->category->nama_category }}</td>
                                                <td>{{ $item->toko->nama_toko }}</td>
                                                <td class="text-right">
                                                    <a href="" class="btn btn-link btn-success btn-just-icon edit"
                                                        data-toggle="modal" data-target="#edit{{ $item->id }}">
                                                        <i class="material-icons">edit</i></a>
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
