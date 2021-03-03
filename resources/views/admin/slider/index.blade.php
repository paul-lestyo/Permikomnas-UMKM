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

                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>judul</th>
                                            <th>text</th>
                                            <th>gambar</th>
                                            <th>urutan</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>judul</th>
                                            <th>text</th>
                                            <th>gambar</th>
                                            <th>urutan</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($slider as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->text }}</td>
                                                <td><img src="{{ url('uploads/' . $item->gambar) }}" width="100"
                                                        alt="{{ $item->judul }}"></td>
                                                <td>{{ $item->urutan }}</td>
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

    {{-- modal  edit slider --}}
    @foreach ($slider as $item)
        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.slider.update', $item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_gambar" value="{{ $item->gambar }}">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">input</i>
                                    </div>
                                    <h4 class="card-title">Form Input</h4>
                                </div>
                                <div class="card-body ">
                                    <h4 class="title">Judul Slider</h4>
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating"> Judul slider *</label>
                                        <input type="text" name="judul" class="form-control" value="{{ $item->judul }}"
                                            required="true">
                                    </div>
                                    <h4 class="title">Text Slider</h4>
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating"> Text slider *</label>
                                        <textarea name="text" class="form-control" rows="5"
                                            required="true"> {{ $item->text }}</textarea>
                                    </div>
                                    <h4 class="title">Urutan slider</h4>
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating"> Urutan slider *</label>
                                        <input type="text" name="judul" class="form-control" value="{{ $item->urutan }}"
                                            required="true" disabled>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Gambar slider</h4>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ url('uploads/' . $item->gambar) }}">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="gambar">
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
