@extends('layouts.base')

@section('content')
    <!-- page header section start here -->
    <section class="page-header">
        <div class="page-header-area">
            <div class="container">
                <div class="page-header-content">
                    <div class="page-header-title">
                        <h2>Knowledge</h2>
                        <h2><span>Our Most Popular Article</span></h2>
                    </div>
                    <ul class="breadcamp">
                        <li><a href="{{  url('') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a class="active">Knowledge</a></li>
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
                    <div class="blog">
                        <div class="section-wrapper">
                            @if(count($blogs) > 0)
                                @foreach($blogs as $blog)
                                    <div class="post-item">
                                        <div class="post-inner">
                                            <div class="post-thumb" style="height: 80px">
                                                <a href="#"><img src="images/blog/03.jpg" alt="blog"></a>
                                            </div>
                                            <div class="post-content d-flex flex-wrap">
                                                <div class="content-part">
                                                    <div class="entry-header">
                                                        <h3><a href="#">{{ $blog->title }}</a></h3>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p>{{ strip_tags(string: \Illuminate\Support\Str::of(string:  $blog->content)->limit()) }}</p>
                                                        <a href="{{ url('/blogs/' . $blog->id) }}" class="custom-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @else
                                <div class="post-item">
                                    <div class="post-inner">
                                        <div class="post-thumb" style="height: 80px">
                                            <a href="#"><img src="images/blog/03.jpg" alt="blog"></a>
                                        </div>
                                        <div class="post-content d-flex flex-wrap">
                                            <div class="content-part">
                                                <div class="entry-header">
                                                    <h3><a href="#">Tidak ada artikel untuk sekarang</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section ending here -->
@endsection
