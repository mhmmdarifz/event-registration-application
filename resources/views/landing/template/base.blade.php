<!DOCTYPE html>
<html lang="zxx">

<head>
    @if (Route::current()->uri == '/')
        <title>Sukaria - Festival Musik Rock</title>
    @else
        <title>{{ $title }} - Sukaria</title>
    @endif

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Sukaria - Festival Musik" name="description" />
    <meta content="Sukaria" name="keywords" />
    <meta content="Muhammad Arif Mahendra" name="author" />
    <meta content="{{ csrf_token() }}" name="csrf-token">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets-landing/images/icon.png') }}">
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('assets-landing/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('assets-landing/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('assets-landing/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link id="mdb" href="{{ asset('assets-landing/css/mdb.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets-landing/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-landing/css/coloring.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="dark-scheme">
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        <!-- header begin -->
        @include('landing.template.sections.header')
        <!-- header close -->
        <!-- content begin -->
        @yield('content')
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        @include('landing.template.sections.footer')
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('assets-landing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/easing.js') }}"></script>
    <script src="{{ asset('assets-landing/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets-landing/js/OwlCarousel2Thumbs.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/enquire.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.lazy.plugins.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.smartsticky.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/mdb.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets-landing/js/countdown-custom.js') }}"></script>
    <script src="{{ asset('assets-landing/js/cookit.js') }}"></script>
    <script src="{{ asset('assets-landing/js/designesia.js') }}"></script>

    @stack('script')
    <!-- COOKIES PLUGIN  -->
    <script>
        $(document).ready(function() {
            $.cookit({
                backgroundColor: '#111111',
                messageColor: '#fff',
                linkColor: '#e50000',
                buttonColor: '#ffffff',
                messageText: "This website uses <b>cookies</b> to ensure you get the best experience on our website.",
                linkText: "Learn more",
                linkUrl: "index.html",
                buttonText: "I accept",
            });

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $("#ticketForm").on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#nameError").html('');
                        $("#phoneNumberError").html('');
                        $("#emailError").html('');
                        $("#ticketError").html('');

                        $("#ticketSubmit").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Mengirim...</div>'
                        );
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                type: "success",
                                text: response.message,
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });

                            location.href = '/';
                        } else {
                            Swal.fire({
                                type: "error",
                                text: response.message,
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }

                        $("#ticketSubmit").html('Kirim');
                    },
                    error: function(error) {
                        if (error.status == 422) {
                            var responseError = error["responseJSON"]["errors"];
                            $("#nameError").html(responseError["name"]);
                            $("#phoneNumberError").html(responseError["phone_number"]);
                            $("#emailError").html(responseError["email"]);
                            $("#ticketError").html(responseError["ticket"]);

                        } else {
                            Swal.fire({
                                type: "error",
                                text: "Terjadi Kesalahan, cobalah untuk reload halaman",
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }

                        $("#ticketSubmit").html('Kirim');
                    }
                })
            });

            $("#commentForm").on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#nameError").html('');
                        $("#commentError").html('');

                        $("#commentSubmit").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Mengirim...</div>'
                        );
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                type: "success",
                                text: response.message,
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });

                            location.reload();
                        } else {
                            Swal.fire({
                                type: "error",
                                text: response.message,
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }

                        $("#commentSubmit").html('Kirim');
                    },
                    error: function(error) {
                        if (error.status == 422) {
                            var responseError = error["responseJSON"]["errors"];
                            $("#nameError").html(responseError["name"]);
                            $("#commentError").html(responseError["comment"]);
                        } else {
                            Swal.fire({
                                type: "error",
                                text: "Terjadi Kesalahan, cobalah untuk reload halaman",
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }

                        $("#commentSubmit").html('Kirim');
                    }
                })
            });

            $("#subscribeForm").on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#subscribeSubmit").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div></div>'
                        );
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                type: "success",
                                text: response.message,
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        } else {
                            Swal.fire({
                                type: "error",
                                text: response.message,
                                toast: true,
                                position: "bottom-end",
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }

                        $("#subscribeSubmit").html('Kirim');
                    },
                    error: function(error) {
                        Swal.fire({
                            type: "error",
                            text: "Terjadi Kesalahan, cobalah untuk reload halaman",
                            toast: true,
                            position: "bottom-end",
                            showConfirmButton: false,
                            timer: 3000,
                        });

                        $("#subscribeSubmit").html('Kirim');
                    }
                })
            });
        });
    </script>
</body>

</html>
