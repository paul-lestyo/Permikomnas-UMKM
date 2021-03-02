    @extends('admin.layouts.app')
    @section('title', 'Dashboard UMKM')
    @section('content')

        <div class="content">
            <div class="container-fluid">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
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
                                <h4 class="card-title">DataTables.net</h4>
                            </div>
                            <div class="card-body">
                                <div class="toolbar">
                                    <!--        Here you can write extra buttons/actions for the toolbar              -->
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
                                                        <a href="#" class="btn btn-link btn-info btn-just-icon like"><i
                                                                class="material-icons">favorite</i></a>
                                                        <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i
                                                                class="material-icons">dvr</i></a>
                                                        <form action="{{ route('admin.delete', $item->id) }}"
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
    @endsection
