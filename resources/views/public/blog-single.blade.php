@extends('layouts.base')

@section('content')
    <!-- page header section start here -->
    <section class="page-header">
        <div class="page-header-area">
            <div class="container">
                <div class="page-header-content">
                    <div class="page-header-title">
                        <h2><span>{{ $blog->title }}</span></h2>
                    </div>
                    <ul class="breadcamp">
                        <li><a href="{{ url('') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="{{ url('blogs') }}">Knowledge</a></li>
                        <li><a class="active">{{ $blog->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- page header section ending here -->


    <!-- blog section start here -->
    <section class="blog-page padding-tb">
        <div class="container p-md-0">
            <div class="section-wrapper">
                <div class="col-lg-8 sticky-widget">
                    <div class="blog blog-single">
                        <div class="section-wrapper">
                            <div class="post-item">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="/images/blog/03.jpg" alt="blog">
                                    </div>
                                    <div class="post-content d-flex flex-wrap">

                                        <div class="content-part">
                                            <div class="entry-header">
                                                <div class="entry-meta d-flex flex-wrap justify-content-start">
                                                    <p class="posted-on">
                                                        Posted on : <a href="#">{{ $blog->created_at->diffForHumans() }}</a>
                                                    </p>
                                                </div>
                                                <h3>{{ $blog->title }}</h3>
                                            </div>

                                            <div class="entry-content">
                                                {!! $blog->content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section ending here -->
@endsection
