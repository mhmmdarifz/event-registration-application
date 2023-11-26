@extends('template.base')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light" data-bgimage="url(/images/background/subheader.jpg) bottom">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 offset-md-2 text-center">
                            <h1>{{ $blog->title }}</h1>
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
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-read">

                            <div class="post-text">
                                {{ $blog->content }}

                                <br><br>

                                <span class="post-date">
                                    {{ Carbon\Carbon::parse($blog->updated_at)->isoFormat('dddd, D MMMM Y') }}
                                </span>
                                <span class="post-comment">{{ $blog->comments->count() }}</span>
                            </div>

                        </div>

                        <div class="spacer-single"></div>

                        <div id="blog-comment">
                            @if ($blog->comments->count() != 0)
                                <h4>Komentar ({{ $blog->comments->count() }})</h4>

                                <div class="spacer-half"></div>

                                <ol>
                                    @foreach ($blog->comments as $comment)
                                        <li>
                                            <div class="avatar">
                                                <img src="{{ asset('images/misc/avatar-2.jpg') }}" alt="" />
                                            </div>
                                            <div class="comment-info">
                                                <span class="c_name">{{ $comment->name }}</span>
                                                <span
                                                    class="c_date id-color">{{ Carbon\Carbon::parse($comment->updated_at)->isoFormat('h:m | D MMMM Y') }}</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="comment">
                                                {{ $comment->comment }}
                                            </div>
                                        </li>
                                    @endforeach
                                </ol>
                            @endif

                            <div class="spacer-single"></div>

                            <div id="comment-form-wrapper">
                                <h4>Tinggalkan Komentar</h4>
                                <div class="comment_form_holder">
                                    <form id="commentForm" class="form-border" method="POST" action="{{ url('comment') }}">
                                        <input type="hidden" name="blog_id" value="{{ Crypt::encrypt($blog->id) }}">

                                        <label>Nama<span class="text-danger">*</span> <span id="nameError" class="text-danger"></span></label>
                                        <input type="text" name="name" id="name" class="form-control" />

                                        <label>Komentar<span class="text-danger">*</span> <span id="commentError" class="text-danger"></span></label>
                                        <textarea cols="10" rows="5" name="comment" id="comment" class="form-control"></textarea>

                                        <p id="btnsubmit">
                                            <button id="commentSubmit" type="submit" class="btn btn-main">Kirim</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="sidebar" class="col-md-4">
                        <div class="de-box widget">
                            <h4>Bagikan</h4>
                            <div class="small-border"></div>
                            <div class="de-color-icons">
                                <span><i class="fa fa-twitter fa-lg"></i></span>
                                <span><i class="fa fa-facebook fa-lg"></i></span>
                                <span><i class="fa fa-instagram fa-lg"></i></span>
                                <span><i class="fa fa-linkedin fa-lg"></i></span>
                                <span><i class="fa fa-pinterest fa-lg"></i></span>
                                <span><i class="fa fa-envelope fa-lg"></i></span>
                            </div>
                        </div>
                        <div class="de-box widget widget-post">
                            <h4>Blog Terbaru</h4>
                            <div class="small-border"></div>
                            <ul>
                                @foreach ($recent_blogs as $blog)
                                    <li>
                                        <span
                                            class="date">{{ Carbon\Carbon::parse($blog->updated_at)->isoFormat('D MMM') }}</span>
                                        <a
                                            href="{{ url('blogs/read', Crypt::encrypt($blog->id)) }}">{{ $blog->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
