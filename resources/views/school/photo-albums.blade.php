@extends('layouts.app1')

@section('content')
  @php($user = Auth::user())
    {{-- @php($photo = Photo::get()) --}}
    {{-- @php($photo_details = $photo_detail) --}}
<!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2"><i class="fas fa-images"></i> Photo Albums</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3"><i class="fas fa-compact-disc"></i> Photo Books</h2>
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
      {{-- <div class="row"> --}}
        {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>School Photo Album</h4>
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
                    <a href="#">wordpress</a>
                  </li>
                  <li>
                    <a href="#">Joomla</a>
                  </li>
                  <li>
                    <a href="#">Html</a>
                  </li>
                  <li>
                    <a href="#">Website</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- End left sidebar -->
        <!-- Start single blog -->
        {{-- <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="/assets/img/blog/1.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">11 comments</a>
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
          </div>
        </div> --}}
      {{-- </div> --}}


       <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2> Photo Albums</h2>
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="page-head-blog">
                    <!-- recent start -->
                    <div class="left-blog">
                        <h4>
                            <i class="fa fa-rss"></i>
                            recent post</h4>
                        <div class="recent-post">
                          @if(count($blogs) > 0)
                          @foreach($blogs as $blog)
                          <!-- start single post -->
                          <div class="recent-single-post">
                            <div class="post-img">
                              <a href="#">
                              <img src="/storage/{{$blog->image}}" alt="">
                              </a>
                            </div>
                            <div class="pst-content">
                              <p><a href="/school/blog-details/{{$blog->uuid}}">
                                @if(strlen($blog->content) > 60)
                                  {{substr($blog->content, 0, 60)."...."}}
                                @else
                                {{$blog->content}}
                                @endif
                              </a></p>
                            </div>
                          </div>
                          <!-- End single post -->
                          @endforeach
                          @else
                            <!-- start single post -->
                          <div class="recent-single-post">
                              <div class="post-img">
                                <a href="#">
                                <img src="/assets/img/blog/1.jpg" alt="">
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
                    <div class="single-blog-page">
                        <div class="left-blog">
                          <h4> Photo Books</h4>
                          <ul>
                          @if(count($photos) > 0)
                          @foreach($photos as $photo)
                            <li>
                            <a href="#">{{$photo->title}}</a>
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
                            @endif
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Start Portfolio -page -->
        {{-- <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Development</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Design</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Photoshop</a>
                </li>
              </ul>
            </div>
          </div>
        </div> --}}
        {{-- <div class="awesome-project-content"> --}}
          <!-- single-awesome-project start -->
          @if(count($photos) > 0)
          @foreach($photos as $photo)
          <h3 class="text-center">{{$photo->title}}</h3>
            <hr>
          @if(count($photo_details) > 0)
          @foreach($photo_details as $photo_detail)
              <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
              <a href="#"><img src="/storage/{{$photo_detail->filename}}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/storage/{{$photo_detail->filename}}">
                    <h3>Album: {{$photo->title}}</h3>
                      {{-- <span>{{$photo->title}}</span> --}}
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- {{$photo_detail->links()}} --}}
            @endforeach

          @else
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="/assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/assets/img/portfolio/1.jpg">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="/assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/assets/img/portfolio/2.jpg">
                      <h4>Blue Sea</h4>
                      <span>Photosho</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="/assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/assets/img/portfolio/3.jpg">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="/assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/assets/img/portfolio/4.jpg">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="/assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/assets/img/portfolio/5.jpg">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="/assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/assets/img/portfolio/6.jpg">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          @endif

          @endforeach
          @else
          <p class="text-center">Album Name Is Empty!</p>
          @endif
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
    </div>
  </div>
  {!!($photo_details->render())!!}
  <!-- End Blog Area -->

  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  
@endsection
  