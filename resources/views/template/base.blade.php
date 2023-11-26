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

    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}">
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link id="mdb" href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="dark-scheme">
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        <!-- header begin -->
        @include('template.sections.header')
        <!-- header close -->
        <!-- content begin -->
        @yield('content')
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        @include('template.sections.footer')
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/OwlCarousel2Thumbs.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/enquire.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('js/jquery.lazy.plugins.min.js') }}"></script>
    <script src="{{ asset('js/jquery.smartsticky.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('js/countdown-custom.js') }}"></script>
    <script src="{{ asset('js/cookit.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>

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
