@extends('layouts.dashboard')

@section('content')


                    <!-- MAIN CONTENT -->
				<div class="container-fluid">
					<div class="row">
						<a class="btn btn-primary" href="/dashboard/school/students/blogs/blog">Go Back</a>
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-envelope-o"></i>BLOGS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">

							<div class="col-md-6">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-paper-plane"></i>EDIT BLOG</h6>
									<div class="inner-item">
										<div class="dash-form">
										<form action="/school/students/blogs/edit/{{$blog->uuid}}" method="POST" enctype="multipart/form-data">
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
												<label class="clear-top-margin"><i class="fa fa-title"></i>BLOG TITLE</label>
                                            <input type="text" placeholder="Your post title" name="title" value="@if($blog){{$blog->title}}@endif" class="{{ $errors->has('title') ? ' is-invalid' : '' }}"/>


                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color:red;">{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<label><i class="fa fa-posts"></i>BLOG CONTENT</label>
                                            <textarea name="content" id="" cols="300" rows="10" placeholder="Your post content" class="{{ $errors->has('content') ? ' is-invalid' : '' }}">@if($blog){{$blog->content}}@endif</textarea>
                                                @if ($errors->has('content'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color:red;">{{ $errors->first('content') }}</strong>
                                                </span>
                                                @endif
											</div>
											<div class="col-sm-12">
												<label><i class="fa fa-file"></i>IMAGE</label>
                                                <input type="file" name="image" placeholder="Upload" class="{{ $errors->has('image') ? ' is-invalid' : '' }}">
                                                @if ($errors->has('image'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color:red;">{{ $errors->first('image') }}</strong>
                                                </span>
                                                @endif
											</div>
											<div class="col-sm-12">
												<input type="submit" name="submit" value="Update Blog" class="btn btn-primary">
                                            </div>
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

@endsection
