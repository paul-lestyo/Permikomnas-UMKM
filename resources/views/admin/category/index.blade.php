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
                                <h4 class="card-title">Tabel Kategori</h4>
                            </div>
                            <div class="card-body">
                                <div class="toolbar">
                                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    <button class="btn btn-info btn-round" data-toggle="modal"
                                        data-target="#inputKategori">Tambah Data</button>
                                </div>
                                <div class="material-datatables">
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                        cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th class="disabled-sorting text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($category as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->nama_category }}</td>
                                                    <td class="text-right">
                                                        <a href="" class="btn btn-link btn-success btn-just-icon edit"
                                                            data-toggle="modal" data-target="#edit{{ $item->id }}">
                                                            <i class="material-icons">edit</i></a>
                                                        <form action="{{ route('admin.category.delete', $item->id) }}"
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
        <div class="modal fade" id="inputKategori" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog    ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.category.add') }}" method="post">
                            @csrf
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">input</i>
                                    </div>
                                    <h4 class="card-title">Form Input</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating"> Jenis Kategori *</label>
                                        <input type="text" name="nama" class="form-control" required="true">
                                    </div>
                                    <div class="category form-category">* Wajib Diisi</div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-rose">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal  edit kategori --}}
        @foreach ($category as $item)
            <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog    ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.category.update', $item->id) }}" method="post">
                                @csrf
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">input</i>
                                        </div>
                                        <h4 class="card-title">Form Input</h4>
                                    </div>
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label for="" class="bmd-label-floating"> Jenis Kategori *</label>
                                            <input type="text" name="nama" value="{{ $item->nama_category }}"
                                                class="form-control" required="true">
                                        </div>
                                        <div class="category form-category">* Wajib Diisi</div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-rose">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
