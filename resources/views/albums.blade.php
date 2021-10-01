@extends('masterLayout')

@section('title','Albums')

@section('main')

    <div class="container-fluid">
        <h1 class="formText heading2" style="text-align: left">Images</h1><hr>
        <div style="background-color: rgba(8,131,123,0.96);margin-left: 10%;margin-right: 10%">
            <h1 class="heading2" style="color: #f8f9fa">Results-2019</h1></div>
        <div id="demo" class="carousel slide" data-ride="carousel" style="margin-left: 10%;margin-right: 10%">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
                <li data-target="#demo" data-slide-to="7"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMAGES/Results%20Day/1.jpg" class="img-fluid carousel_images" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Results%20Day/2.jpg" class="img-fluid carousel_images" alt="2">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Results%20Day/3.jpg" class="img-fluid carousel_images" alt="3">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Results%20Day/4.jpg" class="img-fluid carousel_images" alt="4">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Results%20Day/5.jpg" class="img-fluid carousel_images" alt="5">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Results%20Day/6.jpg" class="img-fluid carousel_images" alt="6">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Results%20Day/7.jpg" class="img-fluid carousel_images" alt="7">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Results%20Day/8.jpg" class="img-fluid carousel_images" alt="8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div><br><br><hr>
        <div style="background-color: rgba(8,131,123,0.96);margin-left: 10%;margin-right: 10%">
            <h1 class="heading2" style="color: #f8f9fa">Activities-2019</h1></div>
        <div id="demo1" class="carousel slide" data-ride="carousel" style="margin-left: 10%;margin-right: 10%">
            <ul class="carousel-indicators">
                <li data-target="#demo1" data-slide-to="0" class="active"></li>
                <li data-target="#demo1" data-slide-to="1"></li>
                <li data-target="#demo1" data-slide-to="2"></li>
                <li data-target="#demo1" data-slide-to="3"></li>
                <li data-target="#demo1" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMAGES/Activities/1.jpg" class="img-fluid carousel_images" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Activities/2.jpg" class="img-fluid carousel_images" alt="2">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Activities/3.jpg" class="img-fluid carousel_images" alt="3">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Activities/4.jpg" class="img-fluid carousel_images" alt="4">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Activities/5.jpg" class="img-fluid carousel_images" alt="5">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo1" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div><br><br><hr>
        <div style="background-color: rgba(8,131,123,0.96);margin-left: 10%;margin-right: 10%">
            <h1 class="heading2" style="color: #f8f9fa">Pakistan Day-2019</h1></div>
        <div id="demo2" class="carousel slide" data-ride="carousel" style="margin-left: 10%;margin-right: 10%">
            <ul class="carousel-indicators">
                <li data-target="#demo2" data-slide-to="0" class="active"></li>
                <li data-target="#demo2" data-slide-to="1"></li>
                <li data-target="#demo2" data-slide-to="2"></li>
                <li data-target="#demo2" data-slide-to="3"></li>
                <li data-target="#demo2" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMAGES/Pakistan%20Day/1.jpg" class="img-fluid carousel_images" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Pakistan%20Day/2.jpeg" class="img-fluid carousel_images" alt="2">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Pakistan%20Day/3.jpg" class="img-fluid carousel_images" alt="3">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Pakistan%20Day/4.jpg" class="img-fluid carousel_images" alt="4">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/Pakistan%20Day/5.jpg" class="img-fluid carousel_images" alt="5">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div><br><br><hr>
    </div>

@endsection
