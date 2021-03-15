    <div class="brand-logo-area section-padding-10 pb-130">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-title-6 st-6-fashion mb-30">
                        <h2>Usaha Di Desa Kami</h2>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($toko as $item)
                            <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                                <div class="single-brand-logo-3 mb-30">
                                    <img src="{{ url('uploads/' . $item->logo) }}" alt="{{ $item->nama_toko }}" title="{{ $item->nama_toko }}"
                                        width="100" height="100">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>