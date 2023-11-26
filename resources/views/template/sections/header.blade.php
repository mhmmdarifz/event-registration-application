<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ url('/') }}">
                                    <img alt="Logo Sukaria" src="{{ asset('images/logo.png') }}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            @if (Route::current()->uri == '/')
                                <li><a href="#de-carousel">Beranda</a></li>
                            @else
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                            @endif

                            @if (Route::current()->uri != '/')
                                <li><a href="{{ url('/') }}#section-artists">Artis</a></li>
                            @else
                                <li><a href="#section-artists">Artis</a></li>
                            @endif

                            @if (Route::current()->uri != '/')
                                <li><a href="{{ url('/') }}#section-schedule">Jadwal</a></li>
                            @else
                                <li><a href="#section-schedule">Jadwal</a></li>
                            @endif

                            @if (Route::current()->uri != '/')
                                <li><a href="{{ url('/') }}#section-tickets">Harga Tiket</a></li>
                            @else
                                <li><a href="#section-tickets">Harga Tiket</a></li>
                            @endif

                            <li><a href="{{ url('gallery') }}">Galeri</a></li>
                            <li><a href="{{ url('blogs') }}">Blog</a></li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area">
                            <a href="{{ url('buy-ticket') }}" class="btn-main">
                                <i class="fa fa-sign-in"></i><span>Beli Tiket</span>
                            </a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
