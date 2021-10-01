<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\chat_model;
use RealRashid\SweetAlert\Facades\Alert;
class chat_controller extends Controller
{
    function index(){
        $chat = chat_model::all();
        return view('chat_data',compact('chat'));
    }

    function createChat(){
        return view('chat');
    }

    function saveChat(Request $request){
        $data=request()->validate([
            'mail'=>'required',
            'msg'=>'required',
        ],['msg.required'=>'Please write something.',]);


        $ch = new chat_model();
        $ch->email=$request->input('mail');
        $ch->message=$request->input('msg');
        $ch->save();
        alert()->success('Message','Message Sent Successfully');
        return redirect('contactUs');
    }

    function destroy($id){
        $ch = chat_model::find($id);
        $ch->delete();
        alert()->success('Delete','Message Deleted Successfully');
        return redirect('chat_model');
    }
}
