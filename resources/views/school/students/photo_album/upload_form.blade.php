@extends('layouts.dashboard')

@section('content')


<div class="container-fluid">

    {{-- <div class="row">
        <div class="col-lg-12 clear-padding-xs">
            <h5 class="page-title"><i class="fa fa-envelope-o"></i>IMAGES</h5>
            <div class="section-divider"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 clear-padding-xs">
                <div class="my-msg dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-envelope-o"></i>MY Photo Book</h6>
                    <div class="">
                        <div class="">

                                @if(count($photos) > 0)
                                @foreach($photos as $photo)
                        <h3 class="text-center">{{$photo->title}}</h3>
                            @if(count($photo_details) > 0)
                            @foreach($photo_details as $photo_detail)

                            <img src="/storage/{{$photo_detail->filename}}" alt="Images" style="width:300px; height:300px"/>

                            @endforeach
                            @else
                            <p class="text-center">NO IMAGE FOUND!</p>
                            @endif

                            @endforeach
                                @else
                                <p class="text-center">Album Name Is Empty!</p>
                                @endif
                            <div class="clearfix"></div>
                        </div>

                    </div>

                </div>

        </div>
        <hr>
        <br>
        <br>
        <div class="col-lg-6">
                <div class="dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-paper-plane"></i>UPLOAD PHOTO(you can select more than one)</h6>
                    <div class="inner-item">
                        <div class="dash-form">
                        <form action="/multiuploads" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="col-xs-6">
                                <label class="clear-top-margin"><i class="fa fa-calendar-o"></i>TITLE</label>
                                <input type="text" name="title" placeholder="Class Of 2001">
                                <label class="clear-top-margin"><i class="fa fa-image-o"></i>Photo Upload</label>
                                <input type="file" class="form-control" name="photos[]" multiple />
                                <br>
                                <input type="submit" class="btn btn-primary" value="Upload"/>
                            </div>
                        </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
        </div>
    </div> --}}


        {{-- <div class="container"> --}}
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Photo Book</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Portfolio -page -->

            <div class="awesome-project-content">
                @if(count($photo_details) > 0)
                @foreach($photo_details as $photo_detail)

              <div class="col-md-4 col-sm-4 col-xs-12 design development">
                <div class="single-awesome-project">
                  <div class="awesome-img">
                  <a href="#"><img src="/storage/{{$photo_detail->filename}}" alt="" /></a>
                  <div class="add-actions text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="/storage/{{$photo_detail->filename}}">
                        {{-- <h4>{{$photo->title}}</h4> --}}
                          {{-- <span>Web Development</span> --}}
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
                @endforeach
                @else
                    <h2 class="text-center">No Photo Available</h2>
                @endif
            </div>

            <hr>
        <br>
        <br>
        <div class="col-lg-6">
                <div class="dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-paper-plane"></i>UPLOAD PHOTO(you can select more than one)</h6>
                    <div class="inner-item">
                        <div class="dash-form">
                        <form action="/multiuploads" method="post" enctype="multipart/form-data">
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

                            <div class="col-xs-6">
                                <label class="clear-top-margin"><i class="fa fa-calendar-o"></i>TITLE</label>
                                <input type="text" name="title" placeholder="Class Of 2001" class="{{ $errors->has('title') ? ' is-invalid' : '' }}">

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red;">{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                <label class="clear-top-margin"><i class="fa fa-image-o"></i>Photo Upload</label>
                                <input type="file" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="photos[]" multiple />
                                    @if ($errors->has('photos'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red;">{{ $errors->first('photos') }}</strong>
                                        </span>
                                    @endif
                                <br>
                                <input type="submit" class="btn btn-primary" value="Upload"/>
                            </div>
                        </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
        </div>

          </div>
        {{-- </div> --}}
      </div>
{{-- </div> --}}

@endsection
    {{-- <script>
 $(document).ready(function(){
     $('bnt-primary').onclick(function(){
         var html = $(".clone").html();
         $(".increment").after(html);
     });

     $("body").on("click", ".btn-danger", function(){
         $(this).parent(".control-group").remove();
     });
 });

    </script> --}}
