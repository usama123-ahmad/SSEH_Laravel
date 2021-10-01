<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("css/ask.css")}}">
    <link href="{{asset("css/css.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("css/bootstrap.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("css/custom.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("css/fonts.css")}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{asset("js/jquery-3.5.1.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/jquery-3.4.1.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/jquery_TextFields.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/jquery_chat.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/jquery_update.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/jquery_Feedback.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/jquery_ContactForm.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/jquery_AdmissionForm.js")}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<div class="container-fluid">
    @include('Components.header')
</div>

@section('main')
@show

<div class="container-fluid">
    @include('Components.footer')
</div>
@include('sweetalert::alert')
</body>
</html>
