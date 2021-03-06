@extends('layouts.home')

@section('content')
    @php($user = Auth::user())

<div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
        <div class="container">
        <div class="row no-gutters slider-text align-items-center">
        <div class="col-md-9 ftco-animate">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="/blogs-post-view">Blog</a></span> <span>Blog Single</span></p>
        <h1 class="mb-3 bread">Single Blog Article</h1>
        <p>Give the latest news, make blogs, comments, upload pictures and images of your choice. Enjoy and have fun with Photo <span>Album</span> </p>
        </div>
        </div>
        </div>
        </section>
        <section class="ftco-section">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3 font-weight-bold">{{ $blog->title }}</h2>
        {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>  --}}
        <p>
        <img src="/storage/{{ $blog->image }}" alt="" class="img-fluid">
        </p>

        <p>
                {!!($blog->content)!!}
        </p>

        {{--  <div class="tag-widget post-tag-container mb-5 mt-5">
        <div class="tagcloud">
        <a href="#" class="tag-cloud-link">Life</a>
        <a href="#" class="tag-cloud-link">Sport</a>
        <a href="#" class="tag-cloud-link">Tech</a>
        <a href="#" class="tag-cloud-link">Travel</a>
        </div>
        </div>  --}}
        {{--  <div class="about-author d-flex p-4 bg-light">
        <div class="bio mr-5">
        <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
        </div>
        <div class="desc">
        <h3>George Washington</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div>
        </div>  --}}
        <div class="pt-5 mt-5">
        <h3 class="mb-5 font-weight-bold">{{ count($comments) }} Comments</h3>
        <ul class="comment-list">
            @if(count($comments) > 0)
            @foreach($comments as $comment)
                <li class="comment">
                    <div class="vcard bio">
                    <img src="/assets2/images/b02.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                    <h3>{{ $comment->user->name }}</h3>
                    <div class="meta">{{ $comment->created_at }}</div>
                    <p>{!! $comment->content !!}</p>
                    <p><a href="#" class="reply">Reply</a></p>
                    </div>
                </li>
            @endforeach
            @else
        <li class="comment">
            <p>no comment available fro this article</p>
        </li>
            @endif

            <li class="comment">
            {!! ($comments->render()) !!}
            </li>
{{--  /*  <li class="comment">
        <div class="vcard bio">
        <img src="images/person_1.jpg" alt="Image placeholder">
        </div>
        <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta">October 03, 2018 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
        <p><a href="#" class="reply">Reply</a></p>
        </div>
        <ul class="children">
        <li class="comment">
        <div class="vcard bio">
        <img src="images/person_1.jpg" alt="Image placeholder">
        </div>
        <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta">October 03, 2018 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
        <p><a href="#" class="reply">Reply</a></p>
        </div>
        <ul class="children">
        <li class="comment">
        <div class="vcard bio">
        <img src="images/person_1.jpg" alt="Image placeholder">
        </div>
        <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta">October 03, 2018 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
        <p><a href="#" class="reply">Reply</a></p>
        </div>
        <ul class="children">
        <li class="comment">
        <div class="vcard bio">
        <img src="images/person_1.jpg" alt="Image placeholder">
        </div>
        <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta">October 03, 2018 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
        <p><a href="#" class="reply">Reply</a></p>
        </div>
        </li>
        </ul>
        </li>
        </ul>
        </li>
        </ul>
</li>*/  --}}
        </ul>
            {{--  <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li>{!! ($comments->render()) !!}</li>
                        </ul>
                    </div>
                </div>
            </div>  --}}
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                    <form action="#" class="p-3 p-md-5 bg-light">
                        <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                        </div>
                    </form>
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
