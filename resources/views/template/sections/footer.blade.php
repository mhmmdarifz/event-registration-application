<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-1">
                <div class="widget">
                    <h5>Kontak</h5>
                    <address class="s1">
                        <span><i class="id-color fa fa-phone fa-lg"></i>+62 8953 6528 0807</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                href="mailto:contact@example.com">admin@sukaria.com</a></span>
                    </address>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-1">
                <div class="widget">
                    <h5>Akses Cepat</h5>
                    <ul>
                        <li><a href="{{ url('blogs') }}">Blog</a></li>
                        <li><a href="{{ url('gallery') }}">Galeri</a></li>
                        <li><a href="{{ url('buy-ticket') }}">Beli Tiket</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-1">
                <div class="widget">
                    <h5>Blog Terbaru</h5>
                    <ul>
                        @foreach (App\Models\Blog::limit(3)->orderBy('updated_at', 'desc')->get() as $blog)
                            <li>
                                <a href="{{ url('blogs/read', Crypt::encrypt($blog->id)) }}">
                                    {{ Str::limit($blog->title, 25) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-1">
                <div class="widget">
                    <h5>Langganan</h5>
                    <p>Daftarkan email untuk dapatkan informasi terkini Sukaria.</p>
                    <form action="{{ url('add-subscriber') }}" class="row form-dark" id="subscribeForm" method="POST">
                        <div class="col text-center">
                            <input class="form-control" name="email" placeholder="Masukkan email anda"
                                type="email" required/>
                            <button id="subscribeSubmit" type="submit" class="btn-main btn-sm btn-block">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <a href="index.html">
                                <img alt="Logo Sukaria" class="f-logo" src="{{ asset('assets-landing/images/logo.png') }}" />
                                <span class="copy">
                                    Sukaria &copy; 2023
                                </span>
                            </a>
                        </div>
                        <div class="de-flex-col">
                            <div class="social-icons">
                                <a href="https://facebook.com/sukariafest" target="_blank"><i
                                        class="fa fa-facebook fa-lg"></i></a>
                                <a href="https://twitter.com/sukariafest" target="_blank"><i
                                        class="fa fa-twitter fa-lg"></i></a>
                                <a href="https://instagram.com/sukariafest" target="_blank"><i
                                        class="fa fa-instagram fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
