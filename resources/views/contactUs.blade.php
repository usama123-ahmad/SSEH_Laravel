@extends('masterLayout')

@section('title','Contact Us')

@section('main')

    <div class="container-fluid">
        <br>
        <h2 class="formText" style="margin-left: 2%">CONTACT</h2>
        <hr>
        <p class="formText" style="margin-left: 15px"><b>Send an email to the contact:</b></p>
        <form action="{{{action('contact_controller@saveContact')}}}" method="post" id="contactForm">
            @csrf
            <div class="contact_us">
                <label for="contact_name" class="formText">Enter your Name:</label><br>
                <input type="text" class="txtOnly form-control" id="contact_name" name="cn">
                <div id="nameCheck"></div>
                <br>
                <label for="contact_email" class="formText">Enter Email Address:</label><br>
                <input type="email" class="form-control" id="contact_email" name="ce">
                <div id="emailCheck"></div>
                <br>
                <label for="contact_subject" class="formText">Message Subject:</label><br>
                <input type="text" class="form-control" id="contact_subject" name="cs">
                <div id="subjectCheck"></div>
                <br>
                <label for="contact_message" class="formText">Enter your Message:</label><br>
                <input type="text" class="form-control" id="contact_message" name="cm" style="height: 160px">
                <div id="messageCheck"></div>
                <br>
                <button type="submit" id="submit" name="submit" class="btn btn-primary" style="background-color: rgba(8,131,123,0.96);margin-left: 5%"><b>Submit</b></button>
            </div>
        </form>
        <button class="open-button" onclick="openForm()">Chat</button>
        <div class="chat-popup" id="askForm">
            <form action="{{action('chat_controller@saveChat')}}" method="post" class="form-container">
                @csrf
                <h3>Ask Something</h3>
                <label for="mail"><b>Email: </b></label>
                <input placeholder="Type email.." id="mail" name="mail"><div id="mailCheck"></div>
                <div style="color: red">{{$errors->first('mail')}}</div>

                <label for="msg"><b>Message:</b></label>
                <textarea placeholder="Type message.." id="msg" name="msg"></textarea>
                <div style="color: red">{{$errors->first('msg')}}</div>

                <button type="submit" name="send" class="btn btn-sm">Send</button>
                <button type="button" class="btn btn-sm cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        <script>
            function openForm() {
                document.getElementById("askForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("askForm").style.display = "none";
            }
        </script>
        <br><br><br>
        <div style="height: 250px;width: auto; background: rgba(8,131,123,0.96)" class="text-center">
            <br>
            <a href="{{url('/')}}">
                <img src="IMAGES/Brand.png" style="height: 150px;width: 150px" alt="Brand"><br>
                <a href="{{url('/')}}" style="text-decoration: none;color: #fff;text-align: center"><h2>SS EDUCATION HOUSE</h2></a>
            </a>
            <br>
        </div>
        <div class="row" style="margin: auto;background-color: rgba(1,78,73,0.93)">
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4" style="text-align: center">
                <img src="IMAGES/location.png" style="width: 200px;height: 170px">
                <a href="https://www.google.com/maps/place/Usmania+Park/@31.3344654,73.412006,17z/data=!3m1!4b1!4m5!3m4!1s0x39227ede5af9c971:0xe14574b0c7189be0!8m2!3d31.3344608!4d73.4141947" target="_blank" style="text-decoration: none"><h4 style="color: #fff">SS Education House</h4></a>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4" style="text-align: center">
                <img src="IMAGES/phone.png" style="width: 200px;height: 170px">
                <h4 style="color: #fff">0300-xxxxxxx</h4>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4" style="text-align: center">
                <img src="IMAGES/email.png" style="width: 200px;height: 170px">
                <h4 style="color: #fff">email@example.com</h4>
            </div>
        </div>
    </div>

@endsection
