@extends('landing.template.base')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) bottom">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h1>Galeri</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div id="gallery" class="row">
                    <div class="col-md-4 mb25 item">
                        <div class="de-image-hover rounded">
                            <a href="{{ asset('images/gallery/1.jpg') }}" class="image-popup">
                                <span class="dih-title-wrap">
                                    <span class="dih-title">Klik Untuk Memperbesar</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="{{ asset('images/gallery/1.jpg') }}" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb25 item">
                        <div class="de-image-hover rounded">
                            <a href="{{ asset('images/gallery/2.jpg') }}" class="image-popup">
                                <span class="dih-title-wrap">
                                    <span class="dih-title">Klik Untuk Memperbesar</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="{{ asset('images/gallery/2.jpg') }}" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb25 item">
                        <div class="de-image-hover rounded">
                            <a href="{{ asset('images/gallery/3.jpg') }}" class="image-popup">
                                <span class="dih-title-wrap">
                                    <span class="dih-title">Klik Untuk Memperbesar</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="{{ asset('images/gallery/3.jpg') }}" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb25 item">
                        <div class="de-image-hover rounded">
                            <a href="{{ asset('images/gallery/4.jpg') }}" class="image-popup">
                                <span class="dih-title-wrap">
                                    <span class="dih-title">Klik Untuk Memperbesar</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="{{ asset('images/gallery/4.jpg') }}" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb25 item">
                        <div class="de-image-hover rounded">
                            <a href="{{ asset('images/gallery/5.jpg') }}" class="image-popup">
                                <span class="dih-title-wrap">
                                    <span class="dih-title">Klik Untuk Memperbesar</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="{{ asset('images/gallery/5.jpg') }}" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mb25 item">
                        <div class="de-image-hover rounded">
                            <a href="{{ asset('images/gallery/6.jpg') }}" class="image-popup">
                                <span class="dih-title-wrap">
                                    <span class="dih-title">Klik Untuk Memperbesar</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="{{ asset('images/gallery/6.jpg') }}" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
