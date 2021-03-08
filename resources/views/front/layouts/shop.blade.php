<div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1" id="katalog">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Produk Lokal</h2>
            <p>Berikut produk berupa makanan, minuman, tanaman atau kerajinan yang dihasilkan oleh UMKM di desa kami
            </p>
        </div>
    </div>
    <div class="breadcrumb-img-1">
        <img src="{{ asset('front') }}/assets/images/about/breadcrumb-1.png" alt="">
    </div>
    <div class="breadcrumb-img-2">
        <img src="{{ asset('front') }}/assets/images/about/breadcrumb-2.png" alt="">
    </div>
</div>
<div class="shop-area pt-160 pb-160">
    <div class="container">
        <div class="shop-categorie-tab mb-20 nav">
            <a href="#shop-categorie-1" data-toggle="tab">Women</a>
            <a href="#shop-categorie-2" class="active" data-toggle="tab">men</a>
            <a href="#shop-categorie-3" data-toggle="tab">Kids</a>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div id="shop-categorie-1" class="tab-pane active ">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-right">
                                <div class="shop-tab nav">
                                    <a href="#shop-1" class="active" data-toggle="tab"><img
                                            src="{{ asset('front') }}/assets/images/icon/shop-grid.svg" alt=""></a>
                                    <a href="#shop-2" data-toggle="tab"><img class="pl-3"
                                            src="{{ asset('front') }}/assets/images/icon/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-1" class="tab-pane active ">
                                <div class="row">
                                    <?php for ($i = 0; $i < 12; $i++) { ?> <div
                                        class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="product-wrap mb-50">
                                            <div class="product-img product-img-zoom mb-25">
                                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                                    <img src="{{ asset('front') }}/assets/images/product/product-153.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h4>Modern Light</h4>
                                                <div class="product-price">
                                                    <span>$ 124</span>
                                                </div>
                                            </div>
                                            <div class="product-action-position-1 text-center">
                                                <div class="product-content">
                                                    <h4>Modern Light</h4>
                                                    <div class="product-price">
                                                        <span>$ 124</span>
                                                    </div>
                                                </div>
                                                <div class="product-action-wrap">
                                                    <div class="product-action-cart">
                                                        <a class="btn" href=""><img src="{{ url('aset/shopee.png') }}"
                                                                alt=""></a>
                                                        <button class="btn" data-toggle="modal"
                                                            data-target="#exampleModal"><i
                                                                class="icon-zoom"></i></button>
                                                        <a class="btn" href=""><img src="{{ url('aset/toped.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane ">
                            <?php for ($i = 1; $i < 12; $i++) { ?> <div
                                class="shop-list-wrap mb-50">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="product-list-img">
                                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                                <img src="{{ asset('front') }}/assets/images/product/product-138.jpg"
                                                    alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <button data-toggle="modal" data-target="#exampleModal"><i
                                                        class="icon-zoom"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="shop-list-content ml-20">
                                            <h3><a href="#">Product Title Here</a></h3>
                                            <div class="pro-list-price">
                                                <span>$50.00</span>
                                            </div>
                                            <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100%
                                                polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                            <div class="product-list-action">
                                                <a class="btn" href=""><img src="{{ url('aset/shopee.png') }}"
                                                        alt=""></a>
                                                <button class="btn" data-toggle="modal" data-target="#exampleModal"><i
                                                        class="icon-zoom"></i></button>
                                                <a class="btn" href=""><img src="{{ url('aset/toped.png') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="pro-pagination-style text-center mt-50">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
