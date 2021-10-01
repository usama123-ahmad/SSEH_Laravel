@extends('masterLayout')

@section('title' , 'Home')

@section('main')

    <div class="container-fluid">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMAGES/carousel_1.jpg" class="img-fluid carousel_images" alt="1">
                    <div id="cc1" class="carousel-caption carousel_text">
                        <h3>Kashmir Day</h3>
                        <p>Kashmir will become Pakistan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/carousel_2.jpg" class="img-fluid carousel_images" alt="2">
                    <div class="carousel-caption carousel_text">
                        <h3>Independence Day</h3>
                        <p>No nation is perfect it needs to be made perfect</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/carousel_3.jpg" class="img-fluid carousel_images" alt="3">
                    <div class="carousel-caption carousel_text">
                        <h3>Color Day</h3>
                        <p>Color is a power which directly influences the soul</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row" style="margin: auto">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 text-center" style="background-color: #1c1d1c">
                <img style="width: 100px;height: 100px;padding: 10px;" src="IMAGES/facebook.png" alt="Lab"><br>
                <a href="#" target="_self" style="color: #fff">Facebook</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 text-center"style="background-color: #1c1d1c">
                <img style="width: 100px;height: 100px;padding: 10px" src="IMAGES/twitter.png" alt="Library"><br>
                <a href="#" target="_self" style="color: #fff">Twitter</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 text-center" style="background-color: #1c1d1c">
                <img style="width: 100px;height: 100px;padding: 10px" src="IMAGES/youtube.png" alt="Okay"><br>
                <a href="#" target="_self" style="color: #fff">YouTube</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 text-center" style="background-color: #1c1d1c">
                <img style="width: 100px;height: 100px;padding: 10px" src="IMAGES/google.png" alt="Search"><br>
                <a href="#" target="_self" style="color: #fff">Google</a>
            </div>
        </div><br>
        <h2 class="heading2 formText" style="text-align: left">Happening at SS Education House</h2><br><hr>
        <div class="row" style="margin: auto">
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4 text-center">
                <img style="width: 90%;height: 70%" src="IMAGES/resultday_main.jpg" alt="Result Day">
                <a href="{{url('albums')}}" target="_self" class="formText"><h4 class="links">Results of all classes 2019 in SSEH</h4></a>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4 text-center">
                <img style="width: 90%;height: 70%" src="IMAGES/activities_main.jpg" alt="Activities">
                <a href="{{url('albums')}}" target="_self" class="formText"><h4>School activities & games in SSEH</h4></a>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4 text-center">
                <img style="width: 90%;height: 70%" src="IMAGES/pakistanday_main.jpg" alt="Pakistan Day">
                <a href="{{url('albums')}}" target="_self" class="formText"><h4>Celebrations of Different Events</h4></a>
            </div>
        </div>
    </div>
@endsection
