@extends('masterLayout')

@section('title','Data Information')

@section('main')

<div class="container">
    <h1 class="formText heading2" style="text-align: left">SSEH DATA</h1><hr>

    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 text-center">
            <img class="img-thumbnail" style="width: 200px;height: 200px" src="IMAGES/Admin/Std%20info.jpg" alt="Students Information"><br>
            <a href="{{url('student_model')}}" target="_self" class="formText"><h4>Students Information</h4></a>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 text-center">
            <img class="img-thumbnail" style="width: 200px;height: 200px" src="IMAGES/Admin/Contact%20us.jpg" alt="Contact US"><br>
            <a href="{{url('contact_model')}}" target="_self" class="formText"><h4>Contact Us</h4></a>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 text-center">
            <img class="img-thumbnail" style="width: 200px;height: 200px" src="IMAGES/Admin/Feedback.jpg" alt="Feedback"><br>
            <a href="{{url('feedback_model')}}" target="_self" class="formText"><h4>Feedbacks</h4></a>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-3 col-xl-3 text-center">
            <img class="img-thumbnail" style="width: 200px;height: 200px" src="IMAGES/Admin/Chat.png" alt="Chat"><br>
            <a href="{{url('chat_model')}}" target="_self" class="formText"><h4>Chats</h4></a>
        </div>
    </div>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <a href="{{url('logout')}}" type="button" class="btn btn-primary">Yes</a>
                </div>
            </div>
        </div>
    </div>

    <div style="display: flex;justify-content: center;align-items: center;">
        <button type="button" class="btnLogout btn btn-dark btn-lg">Logout</button>
    </div>

    <script>
        $(document).ready(function () {
            $('.btnLogout').on('click',function () {
                $('#myModal').modal('show');
            });
        });
    </script>
</div>

@endsection
