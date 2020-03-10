@extends('layouts.app1')
<!-- End Slider Area -->

@section('content')

  {{-- @php($school = Session::get('school')) --}}
  {{-- @php($photos = $school->photos) --}}

@include('school/school_admin/slider/index')


  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Us</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="/assets/img/about/1.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">A Brief About Our School</h4>
              </a>
              <p>
                Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Well Equipped Laboratory
                </li>
                <li>
                  <i class="fa fa-check"></i> Conducive Learning Enviroment
                </li>
                <li>
                  <i class="fa fa-check"></i> Unique Liberary
                </li>
                <li>
                  <i class="fa fa-check"></i> Well Oriented And Skillfull Teachers
                </li>
                <li>
                  <i class="fa fa-check"></i> Sports
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-flask"></i>
										</a>
                  <h4>Day / Boarding School</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-camera-retro"></i>
										</a>
                  <h4>Primary / Secondary School</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-wordpress"></i>
										</a>
                  <h4>College</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-camera-retro"></i>
										</a>
                  <h4>Conducive Liberary</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-flask"></i>
										</a>
                  <h4>Well Equipped Laboratory</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-ticket"></i>
										</a>
                  <h4>International Vacation / Tour Around The Globe</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

<!-- Start best grad students Area -->
  {{-- <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Best Grad Students</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="/assets/img/team/1.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="/assets/img/team/2.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="/assets/img/team/3.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="/assets/img/team/4.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div>
  </div> --}}
  <!-- End Team Area -->

<!-- Start school photo albums Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our School Grad Albums</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="/school/photo-albums" class="active" data-filter="/school/photo-albums">All</a>
                </li>
                {{-- <a href="/school/photo-albums"><li class="btn btn-success">all</li></a> --}}
                @if(count($photos) > 0)
                @foreach($photos as $photo)

                <li>
                <a href="#" data-filter=".development">{{$photo->title}}</a>
                </li>
                @endforeach
                @else
                <li>
                  <a href="#" data-filter=".development">Class of 2017</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Class of 2018</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Class of 2019</a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
              {{-- @if(count($photos) > 0) --}}
                @foreach ($photos as $photo)

          <!-- single-awesome-project start -->
            @if(count($photo_details) > 0)
            @foreach($photo_details as $photo_detail)
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
              <a href="#"><img src="/storage/{{$photo_detail->filename}}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="/storage/{{$photo_detail->filename}}">
                    <h4>{{$photo->title}}</h4>
                      {{-- <span>Web Development</span> --}}
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            @endforeach
          <!-- single-awesome-project end -->
            @else
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
            @endif
            @endforeach
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->

<!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              {{-- <a class="quate" href="#"> --}}
              <i style="color:aquamarine" class="fa fa-quote-right"></i>
              <h3 style="color:aqua">TESTIMONIALS</h3>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                  @if(count($testimonies) > 0)
                  @foreach($testimonies as $testimony)
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                     {{$testimony->content}}
                    </p>
                  <h6>{{ $testimony->name}}</h6>
                  </div>
                </div>
                  @endforeach
                  @else
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Jhon</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Fleming</h6>
                  </div>
                </div>
                  @endif
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->

  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          @if(count($blogs) > 0)
          @foreach($blogs as $blog)
              <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
              <a href="/school/blog-details/{{$blog->uuid}}">
                <img src="/storage/{{$blog->image}}" alt="Image">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
                <a href="/school/comments/blod-details/{{$blog->uuid}}">{{count($comments)}} comments</a>
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
                  @if(strlen($blog->content) > 200)
                    {!!substr($blog->content, 0, 200)."....."!!}
                  @else
                    {!!($blog->content)!!}
                  @endif
                </p>
              </div>
              <span>
									<a href="/school/blog" class="ready-btn">Read more</a>
								</span>
            </div>
          </div>
            @endforeach
            @else
            <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                      <img src="/assets/img/blog/2.jpg" alt="">
                    </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">130 comments</a>
                    </span>
                  <span class="date-type">
                      <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                </div>
                <div class="blog-text">
                  <h4>
                                          <a href="/school/blog">Explicabo magnam quibusdam.</a>
                    </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                    <a href="/school/blog" class="ready-btn">Read more</a>
                  </span>
              </div>
              <!-- Start single blog -->
          </div>
            @endif
            <!-- End Left Blog-->
            <!-- Start single blog -->
        </div>

          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          {{-- <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="/assets/img/blog/2.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">130 comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="/school/blog">Explicabo magnam quibusdam.</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="/school/blog" class="ready-btn">Read more</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div> --}}
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
          {{-- <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="/assets/img/blog/3.jpg" alt="">
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
                                        <a href="/school/blog">Lorem ipsum dolor sit amet</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="/school/blog" class="ready-btn">Read more</a>
								</span>
            </div>
          </div> --}}
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

<!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +1 5589 55488 55<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: info@example.com<br>
                  <span>Web: www.optisoft.ng</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Lekki Express-Way, Kilometer 19<br>
                  <span>Southern View Estate, Ajah, Lagos</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div id="map-canvas" style="" class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyDoSssoK33cn4_RKt7DohD3f7Cxx_u8H1Q&amp;&scale=2" type="text/javascript" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->

            <script>

                $(document).ready(function(){
                  // var myLatLng = {lat: 6.626149, lng: 3.508026};6.60086 3.48818
                  var myLatLng = {lat: 6.6000, lng: 3.5000};
                  // var myLatLng = {lat: 6.60086, lng: 3.48818};

                    var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 15,
                    center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'PhotoAlbum'
                    });
                });
            </script>
          </div>
          {{-- <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyDoSssoK33cn4_RKt7DohD3f7Cxx_u8H1Q&amp;&scale=2" type="text/javascript"></script> --}}

                  <!--Map area end -->
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="">@include('inc.messages')</div>
              <div id="errormessage"></div>
              <form action="/sendContact" method="POST" role="" class="" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="" placeholder="Your Name" data-rule="" data-msg="" />
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="" placeholder="Your Email" data-rule="" data-msg="" />
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="" placeholder="subject" data-rule="" data-msg="" />
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="content" rows="" data-rule="" data-msg="" placeholder="Message"></textarea>
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="text-center"><input type="submit" name="submit" class="btn btn-success" value="Send Message"></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

<!-- Start Footer bottom Area -->

 @endsection

