<div class="sidebar" data-color="rose" data-background-color="black"
    data-image="{{ asset('admin') }}/assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
            UM
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal" style="font-size: 16px">
            UMKM Desa Kemuning
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('admin') }}/assets/img/faces/avatar.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        Admin
                    </span>
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> -> </span>
                                <span class="sidebar-normal"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="{{ asset('admin') }}/examples/dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ asset('admin') }}/examples/pages/pricing.html">
                    <i class="material-icons">image</i>
                    <p> Slider
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p> Tables
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.category') }}">
                                <span class="sidebar-mini"> K </span>
                                <span class="sidebar-normal"> Kategori </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.category') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Produk </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">
