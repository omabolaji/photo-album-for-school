@extends('layouts.dashboard')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-6">
                @if(count($galleries) > 0)
                @foreach($galleries as $gallery)
            <img src="/storage/{{$gallery->filename}}" alt="Images">
                @endforeach
                @else
                <p class="text-center">No Image Uploaded</p>
                @endif
            </div>
        </div>
        <div class="row">
                <h3 class="jumbotron"> Image Upload</h3>
                <form action="/gallery" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-group control-group increment">
                            <input type="file" name="filename[]" class="form-control" multiple />
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                </form>
        </div>
       
</div>
<script>
        $(document).ready(function(){
            $(".btn-success").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });
    
            $(".body").on("click", ".btn-danger", function(){
                $(this).parents(".control-group").remove();
            });
        });
    </script>

@endsection

