@extends('layouts.dashboard')

@section('content')
    
    <!-- MAIN CONTENT -->
			{{-- <div class="main-content" id="content-wrapper"> --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 clear-padding-xs">
                                <h5 class="page-title"><i class="fa fa-home"></i>HOME</h5>
                                <div class="section-divider"></div>
                                <div class="dashboard-stats">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="stat-item">
                                            <div class="stats">
                                                <div class="col-xs-8 count">
                                                <h1>{{count($blogs)}}</h1>
                                                    <p>BLOGS</p>
                                                </div>
                                                <div class="col-xs-4 icon">
                                                    <i class="fa fa-users ex-icon"></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="status">
                                            <p class="text-ex"><i class="fa fa-pencil-square-o"></i>ACTIVE</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="stat-item">
                                            <div class="stats">
                                                <div class="col-xs-8 count">
                                                <h1>{{count($photo_details)}}</h1>
                                                    <p>PHOTOS</p>
                                                </div>
                                                <div class="col-xs-4 icon">
                                                    <i class="fa fa-user-secret danger-icon"></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="status">
                                                <p class="text-danger"><i class="fa fa-exclamation-triangle"></i>ACTIVE</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-sm"></div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="stat-item">
                                            <div class="stats">
                                                <div class="col-xs-8 count">
                                                <h1>{{count($photos)}}</h1>
                                                    <p>ALBUMS NAME</p>
                                                </div>
                                                <div class="col-xs-4 icon">
                                                    <i class="fa fa-flag look-icon"></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="status">
                                                <p class="text-look"><i class="fa fa-clock-o"></i>ACTIVE</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-6 col-md-3">
                                        <div class="stat-item">
                                            <div class="stats">
                                                <div class="col-xs-8 count">
                                                    <h1>799</h1>
                                                    <p>MESSAGES</p>
                                                </div>
                                                <div class="col-xs-4 icon">
                                                    <i class="fa fa-envelope-o success-icon"></i>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="status">
                                                <p class="text-success"><i class="fa fa-folder-open-o"></i>10 Unread messages</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
@endsection