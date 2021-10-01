@extends('masterLayout')

@section('title','Feedback')

@section('main')

    <div class="container-fluid">
        <h2 class="formText">Your Feedback</h2><hr>
        <form action="{{action('feedback_controller@saveFeedback')}}" method="post" id="fForm">
            @csrf
            <div class="form-group">
                <label for="feedback" class="formText">Feedback:</label>
                <input type="text" class="form-control" id="feedback" placeholder="Enter your feedback" name="feedback">
            </div>
            <button type="submit" id="fsubmit" class="btn btn-outline-info">Send your Feedback</button>
        </form>
    </div>

@endsection

