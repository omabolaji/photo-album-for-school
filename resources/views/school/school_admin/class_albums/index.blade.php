@extends('layouts.dashboard')

@section('content')

    
    <!-- MAIN CONTENT -->
{{-- <div class="main-content" id="content-wrapper"> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 clear-padding-xs">
                <h5 class="page-title"><i class="fa fa-cogs"></i>Albums Section</h5>
                <div class="section-divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 clear-padding-xs">
                <div class="col-sm-4">
                    <div class="dash-item first-dash-item">
                        <h6 class="item-title"><i class="fa fa-plus-circle"></i>CREATE CLASS ALBUM</h6>
                        <div class="inner-item">
                            <div class="dash-form">
                                <form action="/school/school_admin/class_albums/store" method="POST" enctype="multipart/form-data">
                                        @csrf

                                <label class="clear-top-margin"><i class="fa fa-book"></i>ALBUM</label>
                                <input type="text" name="album_diary" placeholder="create a Class Photo Album" />
                                <br><br>
                                <input type="submit" name="submit" class="btn btn-success" value="Create">
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="dash-item first-dash-item">
                        <h6 class="item-title"><i class="fa fa-sliders"></i>ALL ALBUMS</h6>
                        <div class="inner-item">
                            <table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                    <th><i class="fa fa-book">#</th>
                                        <th><i class="fa fa-info-circle"></i>CLASSES PHOTO ALBUMS</th>
                                        <th><i class="fa fa-calendar-o"></i>DATE</th>
                                        <th><i class="fa fa-sliders"></i>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($albums) > 0)
                                    @foreach ($albums as $album)
                                    <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$album->album_diary}}</td>
                                    <td>{{$album->created_at}}</td>
                                        <td class="action-link">
                                        <a class="edit" href="/dashboard/school/school_admin/class_albums/edit/{{$album->uuid}}" title="Edit" data-toggle="" data-target=""><i class="fa fa-edit"></i></a>
                                            <a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach


                                    @else
                                        <tr>
                                            <td>1</td>
                                        <td>NO ALBUMS CREATED</td>
                                        <td>DATE</td>
                                            <td class="action-link">
                                                <a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
                                                <a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection