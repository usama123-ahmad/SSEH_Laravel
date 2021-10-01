<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\contact_model;
use RealRashid\SweetAlert\Facades\Alert;
class contact_controller extends Controller
{
    function index(){
        $contact = contact_model::all();
        return view('contact_data',compact('contact'));
    }

    function createContact(){
        return view('contact');
    }

    function saveContact(Request $request){
        $cont = new contact_model();
        $cont->name=$request->input('cn');
        $cont->email=$request->input('ce');
        $cont->subject=$request->input('cs');
        $cont->message=$request->input('cm');
        $cont->save();
        alert()->success('Contact Us','Thank you for Contacting us.');
        return redirect('contactUs');
    }

    function destroy($id){
        $cont = contact_model::find($id);
        $cont->delete();
        alert()->success('Delete','Contact Information Deleted Successfully');
        return redirect('contact_model');
    }
}
