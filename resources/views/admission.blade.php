@extends('masterLayout')

@section('title','Admission')

@section('main')

    <div class="container-fluid">
        <h1 class="heading2" id="h2SAF">Student Admission Form</h1>
        <hr><br>
        <form action="{{{action('student_controller@store')}}}" method="post" id="myForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <label for="firstName" class="formText">First Name:</label><br>
                    <input type="text" id="firstName" name="firstName" style="width: 300px"><br>
                    <div id="fNameCheck"></div><div style="color: red">{{$errors->first('firstName')}}</div>
                    <br>
                    <label for="lastName" class="formText">Last Name:</label><br>
                    <input type="text" id="lastName" name="lastName" style="width: 300px"><br>
                    <div id="lNameCheck"></div><div style="color: red">{{$errors->first('lastName')}}</div>
                    <br>
                    <label for="fatherName" class="formText">Father Name:</label><br>
                    <input type="text" id="fatherName" name="fatherName" style="width: 300px"><br>
                    <div id="fatherNameCheck"></div><div style="color: red">{{$errors->first('fatherName')}}</div>
                    <br>
                    <label class="formText">Select Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>
                    <div style="color: red">{{$errors->first('gender')}}</div><br>
                    <label for="dob" class="formText">Date Of Birth:</label><br>
                    <input type="date" id="dob" name="dob"><div style="color: red">{{$errors->first('dob')}}</div><br><br>
                    <label for="cnic" class="formText">CNIC:</label><br>
                    <input type="text" id="cnic" name="cnic" placeholder="xxxxx-xxxxxxx-x" style="width: 300px"><br>
                    <div id="cnicCheck"></div><div style="color: red">{{$errors->first('cnic')}}</div><br>
                    <br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <label for="phoneNo" class="formText">Phone No.:</label><br>
                    <input type="tel" id="phoneNo" name="phoneNo" placeholder="03xxxxxxxxx" style="width: 300px">
                    <div id="phoneNoCheck"></div><div style="color: red">{{$errors->first('phoneNo')}}</div>
                    <br>
                    <br>
                    <label class="formText" for="rel">Select Religion</label><br>
                    <select id="rel" name="religion" class="custom-select" style="width: 150px">
                        <option selected disabled>Choose..</option>
                        <option value="Islam" > Islam</option>
                        <option value="Christian">Christian</option>
                        <option value="Other">Other</option>
                    </select><div style="color: red">{{$errors->first('religion')}}</div>
                    <br><br>
                    <label for="email" class="formText">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="example@example.com" style="width: 300px">
                    <div id="emailCheck"></div><div style="color: red">{{$errors->first('email')}}</div><br>
                    <br>
                    <label for="address" class="formText">Address:</label><br>
                    <input type="text" id="address" name="address" style="width: 300px; height: 215px">
                    <div id="addressCheck"></div><div style="color: red">{{$errors->first('address')}}</div><br>
                    <br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="customfile" class="formText">Choose Image:</label>
                        <input type="file" class="form-control" id="customfile" name="image">
                    </div><div style="color: red">{{$errors->first('image')}}</div>
                </div><br>
            </div><br>
            <div class="custom-control custom-checkbox" data-toggle="tooltip" title="Read the form before check">
                <input type="checkbox" class="custom-control-input" id="cb" name="cb">
                <label class="custom-control-label formText" for="cb">read all the terms carefully before submitting it</label>
            </div><div style="color: red">{{$errors->first('cb')}}</div><br>
            <button type="submit" id="adsubmit" name="adSubmit" class="btn btn-primary" style="background-color: rgba(8,131,123,0.96); width: 80px"><b>Submit</b></button>
        </form>

    </div>

@endsection
