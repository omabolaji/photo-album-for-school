
@extends('layouts.dashboard')

@section('content')

			<!-- MAIN CONTENT -->
			{{-- <div class="main-content" id="content-wrapper"> --}}
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 clear-padding-xs">
                <h5 class="page-title"><i class="fa fa-envelope-o"></i>PROFILE</h5>
                <div class="section-divider"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 clear-padding-xs">
                <div class="col-md-6">
                  <div class="my-msg dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-envelope-o"></i>MY PROFILE</h6>
                    <div class="inner-item">
                      @if(count($admins) > 0)
                      @foreach($admins as $admin)

                      <div class="msg-item">
                        {{-- <div class="col-xs-2 clear-padding"> --}}
                        {{-- <img src="/storage/{{$admin->image}}" alt="user" /> --}}
                    <img src="/storage/{{$admin->image}}" alt="Image">
                        {{-- </div> --}}
                        <div class="col-xs-10">
                        <p class="title"><i class="fa fa-info-circle"></i><span style="color:green;">Firstname: </span>{{$admin->firstName}}</p>
                        <p class="title"><i class="fa fa-info-circle"></i><span style="color:purple;">Lastname: </span>{{$admin->lastName}}</p>
                        <p class="title"><i class="fa fa-phone"></i><span style="color:pink;">Phone: </span>{{$admin->phone}}</p>
                        <p class="title"><i class="fa fa-address"></i><span style="color:blue;">Address: </span>{{$admin->address}}</p>
                        <p class="title"><i class="fa fa-info-circle"></i><span style="color:orange;">Sex: </span>{{$admin->gender}}</p>
                        <p class="timestamp"><i class="fa fa-clock"></i> <i>{{$admin->created_at}}</i></p>
                        <a href="/dashboard/school/profiles/details/edit/{{$admin->uuid}}" class="btn btn-primary pull-right">Update Profile</a>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      @endforeach
                      @else
                      <p>You Have Not Created Your Profile</p>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-paper-plane"></i>Create Profile</h6>
                <div class="inner-item">
                        <div class="dash-form">
                            <form action="/dashboard/school/profiles/store" method="POST" enctype="multipart/form-data">
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

                            <label class="clear-top-margin"><i class="fa fa-book"></i>FIRSTNAME</label>
                            <input type="text" name="firstName" placeholder="firstname" class="{{ $errors->has('firstName') ? ' is-invalid' : '' }}"/>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            {{-- <div>
                                @error('firstName')
                                <span class="alert text-danger"> <strong></strong> </span>
                                @enderror
                            </div> --}}
                            <label class="clear-top-margin"><i class="fa fa-book"></i>LASTNAME</label>
                            <input type="text" name="lastName" placeholder="lastname" class="{{ $errors->has('lastName') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            <label class="clear-top-margin"><i class="fa fa-book"></i>PHONE</label>
                            <input type="text" name="phone" placeholder="080000000" class="{{ $errors->has('phone') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            <label class="clear-top-margin"><i class="fa fa-book"></i>ADDRESS</label>
                            <input type="text" name="address" placeholder="enter your address" class="{{ $errors->has('address') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            <label class="clear-top-margin"><i class="fa fa-book"></i>GENDER</label>
                            <input type="text" name="gender" placeholder="male or female" class="{{ $errors->has('gender') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            <label class="clear-top-margin"><i class="fa fa-book"></i>IMAGE</label>
                            <input type="file" name="image" placeholder="upload" class="{{ $errors->has('image') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;">{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            <br><br>
                            <input type="submit" name="submit" class="btn btn-success" value="Create">
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


  <!-- Start Footer bottom Area -->

@endsection
