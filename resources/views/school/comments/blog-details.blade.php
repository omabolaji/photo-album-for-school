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
                <h1 class="title2"><i class="fa fa-rss"></i>Blog Details </h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
              <h2 class="title3"><i class="fa fa-comments-o"></i>All {{count($comments)}} Comments</h2>
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
        {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
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
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>Photo Albums</h4>
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
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                <img src="/storage/{{$blog->image}}" alt="Image" />
                </div>
                <div class="post-information">
                <h2>{{$blog->title}}</h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="/dashboard">admin</a></span>
                  <span><i class="fa fa-clock-o"></i>{{$blog->created_at}}</span>
                    <span><i class="fa fa-comments-o"></i>{{count($comments)}} comments</span>
                  </div>
                  <div class="entry-content">
                    <p>{!!($blog->content)!!}</p>      
                  </div>
                </div>
              </article>
              <div class="clear"></div>
              <div class="single-post-comments">
                <div class="comments-area">
                  <div class="comments-heading">
                    <h3><i class="fa fa-comments-o"></i>All comments</h3>
                  </div>
                  <div class="comments-list">
                    <ul>
                      @if(count($comments) > 0)
                      @foreach($comments as $comment)
                      <li class="threaded-comments">
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="/assets/img/blog/b02.jpg" alt="post-author">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
																{{-- <b><a href="#">demo</a></b> --}}
                                comment by: <strong>{{$comment->user->name}}</strong>
                                <br>
                            {{-- <span class="post-time">written on: {{$comment->created_at->format('M/Y')}}</span> --}}
                            {{-- <a href="#">Reply</a> --}}
                            </span>
                            <p>{!!($comment->content)!!}</p><br>
                            <span class="post-time">written on: {{$comment->created_at->format('M/Y')}}</span>
                            @if(!Auth::guest())
                              @if(Auth::user()->id == $comment->user_id)
                            <form action="/school/comments/blog-details/delete/{{$comment->uuid}}" method="GET" class="pull-right">
                              <!-- CSRF Token -->
                              @csrf
                            <input type="submit" name="submit" value="Undo" class="btn btn-danger">
                          </form>
                              @endif
                            @endif
                          </div>
                        </div>
                      </li>
                      <hr>
                      @endforeach
                      @else
                      <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="/assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                  <b><a href="#">demo</a></b>
                                  Post author
                                  <span class="post-time">October 6, 2014 at 7:25 pm</span>
                              <a href="#">Reply</a>
                              </span>
                              <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                              {{-- <form action="/school/comments/delete/{{$comment->uuid}}" method="GET" class="pull-right"> --}}
                                <!-- CSRF Token -->
                                {{-- @csrf --}}
                              {{-- <button class="btn btn-danger" name="submit" type="submit">Undo Comment</button> --}}
                            {{-- </form> --}}
                          </div>
                          </div>
                      </li>
                      @endif
                    </ul>
                  </div>
                </div>
                <div class="comment-respond">
                  <h3 class="comment-reply-title">Leave a Reply </h3>
                  @include('inc.messages')
                  <span class="email-notes"></span>
                  <form action="/postingComments" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                        <p>Content</p>
                        <textarea id="message-box" placeholder="leave a comment here....." name="content" ls="30" rows="6"></textarea>
                        <input type="hidden" name="blog_id" value="{{ $blog->id}}" />
                        <input type="submit" name="submit" value="Post Comment" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- single-blog end -->
            </div>
          </div>
        </div>
        {!!($comments->render())!!}
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

<!-- Start Footer bottom Area -->

@endsection

  