
@extends('layouts.dashboard')


@section('content')


                    <!-- MAIN CONTENT -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
                                <h5 class="page-title"><i class="fa fa-cogs"></i>Albums Section</h5>							
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							
							<div class="col-md-6">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-paper-plane"></i>EDIT ALBUM</h6>
									<div class="inner-item">
										<div class="dash-form">
                                        <form action="/school/school_admin/class_albums/edit/{{$album->uuid}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                            <div class="col-xs-6">
                                            <label class="clear-top-margin"><i class="fa fa-image"></i>ALBUM</label>
											<input type="text" placeholder="Your post title" name="title" value="@if($album){{$album->album_diary}}@endif"/>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<input type="submit" name="submit" value="Update Album" class="btn btn-primary">
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

@endsection