@extends('admin.layouts.app')
@section('title', 'Dashboard UMKM')
@section('content')
    <div class="content">
        <div class="content">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">equalizer</i>
                            </div>
                            <p class="card-category">Jumlah Kategpri</p>
                            <h3 class="card-title">{{ $kategori }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> UMKM Desa Kemuning
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">production_quantity_limits</i>
                            </div>
                            <p class="card-category">Jumlah Produk</p>
                            <h3 class="card-title">{{ $produk }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> UMKM Desa Kemuning
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Jumlah Toko</p>
                            <h3 class="card-title">{{ $toko }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> UMKM Desa Kemuning
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
@endsection
