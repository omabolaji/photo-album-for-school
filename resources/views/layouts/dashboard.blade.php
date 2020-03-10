<!DOCTYPE html>
<html>
    <head>
		@php( $user = Auth::user())
		{{-- @php( $school = Session::get('school')) --}}

		{{-- @php( $albums = Auth::user()) --}}
		{{-- @php($album = Album::get('album')) --}}


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Dashboard</title>

        <!-- Styles -->
        <link href="/admin_assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="/admin_assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="/admin_assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="/admin_assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="/admin_assets/css/style.css" rel="stylesheet" media="screen">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
		<link href="admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

			{{-- Photo viewers --}}
  <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="/assets/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/assets/lib/venobox/venobox.css" rel="stylesheet">
  <!-- Nivo Slider Theme -->
  <link href="/assets/css/nivo-slider-theme.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <!-- Responsive Stylesheet File -->
  <link href="/assets/css/responsive.css" rel="stylesheet">



    </head>
    <body>
		<div class="row dashboard-top-nav">
			<div class="col-sm-3 logo">
				<h5><i class="fa fa-book"></i>Portal</h5>
			</div>
			<div class="col-sm-4 top-search">
				{{-- <div class="search">
					<i class="fa fa-search"></i>
					<input type="text" placeholder="Search">
				</div> --}}
				<a href="/">Back To Home</a>
			</div>
			<div class="col-sm-5 notification-area">
				<ul class="top-nav-list">
					<li class="user dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span><img src="/public/assets/face2.jpg" alt="user"> {{$user->name}}<span class="caret"></span></span>
                        </a>
						<ul class="dropdown-menu notification-list">
							{{-- <li>
								<a href=""><i class="fa fa-cogs"></i> SETTINGS</a>
							</li> --}}
							<li>
								<a href="/dashboard/school/profiles/details"><i class="fa fa-users"></i> USER PROFILE</a>
							</li>
							<li>
								<a href="password/reset"><i class="fa fa-key"></i> CHANGE PASSWORD</a>
							</li>
							{{-- <li>
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li> --}}
							<li>
								<div class="all-notifications">
									<form action="/logout" method="POST">
											<!-- CSRF Token -->
											@csrf
									<button class="btn btn-success form-control" type="submit">LOGOUT</button></form>
								</div>
								{{-- <div class="all-notifications">
									<a href="/logout">LOGOUT</a>
								</div> --}}
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="parent-wrapper" id="outer-wrapper">

			<!-- SIDE MENU -->
			<div class="sidebar-nav-wrapper" id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li>
						<a href="/dashboard"><i class="fa fa-home menu-icon"></i> HOME</a>
					</li>

					{{-- (SUPER ADMIN) --}}
					@if($user->role_id == 1)

					<li>
						<a href="message.html"><i class="fa fa-info-circle menu-icon"></i>ABOUT US</a>
					</li>
					<li>
						<a href="admin-add-announcement.html"><i class="fa fa-bullhorn menu-icon"></i>SERVICES</a>
                    </li>
                    <li>
                        <a href="admin-add-announcement.html"><i class="fa fa-bullhorn menu-icon"></i>HOME SLIDERS</a>
                    </li>
                    <li>
                        <a href="admin-add-announcement.html"><i class="fa fa-bullhorn menu-icon"></i>BEST GRAD STUDENT</a>
                    </li>
                    <li>
                        <a href="/dashboard/school/school_admin/class_albums/index"><i class="fa fa-bullhorn menu-icon"></i>CREATE CLASS-ALBUMS</a>
					</li>
					{{-- (NORMAL ADMIN) --}}
					@elseif($user->role_id == 2)
					<li>
						<a href="/dashboard/school/students/blogs/blog"><i class="fa fa-rss menu-icon"></i>BLOG</a>
					</li>
					<li>
						<a href="/dashboard/school/students/photo_album/upload_form"><i class="fa fa-image menu-icon"></i>CLASS_ALBUMS</a>
					</li>
					{{-- <li>
						<a href="/dashboard/school/students/photo_album/create"><i class="fa fa-image menu-icon"></i>GALLERY</a>
					</li> --}}
					{{-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ALL ALBUMS<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							@foreach($albums as $album)
						<li><a href="/albums" >{{$album->album_details}}</a></li>
							@endforeach
						  {{-- <li><a href="/register" >register</a></li> --}}
						{{-- </ul>  --}}
					{{-- </li> --}}
					<li>
						<a href="/dashboard/school/students/testimony/index"><i class="fa fa-users menu-icon"></i>TESTIMONY</a>
					</li>
					{{-- <li>
						<a href="/dashboard/school/admin/blogs/blog"><i class="fa fa-user-secret menu-icon"></i>COMMENTS</a>
					</li> --}}
					@endif
					<li>
						<a href="/dashboard/school/profiles/details"><i class="fa fa-user menu-icon"></i>PROFILE</a>
					</li>

				</ul>
			</div>

		<div class="main-content" id="content-wrapper">

            {{-- @include('inc.messages') --}}
            @yield('content')

            <div class="menu-togggle-btn">
                <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
            </div>
            <div class="dash-footer col-lg-12">
                <p>Copyright Optisoft</p>
            </div>
        </div>
    {{-- </div> --}}

    <!-- Scripts -->
    <script src="/admin_assets/js/jQuery_v3_2_0.min.js"></script>
    <script src="/admin_assets/js/jquery-ui.min.js"></script>
    <script src="/admin_assets/js/bootstrap.min.js"></script>
    <script src="/admin_assets/plugins/owl.carousel.min.js"></script>
    <script src="/admin_assets/plugins/Chart.min.js"></script>
    <script src="/admin_assets/plugins/jquery.dataTables.min.js"></script>
    <script src="/admin_assets/plugins/dataTables.responsive.min.js"></script>
	<script src="/admin_assets/js/js.js"></script>

			{{-- Photo viewers --}}
  <script src="/assets/lib/jquery/jquery.min.js"></script>
  <script src="/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/lib/venobox/venobox.min.js"></script>
  <script src="/assets/lib/knob/jquery.knob.js"></script>
  <script src="/assets/lib/wow/wow.min.js"></script>
  <script src="/assets/lib/parallax/parallax.js"></script>
  <script src="/assets/lib/easing/easing.min.js"></script>
  <script src="/assets/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="/assets/lib/appear/jquery.appear.js"></script>
  <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="/assets/contactform/contactform.js"></script>
  <script src="/assets/js/main.js"></script>

</body>
</html>
