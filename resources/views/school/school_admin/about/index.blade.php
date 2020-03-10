@extends('layouts.dashboard')

@section('content')
@php($about = Session::get('school')->about)

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 clear-padding-xs">
                    <h5 class="page-title"><i class="fa fa-user-secret"></i>About</h5>

                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 clear-padding-xs">
                    <div class="col-md-12">
                        <div class="my-msg dash-item first-dash-item">
                            <h6 class="item-title"><i class="fa fa-envelope-o"></i>About<a class="edit pull-right" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a></h6>
                            <div class="" style="padding:10px;">
                                    <div class="msg-item">
                                        <div class="col-xs-8 col-xs-offset-2">
                                            <p class="msg-desc">
                                                @if($about)
                                                    {!!($about->content)!!}
                                                @else
                                                    All the information about your school, history has well go here
                                                @endif
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="menu-togggle-btn">
            <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
        </div>



@endsection

<!--Edit details modal-->
<div id="editDetailModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <form action="/admin/about/store" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="@if($about) {{$about->uuid}} @endif" name="uuid">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-edit"></i>@if($about) EDIT @else ADD @endif ABOUT</h4>
                </div>
                <div class="modal-body dash-form">
                    <div class="col-sm-7 col-offset-sm-2"><br>
                        <label class="clear-top-margin"><i class="fa fa-book"></i>ABOUT/INTRODUCTION</label>
                        <textarea name="content" class="form-control" id="article-ckeditor" cols="300" rows="10" placeholder="Enter about Intro......">@if($about) {!! ($about->content)!!} @endif</textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <div class="table-action-box">
                        <button type="submit" href="#" class="save btn btn-success"><i class="fa fa-check"></i> SAVE</button>
                        <a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>