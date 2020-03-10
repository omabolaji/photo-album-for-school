@extends('layouts.home')

@section('content')

<div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
        <div class="container">
        <div class="row no-gutters slider-text align-items-center">
        <div class="col-md-9 ftco-animate">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
        <h1 class="mb-3 bread">About Us</h1>
        <p>Make it a reality, blogs, comments, upload images and a lot more, we offer the best photo album for you and your friends...</p>
        </div>
        </div>
        </div>
        </section>

        <section class="ftco-section-no-padding bg-light">
            @if(count($abouts) > 0)
            @foreach($abouts as $about)
                <div class="hero-wrap">
                    <div class="overlay"></div>
                    <div class="d-flex">
                    <div class="author-image text img p-md-5 ftco-animate" style="background-image: url(/assets2/images/author.jpg);">
                    </div>
                    <div class="author-info text p-4 mt-5 mb-5 ftco-animate">
                    <div class="desc">
                    <h1 class="mb-4">Photo Album Agency</h1>
                    <p class="mb-4">{!! $about->content !!}</p>
                    <ul class="mb-4">
                    <li>Even the all-powerful Pointing has no control about the blind texts</li>
                    <li>One day however a small line of blind text by the name of Lorem Ipsum decided</li>
                    <li>The Big Oxmox advised her not to do so, because there were thousands</li>
                     </ul>
                    <ul class="ftco-social mt-3">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                    </div>
                    </div>
                    </div>
                </div>
            @endforeach
            @else

        <div class="hero-wrap">
        <div class="overlay"></div>
        <div class="d-flex">
        <div class="author-image text img p-md-5 ftco-animate" style="background-image: url(/assets2/images/author.jpg);">
        </div>
        <div class="author-info text p-4 mt-5 mb-5 ftco-animate">
        <div class="desc">
        <h1 class="mb-4">Photo Album Agency</h1>
        <p class="mb-4">PhotoAlbum Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <ul class="mb-4">
        <li>Even the all-powerful Pointing has no control about the blind texts</li>
        <li>One day however a small line of blind text by the name of Lorem Ipsum decided</li>
        <li>The Big Oxmox advised her not to do so, because there were thousands</li>
         </ul>
        <ul class="ftco-social mt-3">
        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>
            @endif
        </section>

        {{--  <section class="ftco-section">
            <div class="container">
                    <h1 class="mb-4">Testimony From Users</h1>
                <div class="row">
                        @if(count($testimonies) > 0)
                        @foreach($testimonies as $testimony)
                            <div class="col-md-6 col-lg-3 ftco-animate">
                                <div class="staff">
                                <div class="img" style="background-image: url(/storage/);"></div>
                                <div class="text pt-4">
                                <h3><a href="#">{{ $testimony->name }}</a></h3>
                                <span class="position mb-2">Occupation </span>
                                <p>{!! $testimony->content !!}</p>
                                <ul class="ftco-social-icon d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                </div>
                                </div>
                            </div>
                        @endforeach
                        @else
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                        <div class="img" style="background-image: url(/assets2/images/person_1.jpg);"></div>
                        <div class="text pt-4">
                        <h3><a href="#">Edward Howard</a></h3>
                        <span class="position mb-2">Founder, Photographer</span>
                        <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                        <ul class="ftco-social-icon d-flex">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img" style="background-image: url(/assets2/images/person_2.jpg);"></div>
                            <div class="text pt-4">
                            <h3><a href="#">Simon Will</a></h3>
                            <span class="position mb-2">Photo Specialists</span>
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social-icon d-flex">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img" style="background-image: url(/assets2/images/person_3.jpg);"></div>
                            <div class="text pt-4">
                            <h3><a href="#">Brian Adam</a></h3>
                            <span class="position mb-2">Photographer</span>
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social-icon d-flex">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img" style="background-image: url(/assets2/images/person_4.jpg);"></div>
                            <div class="text pt-4">
                            <h3><a href="#">Edward Howard</a></h3>
                            <span class="position mb-2">Graphic Designer</span>
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social-icon d-flex">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                        @endif
                </div>
            </div>
        </section>  --}}

@endsection
