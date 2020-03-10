@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12 clear-padding-xs">
            <div class="col-sm-4">
                <div class="dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-plus-circle"></i>PHOTO</h6>
                    <div class="">
                        <img src="/storage/{{$blog->image}}" width="200px"/>
                        {{-- <div class="clearfix"></div> --}}
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="dash-item first-dash-item">
                    <h6 class="item-title"><i class="fa fa-sliders"></i>BLOG DETAILS</h6>
                    <div class="inner-item">
                        <h1>{{$blog->title}}</h1> 
                        <p>{{$blog->content}}</p>
                        <hr>
                        <small>written on {{$post->created_at}}</small>
                        <hr>
                        <a href="/dashboard/school/students/blogs/edit/{{$post->uuid}}" class="btn btn-primary">EDIT</a>

                        <form action="/school/students/blogs/delete/{{$blog->uuid}}" method="GET" class="pull-right">
                            <!-- CSRF Token -->
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        {{-- {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull right'])!!}
                            {{Form::hiden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    

@endsection