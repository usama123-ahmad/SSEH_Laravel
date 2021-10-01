@extends('masterLayout')

@section('title','Click here')

@section('main')

    <div class="container-fluid">
        <div>
            <h3 class="heading2" style="text-align: left">How to apply?</h3>
            <hr>
            <a href="{{url('admission')}}" class="btn btn-md btn-outline-info">Click here to apply</a>
        </div>
    </div>

@endsection
