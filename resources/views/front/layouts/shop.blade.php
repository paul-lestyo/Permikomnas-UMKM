<div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1" id="katalog">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Produk Lokal</h2>
            <p>Berikut produk berupa makanan, minuman, tanaman atau kerajinan yang dihasilkan oleh UMKM di desa kami
            </p>
        </div>
    </div>
    <div class="breadcrumb-img-1">
        <img src="{{ secure_asset('front') }}/assets/images/about/breadcrumb-1.png" alt="">
    </div>
    <div class="breadcrumb-img-2">
        <img src="{{ secure_asset('front') }}/assets/images/about/breadcrumb-2.png" alt="">
    </div>
</div>
<div class="shop-area pt-50 pb-125">
    <div class="container">
        <div class="shop-categorie-tab mb-20 nav">
            @php $i = 1 @endphp
            @foreach ($category as $item_category)
            <a href="#shop-categorie-{{$i}}" class="{{$i == 1 ? 'active' : null}}" data-toggle="tab">{{$item_category->nama_category}}</a>
            @php $i++ @endphp
            @endforeach
        </div>
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="tab-content">
                    @php $i = 1 @endphp
                    @foreach ($category as $item_category)
                    <div id="shop-categorie-{{$i}}" class="tab-pane {{$i == 1 ? 'active' : null}}">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-{{$item_category->id}}-1" class="active" data-toggle="tab"><img
                                            class="inject-me" src="{{ secure_asset('front') }}/assets/images/icon/shop-grid.svg" alt=""></a>
                                    <a href="#shop-{{$item_category->id}}-2" data-toggle="tab"><img
                                            class="inject-me" src="{{ secure_asset('front') }}/assets/images/icon/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-{{$item_category->id}}-1" class="tab-pane active ">
                                <div class="row">
                                    @foreach ($product as $item_product)
                                    @if ($item_product->category_id == $item_category->id)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="product-wrap mb-50">
                                            <div class="product-img product-img-zoom mb-25">
                                                <a href="" data-toggle="modal" data-target="#product-{{$item_product->id}}">
                                                    <img src="{{ secure_asset('uploads/'. $item_product->gambar) }}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h4>{{ $item_product->nama_product }}</h4>
                                                <div class="product-price">
                                                    <span>{{"Rp " . number_format(intval($item_product->harga),2,',','.')}}</span>
                                                </div>
                                            </div>
                                            <div class="product-action-position-1 text-center">
                                                <div class="product-content">
                                                    <h4>{{$item_product->nama_product}}</h4>
                                                    <div class="product-price">
                                                        <span>{{"Rp " . number_format(intval($item_product->harga),2,',','.')}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-action-wrap">
                                                    <div class="product-action-cart">
                                                        <a class="btn" href="{{$item_product->shope_link}}" target="_blank"><img src="{{ url('aset/shopee.png') }}"
                                                                alt=""></a>
                                                        <button class="btn" data-toggle="modal"
                                                            data-target="#product-{{$item_product->id}}"><i
                                                                class="icon-zoom"></i></button>
                                                        <a class="btn" href="{{$item_product->toped_link}}" target="_blank"><img src="{{ url('aset/toped.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div id="shop-{{$item_category->id}}-2" class="tab-pane ">
                                @foreach ($product as $item_product)
                                @if ($item_product->category_id == $item_category->id)
                                <div class="shop-list-wrap mb-50">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="product-list-img">
                                                <a href="" data-toggle="modal" data-target="#product-{{$item_product->id}}">
                                                    <img src="{{ secure_asset('uploads/'. $item_product->gambar) }}"
                                                        alt="">
                                                </a>
                                                <div class="shop-list-quickview">
                                                    <button data-toggle="modal" data-target="#product-{{$item_product->id}}"><i
                                                            class="icon-zoom"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div class="shop-list-content ml-20">
                                                <h3><a href="#">{{$item_product->nama_product}}</a></h3>
                                                <div class="pro-list-price">
                                                    <span>{{"Rp " . number_format(intval($item_product->harga),2,',','.')}}</span>
                                                </div>
                                                <p>{{$item_product->text}}</p>
                                                <div class="product-list-action">
                                                    <a class="btn" href="{{$item_product->shope_link}}" target="_blank"><img src="{{ url('aset/shopee.png') }}"
                                                            alt=""></a>
                                                    <button class="btn" data-toggle="modal" data-target="#product-{{$item_product->id}}"><i
                                                            class="icon-zoom"></i></button>
                                                    <a class="btn" href="{{$item_product->toped_link}}" target="_blank"><img src="{{ url('aset/toped.png') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="pro-pagination-style text-center mt-50">
                            <ul>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                    @php $i++ @endphp
                    @endforeach
                </div>
            </div>
        </div>
</div>
</div>
</div>
