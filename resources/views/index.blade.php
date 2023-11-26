@extends('template.base')

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
                <div class="carousel-item active" data-bgimage="url(images/slider/1.jpg)">
                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="container text-white text-center">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <h1 class="mb-3 wow fadeInUp">The Biggest Music Event of the Year</h1>
                                        <p class="lead wow fadeInUp" data-wow-delay=".3s">The biggest music event
                                            in decades. Attended by more than 100 musicians from all over the world.
                                            Get your ticket now!</p>
                                        <div class="spacer-10"></div>
                                        <a href="#section-artists" class="btn-main wow fadeInUp"
                                            data-wow-delay=".6s">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item" data-bgimage="url(images/slider/2.jpg)">
                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100 wow f">
                            <div class="container text-white text-center">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <h1 class="mb-3 wow fadeInUp">Be a part of musical history</h1>
                                        <p class="lead wow fadeInUp" data-wow-delay=".3s">The biggest music event
                                            in decades. Attended by more than 100 musicians from all over the world.
                                            Get your ticket now!</p>
                                        <div class="spacer-10"></div>
                                        <a href="#section-artists" class="btn-main wow fadeInUp"
                                            data-wow-delay=".6s">Explore</a>
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
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>
        <!-- Carousel wrapper -->
        <section id="section-date">
            <div class="container">
                <div class="row g-custom-x align-items-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="0s">Aug 23-28</h2>
                            <h3 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">Allegiant
                                    Stadium, Las Vegas, NV, United States</span>
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
                                <h3>Kiss</h3>
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
                                <h3>Pearl Jam</h3>
                            </a>
                            <img src="{{ asset('images/misc/featured-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <div class="spacer-single"></div>
                        <ul class="list-inline-style-1">
                            <li>Halestorm</li>
                            <li>Chevelle</li>
                            <li>Joan Jett</li>
                            <li>In This Moment</li>
                            <li>The Hives</li>
                            <li>Gojira</li>
                            <li>The Distillers</li>
                            <li>Action Bronson</li>
                            <li>The Struts</li>
                            <li>Refused</li>
                            <li>Killswitch Engage</li>
                            <li>Parkway Drive</li>
                            <li>Beartooth</li>
                            <li>Scars on Broadway</li>
                            <li>Architects</li>
                            <li>Tom Morrelo</li>
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
                                    <h3>Day <span>01</span></h3>
                                    <h4>Aug 20, 2023</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>02</span></h3>
                                    <h4>Aug 21, 2023</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>03</span></h3>
                                    <h4>Aug 22, 2023</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>04</span></h3>
                                    <h4>Aug 23, 2023</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>05</span></h3>
                                    <h4>Aug 24, 2023</h4>
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
                                                    <h3>Kiss</h3><span></span>
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
                                                    <h3>Pearl Jam</h3><span></span>
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
                                <div id="tab4" class="tab_single_content"
                                    data-bgimage="url(images/background/t4.jpg) top">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <ul class="list-boxed-s1">
                                                <li>
                                                    <h3>Guns N Roses</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Beartooth</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Scars on Broadway</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Architects</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Tom Morrelo</h3><span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab5" class="tab_single_content"
                                    data-bgimage="url(images/background/t5.jpg) top">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <ul class="list-boxed-s1">
                                                <li>
                                                    <h3>Kiss</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Pearl Jam</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Guns N Roses</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Avatar</h3><span></span>
                                                </li>
                                                <li>
                                                    <h3>Bad Wolves</h3><span></span>
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
                                <h2>One-Day</h2>
                            </div>
                            <div class="mid text-center bg-color-secondary text-light">
                                <p class="price">
                                    <span class="currency">$</span>
                                    <span class="m opt-1">49.89</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check"></i>Ticket for one day</li>
                                    <li><i class="icon_check"></i>Chance to win doorprize</li>
                                    <li><i class="icon_close"></i><s>Free official merchandise</s></li>
                                    <li><i class="icon_close"></i><s>Free artist photo + signature</s></li>
                                    <li><i class="icon_close"></i><s>Hotel Voucher</s></li>
                                </ul>
                            </div>
                            <div class="action text-center">
                                <a href="01_rockfest-ticket.html" class="btn-main">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-s1 mb-sm-30 wow flipInY">
                            <div class="top text-center">
                                <h2>Three-Days</h2>
                            </div>
                            <div class="mid text-center bg-color-secondary text-light">
                                <p class="price">
                                    <span class="currency">$</span>
                                    <span class="m opt-1">69.89</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check"></i>Ticket for three days</li>
                                    <li><i class="icon_check"></i>Chance to win doorprize</li>
                                    <li><i class="icon_check"></i>Free official merchandise</li>
                                    <li><i class="icon_close"></i><s>Free artist photo + signature</s></li>
                                    <li><i class="icon_close"></i><s>Hotel Voucher</s></li>
                                </ul>
                            </div>
                            <div class="action text-center">
                                <a href="01_rockfest-ticket.html" class="btn-main">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-s1 mb-sm-30 wow flipInY">
                            <div class="top text-center">
                                <h2>All-Days</h2>
                            </div>
                            <div class="mid text-center bg-color-secondary text-light">
                                <p class="price">
                                    <span class="currency">$</span>
                                    <span class="m opt-1">89.89</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check"></i>Ticket for all days</li>
                                    <li><i class="icon_check"></i>Chance to win doorprize</li>
                                    <li><i class="icon_check"></i>Free official merchandise</li>
                                    <li><i class="icon_check"></i>Free artist photo + signature</li>
                                    <li><i class="icon_check"></i>Hotel Voucher</li>
                                </ul>
                            </div>
                            <div class="action text-center">
                                <a href="01_rockfest-ticket.html" class="btn-main">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-countdown" aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="wm wow slideInUp">Hitung Mundur</div>
                        <div id="defaultCountdown" class="wow fadeInUp" data-wow-delay=".2s"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection