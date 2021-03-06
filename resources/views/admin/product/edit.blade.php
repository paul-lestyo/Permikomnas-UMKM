@extends('admin.layouts.app')
@section('title', 'Dashboard UMKM')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-text">
                            <div class="card-text">
                                <h4 class="card-title">Input Data Produk</h4>
                            </div>

                        </div>
                        <div class="card-body ">
                            <form method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_gambar" value="{{ $product->gambar }}">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Nama Produk*</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" name="nama_product"
                                                value="{{ old('nama_product') ? old('nama_product') : $product->nama_product }}"
                                                class="form-control {{ $errors->has('nama_product') ? 'is-invalid' : '' }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('nama_product') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Kategori Produk*</label>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <select data-style="select-with-transition" name="category_id"
                                                class=" selectpicker" required>
                                                <option value="{{ $product->category_id }}" selected>
                                                    {{ $product->category->nama_category }}</option>
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}"> {{ $item->nama_category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Harga Produk*</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" name="harga"
                                                value="{{ old('harga') ? old('harga') : $product->harga }}"
                                                class="form-control {{ $errors->has('harga') ? 'is-invalid' : '' }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('harga') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Toko* </label>
                                    <div class="col-sm-5">
                                        <select class="selectpicker" data-style="select-with-transition" name="toko_id"
                                            required>
                                            <option value="{{ $product->toko_id }}" selected>
                                                {{ $product->toko->nama_toko }}
                                            </option>
                                            @foreach ($toko as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_toko }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Link Shopee</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="shope_link"
                                                placeholder="Pastikan Menyertakan https:// di awal link"
                                                value="{{ old('shope_link') ? old(shope_link) : $product->shope_link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Link Tokopedia</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="toped_link"
                                                placeholder="Pastikan Menyertakan https:// di awal link"
                                                value="{{ old('toped_link') ? old(toped_link) : $product->toped_link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Deskripsi Produk*</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <textarea class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}"
                                                rows="5" name="text">{{ old('text') ? old(text) : $product->text }}
                                            </textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('text') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-sm-2 col-form-label">Gambar Produk*</label>
                                    <div class="col-sm-10">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ url('uploads/' . $product->gambar) }}">
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
                                                <br>
                                                <span style="color:rgba(65, 65, 65, 0.989) ">Pastikan Anda Mengupload Gambar
                                                    BerFormat jpeg,jpg,png <br> dan tidak lebih dari 500kb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"><label class="col-sm-2 col-form-label"
                                        style="color:rgba(255, 47, 0, 0.948)">Wajib Diisi*</label></div>
                                <div class="row mt-5">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <a href="{{ route('admin.product.index') }}"
                                            class="btn btn-info btn-round">kembali</a>
                                        <button href="" class="btn btn-success btn-round">simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    @include('admin.layouts.footer')


@endsection
