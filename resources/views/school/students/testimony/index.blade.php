
@extends('layouts.dashboard')

@section('content')
		@php( $user = Auth::user())

			<!-- MAIN CONTENT -->
			{{-- <div class="main-content" id="content-wrapper"> --}}
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 clear-padding-xs">
                <h5 class="page-title"><i class="fa fa-envelope-o"></i>TESTIMONY</h5>
                <div class="section-divider"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 clear-padding-xs">
                <div class="col-md-6">
                  <div class="my-msg dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-envelope-o"></i>MY TESTIMONY</h6>
                    <div class="inner-item">
                      @if(count($testimonies) > 0)
                      @foreach ($testimonies as $testimony)

                      <div class="msg-item">
                        {{-- <div class="col-xs-2 clear-padding">
                        <img src="/storage/{{$blog->image}}" alt="user" />
                        </div> --}}
                        <div class="col-xs-10">
                        {{-- <p class="title">{{$blog->title}}</p> --}}
                        <p class="msg-desc">{{$testimony->content}}</p>
                        <p class="sent-by">by {{$testimony->name}}</p>
                        <p class="timestamp"><i class="fa fa-clock-o"></i> <i>written on {{$testimony->created_at}}</i></p>

                          <a href="/dashboard/school/students/testimony/edit/{{$testimony->uuid}}" class="btn btn-primary">EDIT</a>

                        <form action="/school/students/testimony/delete/{{$testimony->uuid}}" method="GET" class="pull-right">
                            <!-- CSRF Token -->
                            @csrf
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <br><br>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      @endforeach
                      @else
                      <p>NO TESTIMONY FOUND!!...</p>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-paper-plane"></i>CREATE NEW TESTIMONY</h6>
                    <div class="inner-item">
                      <div class="dash-form">
                          <form action="/school/students/testimony/store" method="POST" enctype="multipart/form-data">
                            @csrf

                                    @if (session('success'))
                                    <div class=" text-center alert alert-success alert-dismissible" role="alert">
                                        {!!  session('success') !!}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif

                                    @if (session('error'))
                                    <div class="text-center alert alert-warning alert-dismissible" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif

                                     {{-- <!-- ALERT DISMISS --> --}}
                                        <script>
                                            $(document).ready(function(){

                                                setTimeout(function(){
                                                    $('.alert').alert('close');
                                                }, 3000);
                                            });
                                        </script>
                        <div class="col-sm-12">
                          <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>Name</label>
                          <input type="text" name="name" placeholder="Enter your name or Nickname" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12">
                          <label><i class="fa fa-info-circle"></i>TESTIMONY CONTENT</label>
                          <textarea name="content" placeholder="enter content for the testimony" cols="300" rows="10" class="{{ $errors->has('content') ? ' is-invalid' : '' }}"></textarea>

                                @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                        </div>
                        {{-- <div class="col-sm-12">
                            <label><i class="fa fa-info-circle"></i>IMAGE</label>
                          <input type="file" name="image" placeholder="Upload Photo">
                        </div> --}}
                        <br>
                          <input type="submit" name="submit" value="Create Testimony" class="btn btn-success">
                          </form>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {{-- </div> --}}

  <!-- Start Footer bottom Area -->

@endsection
