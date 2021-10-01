@extends('masterLayout')

@section('title','School Life')

@section('main')

    <div class="container-fluid">
        <h1 class="formText heading2" style="text-align: left">Photo Albums</h1><br><hr>
        <div class="row" style="margin: auto">
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4 text-center">
                <img class="rounded-circle" style="width: 200px;height: 200px" src="IMAGES/colorday.jpg" alt="Colors Day"><br>
                <a href="{{url('albums')}}" target="_self" class="formText"><h4>Colors Day</h4></a>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4 text-center">
                <img class="rounded-circle" style="width: 200px;height: 200px" src="IMAGES/resultday.jpg" alt="Result Day"><br>
                <a href="{{url('albums')}}" target="_self" class="formText"><h4>Results Day</h4></a>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4 text-center">
                <img class="rounded-circle" style="width: 200px;height: 200px" src="IMAGES/independenceday.jpg" alt="Independence Day"><br>
                <a href="{{url('albums')}}" target="_self" class="formText"><h4>Independence Day</h4></a>
            </div>
        </div>
    </div>

@endsection
