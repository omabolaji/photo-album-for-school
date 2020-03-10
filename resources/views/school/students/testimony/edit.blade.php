@extends('layouts.dashboard')

@section('content')


                    <!-- MAIN CONTENT -->
				<div class="container-fluid">
					<div class="row">
							<a class="btn btn-primary" href="/dashboard/school/students/testimony/index">Go Back</a>
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-envelope-o"></i>TESTIMONY</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">

							<div class="col-md-6">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-paper-plane"></i>EDIT TESTIMONY</h6>
									<div class="inner-item">
										<div class="dash-form">
										<form action="/school/students/testimony/edit/{{$testimony->uuid}}" method="POST" enctype="multipart/form-data">
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
											{{-- <input type="hidden" value="@if($post){{$post->uuid}}@endif" name="uuid"> --}}
											<div class="col-sm-12">
													<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>Name</label>
													<input type="text" name="name" value="@if($testimony){{$testimony->name}}@endif" placeholder="Enter your name or Nickname" />
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<label><i class="fa fa-posts"></i>TESTIMONY CONTENT</label>
											<textarea name="content" id="" cols="300" rows="10" placeholder="Your testimony content">@if($testimony){{$testimony->content}}@endif</textarea>
											</div>
											<div class="col-sm-12">
												<input type="submit" name="submit" value="Update Testimony" class="btn btn-success">
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
