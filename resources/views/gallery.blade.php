@extends('layouts.home')

@section('content')

<div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-9 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Gallery</span></p>
                        <h1 class="mb-3 bread">Galleries</h1>
                        <p>Make it a reality, blogs, comments, upload images and a lot more, we offer the best photo album for you and your friends. <br> Upload Pictures and Images of your choice..</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section-2">
            <div class="photograhy">
                <div class="row no-gutters">
                    @if(count($photo_details) > 0)
                    @foreach($photo_details as $photo_detail)
                        <div class="col-md-4 ftco-animate">
                            <a href="/storage/{{ $photo_detail->filename }}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/storage/{{ $photo_detail->filename }});">
                            <div class="overlay"></div>
                            <div class="text text-center">
                            <h3>{{ $photo_detail->photos->title }}</h3>
                            {{--  <span class="tag">Model</span>  --}}
                            </div>
                            </a>
                        </div>
                    @endforeach
                    @else
                    <div class="col-md-4 ftco-animate">
                        <a href="/assets2/images/image_1.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center">
                        <h3>Work 01</h3>
                        <span class="tag">Model</span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="/assets2/images/image_2.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_2.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center">
                        <h3>Work 02</h3>
                        <span class="tag">Nature</span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_3.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_3.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 03</h3>
                    <span class="tag">Fashion</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_4.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_4.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 04</h3>
                    <span class="tag">Travel</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_5.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_5.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 05</h3>
                    <span class="tag">Travel</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_6.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_6.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 06</h3>
                    <span class="tag">Travel</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_7.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_7.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 07</h3>
                    <span class="tag">Fashion, Model</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_8.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_8.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 08</h3>
                    <span class="tag">Nature</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_9.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_9.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 09</h3>
                    <span class="tag">Technology</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_10.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_10.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 10</h3>
                    <span class="tag">Model</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_11.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_11.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 11</h3>
                    <span class="tag">Fashion</span>
                    </div>
                    </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                    <a href="/assets2/images/image_12.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/assets2/images/image_12.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                    <h3>Work 12</h3>
                    <span class="tag">Photography</span>
                    </div>
                    </a>
                    </div>
                        @endif
                </div>
            </div>
        </section>

@endsection
