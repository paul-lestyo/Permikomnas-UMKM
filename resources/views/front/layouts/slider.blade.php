<div class="slider-area slider-fashion-4-plr slider-mt-5">
    <div class="container-fluid">
        <div class="slider-active-1 nav-style-1 dot-style-1">

            @foreach ($slider as $item)

                <div class="single-slider slider-height-8 single-slider-ptb-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-content-1 slider-animated-1">
                                    <h1 class="animated">{{ $item->judul }}</h1>
                                    <p class="animated width-inc">{{ $item->text }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-single-img slider-sin-img-mrg2 slider-animated-1">
                                    <img class="animated" src="{{ url('uploads/' . $item->gambar) }}" alt="" style="width: 750px; height: 400px; object-fit: cover; object-position: center;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="social-icon-2">
        <a href="#"><i class="icofont-brand-whatsapp"></i></a>
        <a href="#"><i class="icon-social-instagram"></i></a>
        <a href="#"><i class="icon-social-facebook-square"></i></a>
    </div>
</div>
