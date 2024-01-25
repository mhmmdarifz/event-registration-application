@extends('landing.template.base')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- Carousel wrapper -->
        <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade shadow-2-strong"
            data-mdb-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
            </ol>
            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active" data-bgimage="url(assets-landing/images/slider/1.jpg)">
                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="container text-white text-center">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <h1 class="mb-3 wow fadeInUp">Konser Musik Rock Terbesar Tahun 2023</h1>
                                        <p class="lead wow fadeInUp" data-wow-delay=".3s">
                                            Dimeriahkan oleh band-band rock kelas dunia.
                                            Dapatkan tiketmu sekarang!
                                        </p>
                                        <div class="spacer-10"></div>
                                        <a href="#section-artists" class="btn-main wow fadeInUp"
                                            data-wow-delay=".6s">Jelajahi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item" data-bgimage="url(assets-landing/images/slider/2.jpg)">
                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100 wow f">
                            <div class="container text-white text-center">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <h1 class="mb-3 wow fadeInUp">Jadilah Bagian Dalam Sejarah</h1>
                                        <p class="lead wow fadeInUp" data-wow-delay=".3s">
                                            Ratusan musisi ternama ikut memeriahkan sukaria. Buruan daftar!
                                        </p>
                                        <div class="spacer-10"></div>
                                        <a href="#section-artists" class="btn-main wow fadeInUp"
                                            data-wow-delay=".6s">Jelajahi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->
            <!-- Controls -->
            <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Sebelumnya</span>
            </a>
            <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Selanjutnya</span>
            </a>
        </section>
        <!-- Carousel wrapper -->
        <section id="section-date">
            <div class="container">
                <div class="row g-custom-x align-items-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="0s">10-12 Desember 2023</h2>
                            <h3 class="wow fadeInUp" data-wow-delay=".2s">
                                <span class="id-color">
                                    Pakuwon Mall, Surabaya
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-artists">
            <div class="container">
                <div class="row g-custom-x align-items-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <div class="wm wow slideInUp">Artis</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                Dimeriahkan oleh
                            </h2>
                            <div class="small-border bg-color-2"></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="de-image-text s2 wow flipInY">
                            <a href="#" class="d-text">
                                <h3>Linkin Park</h3>
                            </a>
                            <img src="{{ asset('images/misc/featured-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="de-image-text s2 wow flipInY">
                            <a href="#" class="d-text">
                                <h3>Guns n Roses</h3>
                            </a>
                            <img src="{{ asset('images/misc/featured-2.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="de-image-text s2 wow flipInY">
                            <a href="#" class="d-text">
                                <h3>Avenged Sevenfold</h3>
                            </a>
                            <img src="{{ asset('images/misc/featured-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <div class="spacer-single"></div>
                        <ul class="list-inline-style-1">
                            <li>Avenged Sevenfold</li>
                            <li>Guns n Roses</li>
                            <li>Linkin Park</li>
                            <li>KISS</li>
                            <li>The Struts</li>
                            <li>Refused</li>
                            <li>Killswitch Engage</li>
                            <li>Parkway Drive</li>
                            <li>Beartooth</li>
                            <li>Scars on Broadway</li>
                            <li>Avatar</li>
                            <li>Bad Wolves</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-schedule" aria-label="section-services-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <div class="wm wow slideInUp">Jadwal</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                Jadwal Festival
                            </h2>
                            <div class="small-border bg-color wow zoomIn" data-wow-delay=".4s"></div>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="col-md-12">
                        <div class="de_tab tab_style_4 text-center">
                            <ul class="de_nav de_nav_dark">
                                <li class="active" data-link="#section-services-tab">
                                    <h3>Hari <span>Pertama</span></h3>
                                    <h4>10 Desember 2023</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Hari <span>Kedua</span></h3>
                                    <h4>11 Desember 2023</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Hari <span>Ketiga</span></h3>
                                    <h4>12 Desember 2023</h4>
                                </li>
                            </ul>
                            <div class="de_tab_content text-left">
                                <div id="tab1" class="tab_single_content"
                                    data-bgimage="url(images/background/t1.jpg) top">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <ul class="list-boxed-s1">
                                                <li>
                                                    <h3>Guns N Roses</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>The Hives</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Gojira</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Joan Jett</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Action Bronson</h3><span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab_single_content"
                                    data-bgimage="url(images/background/t2.jpg) top">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <ul class="list-boxed-s1">
                                                <li>
                                                    <h3>Linkin Park</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>The Distillers</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Halestorm</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Chevelle</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>In This Moment</h3><span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab_single_content"
                                    data-bgimage="url(images/background/t3.jpg) top">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <ul class="list-boxed-s1">
                                                <li>
                                                    <h3>Avenged Sevenfold</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Killswitch Engage</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>The Struts</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Refused</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Parkway Drive</h3><span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-tickets">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="wm wow slideInUp">Tiket</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            Harga Tiket
                        </h2>
                        <div class="small-border bg-color wow zoomIn" data-wow-delay=".4s"></div>
                    </div>
                    <div class="spacer-single"></div>
                </div>
                <div class="row g-custom-x">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-s1 mb-sm-30 wow flipInY">
                            <div class="top text-center">
                                <h2>Regular</h2>
                            </div>
                            <div class="mid text-center bg-color-secondary text-light">
                                <p class="price">
                                    <span class="currency">Rp</span>
                                    <span class="m opt-1">200.000</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check"></i>Cat 5-10</li>
                                    <li><i class="icon_close"></i><s>Merchandise Sukaria</s></li>
                                    <li><i class="icon_close"></i><s>Foto Bareng Artis</s></li>
                                </ul>
                            </div>
                            <div class="action text-center">
                                <a href="{{ url('buy-ticket') }}" class="btn-main">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-s1 mb-sm-30 wow flipInY">
                            <div class="top text-center">
                                <h2>Rockstar</h2>
                            </div>
                            <div class="mid text-center bg-color-secondary text-light">
                                <p class="price">
                                    <span class="currency">Rp</span>
                                    <span class="m opt-1">400.000</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check"></i>Cat 2-4</li>
                                    <li><i class="icon_check"></i>Merchandise Sukaria</li>
                                    <li><i class="icon_close"></i><s>Foto Bareng Artis</s></li>
                                </ul>
                            </div>
                            <div class="action text-center">
                                <a href="{{ url('buy-ticket') }}" class="btn-main">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-s1 mb-sm-30 wow flipInY">
                            <div class="top text-center">
                                <h2>VIP</h2>
                            </div>
                            <div class="mid text-center bg-color-secondary text-light">
                                <p class="price">
                                    <span class="currency">Rp</span>
                                    <span class="m opt-1">800.000</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check"></i>Cat 1</li>
                                    <li><i class="icon_check"></i>Merchandise Sukaria</li>
                                    <li><i class="icon_check"></i>Foto Bareng Artis</li>
                                </ul>
                            </div>
                            <div class="action text-center">
                                <a href="{{ url('buy-ticket') }}" class="btn-main">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="section-tickets">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="wm wow slideInUp">Lokasi</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            Lokasi Konser
                        </h2>
                        <div class="small-border bg-color wow zoomIn" data-wow-delay=".4s"></div>
                    </div>
                    <div class="spacer-single"></div>
                </div>
                <div class="row g-custom-x">
                    <div class="col">
                        <div id="map-canvas" class="rounded" style="width: 100%;height: 300px;"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k" async defer></script>

    <script>
        $(document).ready(function() {
            initMap();
        });

        function initMap() {
            var latitude = {{ $web->latitude }};
            var longitude = {{ $web->longitude }};
            myLatLng = new google.maps.LatLng(latitude, longitude);
            createMap(myLatLng);
        }

        function createMap(myLatLng) {
            map = new google.maps.Map(document.getElementById("map-canvas"), {
                center: myLatLng,
                zoom: 15,
            });

            office = new google.maps.Marker({
                position: myLatLng,
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP,
                title: "Lokasi Konser Sukaria",
            });
        }
    </script>
@endpush
