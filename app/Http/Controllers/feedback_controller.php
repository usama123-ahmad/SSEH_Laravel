<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\feedback_model;
use App\user;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
class feedback_controller extends Controller
{
    function index(){
        $feedback = feedback_model::all();
        return view('feedback_data',compact('feedback'));
    }

    function createFeedback(){
        return view('feedback');
    }

    function saveFeedback(Request $request){
        $feed = new feedback_model();
        $feed->feedback=$request->input('feedback');
        $feed->save();
        alert()->success('Feedback','Thank you for your Feedback.');
        return redirect('feedback');
    }

    function destroy($id){
        $feed = feedback_model::find($id);
        $feed->delete();
        alert()->success('Delete','Feedback Deleted Successfully');
        return redirect('feedback_model');
    }
    function save(Request $req){
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
        }

}
