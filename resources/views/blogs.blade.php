@extends('layouts.home')

@section('content')
    @php($user = Auth::user())
<div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
        <div class="container">
        <div class="row no-gutters slider-text align-items-center">
        <div class="col-md-9 ftco-animate">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Blog</span></p>
        <h1 class="mb-3 bread">Read Our Articles</h1>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
        </div>
        </div>
        </section>
        <section class="ftco-section">
        <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <div class="row">
                    @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class="col-md-6">
                            <div class="blog-entry ftco-animate">
                                <a href="/single-blog-post-view/{{ $blog->uuid }}" class="img img-2" style="background-image: url(/storage/{{ $blog->image }});"></a>
                                <div class="text text-2 pt-2 mt-3">
                                    <h3 class="mb-2"><a href="/single-blog-post-view/{{ $blog->uuid }}">{{ $blog->title }}</a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                        <span>{{ $blog->created_at->diffForHumans() }}</span>
                                        {{--  <span><a href="single.html">Photography</a></span>  --}}
                                        <span>{{ count($comments) }} Comments</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">
                                         @if(strlen($blog->content) > 250)
                                            {{substr($blog->content, 0, 250)."...."}}
                                          @else
                                          {!!($blog->content)!!}
                                          @endif
                                        </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                        <a href="#/single-blog-post-view" class="img img-2" style="background-image: url(/assets2/images/image_1.jpg);"></a>
                        <div class="text text-2 pt-2 mt-3">
                            <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                <span>Dec 14, 2018</span>
                                <span><a href="single.html">Photography</a></span>
                                <span>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                    <a href="#single.html" class="img img-2" style="background-image: url(/assets2/images/image_2.jpg);"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                    <div class="meta-wrap">
                    <p class="meta">
                    <span>Dec 14, 2018</span>
                    <span><a href="single.html">Photography</a></span>
                    <span>5 Comment</span>
                    </p>
                    </div>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                    <a href="#single.html" class="img img-2" style="background-image: url(/assets2/images/image_3.jpg);"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                    <div class="meta-wrap">
                    <p class="meta">
                    <span>Dec 14, 2018</span>
                    <span><a href="single.html">Photography</a></span>
                    <span>5 Comment</span>
                    </p>
                    </div>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                    <a href="#single.html" class="img img-2" style="background-image: url(/assets2/images/image_4.jpg);"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                    <div class="meta-wrap">
                    <p class="meta">
                    <span>Dec 14, 2018</span>
                    <span><a href="single.html">Photography</a></span>
                    <span>5 Comment</span>
                    </p>
                    </div>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                    <a href="#single.html" class="img img-2" style="background-image: url(/assets2/images/image_5.jpg);"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                    <div class="meta-wrap">
                    <p class="meta">
                    <span>Dec 14, 2018</span>
                    <span><a href="single.html">Photography</a></span>
                    <span>5 Comment</span>
                    </p>
                    </div>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                    <a href="#single.html" class="img img-2" style="background-image: url(/assets2/images/image_6.jpg);"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                    <div class="meta-wrap">
                    <p class="meta">
                    <span>Dec 14, 2018</span>
                    <span><a href="single.html">Photography</a></span>
                    <span>5 Comment</span>
                    </p>
                    </div>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                    <a href="#single.html" class="img img-2" style="background-image: url(/assets2/images/image_7.jpg);"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                    <div class="meta-wrap">
                    <p class="meta">
                    <span>Dec 14, 2018</span>
                    <span><a href="single.html">Photography</a></span>
                    <span>5 Comment</span>
                    </p>
                    </div>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                    <a href="#single.html" class="img img-2" style="background-image: url(/assets2/images/image_8.jpg);"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-2"><a href="single.html">The Photography Technique</a></h3>
                    <div class="meta-wrap">
                    <p class="meta">
                    <span>Dec 14, 2018</span>
                    <span><a href="single.html">Photography</a></span>
                    <span>5 Comment</span>
                    </p>
                    </div>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    </div>
                </div>
                    @endif
            </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                    {{--  {!! ($blogs->render()) !!}  --}}
                                <li>{!! ($blogs->render()) !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-4 sidebar ftco-animate bg-light">
            <div class="sidebar-box">
                <form action="#" class="search-form">
                    <div class="form-group">
                    <span class="icon icon-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                    </div>
                </form>
            </div>
        {{--  <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Categories</h3>
        <ul class="categories">
        <li><a href="#">Fashion <span>(6)</span></a></li>
        <li><a href="#">Technology <span>(8)</span></a></li>
        <li><a href="#">Travel <span>(2)</span></a></li>
        <li><a href="#">Food <span>(2)</span></a></li>
        <li><a href="#">Photography <span>(7)</span></a></li>
        </ul>
        </div>  --}}
        <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Popular Articles</h3>
                    @if(count($popularBlog) > 0)
                    @foreach($popularBlog as $popular)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(/storage/{{ $popular->image }});"></a>
                            <div class="text">
                            <h3 class="heading"><a href="/{{ $popular->uuid }}">{{ $popular->title }}</a></h3>
                            <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> {{ $popular->created_at->format('M. D, Y') }}</a></div>
                            <div><a href="#"><span class="icon-person"></span>{{ $popular->user->name }}</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url(/assets2/images/image_1.jpg);"></a>
                    <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                    <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                    </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url(/assets2/images/image_2.jpg);"></a>
                    <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                    <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                    </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url(/assets2/images/image_3.jpg);"></a>
                    <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                    <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                    </div>
                </div>
                    @endif
        </div>
        {{--  <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Tag Cloud</h3>
        <ul class="tagcloud">
        <a href="#" class="tag-cloud-link">animals</a>
        <a href="#" class="tag-cloud-link">human</a>
        <a href="#" class="tag-cloud-link">people</a>
        <a href="#" class="tag-cloud-link">cat</a>
        <a href="#" class="tag-cloud-link">dog</a>
        <a href="#" class="tag-cloud-link">nature</a>
        <a href="#" class="tag-cloud-link">leaves</a>
        <a href="#" class="tag-cloud-link">food</a>
        </ul>
        </div>  --}}
        <div class="sidebar-box subs-wrap img" style="background-image: url(/assets2/images/bg_1.jpg);">
            <div class="overlay"></div>
            <h3 class="mb-4 sidebar-heading">Newsletter</h3>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                <form action="#" class="subscribe-form">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address">
                <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                </div>
                </form>
        </div>

        {{--  <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Archives</h3>
        <ul class="categories">
        <li><a href="#">October 2018 <span>(10)</span></a></li>
        <li><a href="#">September 2018 <span>(6)</span></a></li>
        <li><a href="#">August 2018 <span>(8)</span></a></li>
        <li><a href="#">July 2018 <span>(2)</span></a></li>
        <li><a href="#">June 2018 <span>(7)</span></a></li>
        <li><a href="#">May 2018 <span>(5)</span></a></li>
        </ul>
        </div>  --}}
            <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Paragraph</h3>
            <p>Make it a reality, blogs, comments, upload images and a lot more, we offer the best photo album for you and your friends...</p>
            </div>
        </div>
        </div>
        </div>
        </section>

@endsection
