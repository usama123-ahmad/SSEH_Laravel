@section('header')

    <div class="header">
        <a href="{{url('/')}}" style="text-decoration: none;"><h1 class="heading1 hov">SS EDUCATION HOUSE</h1></a>
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-image: radial-gradient(#097269,#074a3c,#08c4bc)">
        <a class="navbar-brand" href="{{url('/')}}"><img src="IMAGES/Brand.png" alt="Logo" width="30px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsenavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Students</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('clickButton')}}">Admissions</a>
                        <a class="dropdown-item" href="{{url('schoolLife')}}">SSEH Life</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('faculty')}}">Faculty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('newsUpdates')}}">News & Updates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contactUs')}}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('feedback')}}">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>

@show
