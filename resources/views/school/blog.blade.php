@extends('layouts.app1')

@section('content')
    
<!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2"><i class="fa fa-rss"></i>Blogs</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Student Blog Page</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            {{-- <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                </div>
              </form>
              <!-- search option end -->
            </div> --}}
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                  @if(count($blogs) > 0)
                  @foreach($blogs as $blog)
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                    <a href="/school/blog-details/{{$blog->uuid}}">
                      <img src="/storage/{{$blog->image}}" alt="Image">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="/school/blog-details/{{$blog->uuid}}">
                      @if(strlen($blog->content) > 50)
                          {{substr($blog->content, 0, 50)."..."}}
                      @else
                          {{$blog->content}}
                      @endif
                      </a></p>
                    </div>
                  </div>
                  @endforeach
                  <!-- End single post -->
                  @else
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="/assets/img/blog/2.jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="/assets/img/blog/3.jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
						        <img src="/assets/img/blog/4.jpg" alt="">
					            </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  @endif
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4> Photo Albums Book</h4>
                <ul>
                  @if(count($photos) > 0)
                  @foreach($photos as $photo)
                  <li>
                  <a href="/school/photo-albums">{{$photo->title}}</a>
                  </li>
                  @endforeach
                  @else
                  <li>
                    <a href="#">Album1</a>
                  </li>
                  <li>
                    <a href="#">Album2</a>
                  </li>
                  <li>
                    <a href="#">Album3</a>
                  </li>
                  <li>
                    <a href="#">Album4</a>
                  </li>
                  <li>
                    <a href="#">Album5</a>
                  </li>
                  <li>
                    <a href="#">Album6</a>
                  </li>
                  @endif
                </ul>
              </div>
            </div>
            {{-- <div class="single-blog-page">
              <div class="left-blog">
                <h4>archive</h4>
                <ul>
                  <li>
                    <a href="#">07 July 2016</a>
                  </li>
                  <li>
                    <a href="#">29 June 2016</a>
                  </li>
                  <li>
                    <a href="#">13 May 2016</a>
                  </li>
                  <li>
                    <a href="#">20 March 2016</a>
                  </li>
                  <li>
                    <a href="#">09 Fabruary 2016</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Project</a>
                    </li>
                    <li>
                      <a href="#">Design</a>
                    </li>
                    <li>
                      <a href="#">Website</a>
                    </li>
                    <li>
                      <a href="#">Joomla</a>
                    </li>
                    <li>
                      <a href="#">Html</a>
                    </li>
                    <li>
                      <a href="#">wordpress</a>
                    </li>
                    <li>
                      <a href="#">Masonry</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
        <!-- End left sidebar -->
          <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              @if(count($blogs) > 0)
              @foreach($blogs as $blog)
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    {{-- <a href="blog-details.html"> --}}
                    <img src="/storage/{{$blog->image}}" alt="Image">
                      {{-- </a> --}}
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                        <i class="fa fa-comment-o"></i>
                    <a href="/school/comments/blog-details/{{$blog->uuid}}">{{count($comments)}} comments</a>
                      </span>
                    <span class="date-type">
                        <i class="fa fa-calendar"></i>{{$blog->created_at}}
                      </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                    <a href="/school/blog-details/{{$blog->uuid}}">{{$blog->title}}</a>
                      </h4>
                    <p>
                      @if(strlen($blog->content) > 250)
                        {{substr($blog->content, 0, 250)."...."}}
                      @else
                      {!!($blog->content)!!}
                      @endif
                    </p>
                  </div>
                  <span>
                  <a href="/school/blog-details/{{$blog->uuid}}" class="ready-btn">Read more</a>
                    </span>
                </div>
            </div>
              @endforeach
              @else
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="/assets/img/blog/2.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">7 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="/school/blog-details" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="/assets/img/blog/3.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">13 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="/school/blog-details" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="/assets/img/blog/4.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">1 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="/school/blog-details" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="/assets/img/blog/5.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">10 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="/school/blog-details" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  {!!($blogs->render())!!}
  <!-- End Blog Area -->

  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  
@endsection
  