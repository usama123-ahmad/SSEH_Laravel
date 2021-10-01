@section('footer')

    <h1 class="ribbon" style="margin-top: 10%"><strong class="ribbon-content">Stay Connected</strong></h1>
    <div class="embed-responsive" style="height: 250px; background: rgba(8,131,123,0.96)">
        <div class="row">
            <div class="col">
                <br><br>
                <ul style="color: #bdbfb4">
                    <li><a href="{{url('/')}}" style="color: aliceblue">Home</a></li>
                    <li><a href="{{url('clickButton')}}" style="color: aliceblue">Admission</a></li>
                    <li><a href="{{url('schoolLife')}}" style="color: aliceblue">School Life</a></li>
                    <li><a href="{{url('faculty')}}" style="color: aliceblue">Faculty</a></li>
                </ul>
            </div>
            <div class="col">
                <br><br>
                <ul style="color: #bdbfb4">
                    <li><a href="{{url('newsUpdates')}}" style="color: aliceblue">News & Updates</a></li>
                    <li><a href="{{url('albums')}}" style="color: aliceblue">Pictures</a></li>
                    <li><a href="contactUs" style="color: aliceblue">Contact Us</a></li>
                    <li><a href="feedback" style="color: aliceblue">Feedback</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="height: 50px;width: auto;background: rgba(1,78,73,0.93)">
        <p style="color: #fff;text-align: center">Copyright © 2021. All Rights Reserved.  SS EDUCATION HOUSE.  |  Updated: 17th August, 2021</p>
    </div>

@show
