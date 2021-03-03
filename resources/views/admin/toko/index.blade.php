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
                            <h4 class="card-title">Tabel Toko</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                <button class="btn btn-info btn-round" data-toggle="modal" data-target="#inputToko">Tambah
                                    Data</button>
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Toko</th>
                                            <th>Logo Toko</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Toko</th>
                                            <th>Logo Toko</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($toko as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->nama_toko }}</td>
                                                <td><img src="{{ url('uploads/' . $item->logo) }}" width="100"
                                                        alt="{{ $item->judul }}"></td>
                                                <td class="text-right">
                                                    <a href="" class="btn btn-link btn-success btn-just-icon edit"
                                                        data-toggle="modal" data-target="#edit{{ $item->id }}">
                                                        <i class="material-icons">edit</i></a>
                                                    <form action="{{ route('admin.toko.delete', $item->id) }}"
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
    {{-- modal input kategori --}}
    <!-- Classic Modal -->
    <div class="modal fade" id="inputToko" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-lg  ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.toko.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">input</i>
                                </div>
                                <h4 class="card-title">Form Input</h4>
                            </div>
                            <div class="card-body ">
                                <h4 class="title">Nama Toko</h4>
                                <div class="form-group">
                                    <label for="" class="bmd-label-floating"> Nama Toko *</label>
                                    <input type="text" name="nama_toko" class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <h4 class="title">Logo Toko</h4>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{ asset('admin') }}/assets/img/image_placeholder.jpg">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="logo">
                                            </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="toko form-toko">* Wajib Diisi</div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-rose">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- modal  edit kategori --}}
    @foreach ($toko as $item)
        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.toko.update', $item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_logo" value="{{ $item->logo }}">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">input</i>
                                    </div>
                                    <h4 class="card-title">Form Input</h4>
                                </div>
                                <div class="card-body ">
                                    <h4 class="title">Nama Toko</h4>
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating"> Nama Toko *</label>
                                        <input type="text" name="nama_toko" class="form-control"
                                            value="{{ $item->nama_toko }}" required="true">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Logo Toko</h4>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ url('uploads/' . $item->logo) }}">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="logo">
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="category form-category">* Wajib Diisi</div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-rose">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
