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
                            <h1>Blog</h1>
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
                <div class="row g-custom-x">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 mb20">
                            <div class="de-event-item">
                                <div class="d-content">
                                    <div class="d-image">
                                        <span class="d-image-wrap">
                                            <img src="{{ empty($blog->image) ? 'images/blog/1.jpg' : $blog->image }}"
                                                class="lazy">
                                        </span>
                                        <span class="d-date">
                                            <span
                                                class="d-mm">{{ Carbon\Carbon::parse($blog->updated_at)->isoFormat('MMM') }}</span>
                                            <span
                                                class="d-dd">{{ Carbon\Carbon::parse($blog->updated_at)->isoFormat('D') }}</span>
                                        </span>
                                    </div>
                                    <div class="d-text">
                                        <a href="{{ url('blogs/read', Crypt::encrypt($blog->id)) }}">
                                            <h4>{{ $blog->title }}</h4>
                                        </a>
                                        <p>{{ Str::limit($blog->content, 130) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="spacer-single"></div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                @if ($blogs->firstItem() != $blogs->currentPage())
                                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}">Sebelumnya</a>
                                @endif
                            </li>
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="page-item {{ $i == $blogs->currentPage() ? 'active' : null }}"><a
                                        class="page-link" href="{{ $blogs->url($i) }}">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item">
                                @if ($blogs->lastPage() != $blogs->currentPage())
                                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}">Selanjutnya</a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
@endsection
