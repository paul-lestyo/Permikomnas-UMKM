        @foreach ($product as $item)
        <!-- Modal -->
        <div class="modal fade" id="product-{{$item->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="quickview-img">
                                    <img src="{{ asset('uploads/'. $item->gambar) }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="product-details-content quickview-content">
                                    <h2>{{$item->nama_product}}</h2>
                                    <p>{{$item->text}}</p>
                                    <div class="pro-details-price">
                                        <span>{{"Rp " . number_format(intval($item->harga),2,',','.')}}</span>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Kategori</span> : {{$item->category->nama_category}}</li>
                                            <li><span>Toko</span> : {{$item->toko->nama_toko}}</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">

                                        <div class="pro-details-action">
                                            <a class="btn" href="{{$item->shope_link}}" target="_blank"><img src="{{ url('aset/shopee.png') }}" alt=""></a>

                                            <a class="btn" href="{{$item->toped_link}}" target="_blank"><img src="{{ url('aset/toped.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Modal end -->
        @endforeach
