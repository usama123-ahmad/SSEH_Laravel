<?php

namespace App\Http\Controllers;

use App\student_model;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class student_controller extends Controller
{
    function index(){
        $student = student_model::all();
        return view('admission_data',compact('student'));
    }

    function createStudent(){
        return view('student');
    }

    function store(Request $request){
        $data=request()->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'fatherName'=>'required',
            'gender'=> 'required',
            'dob'=>'required',
            'cnic'=>'required',
            'phoneNo'=>'required',
            'religion' => 'required',
            'email'=>'required',
            'address'=>'required',
            'image' => 'required',
            'cb'=> 'required',
        ],['cb.required'=>'Please check the box before submitting',]);

        $std = new student_model();
        $std->first=$request->input('firstName');
        $std->second=$request->input('lastName');
        $std->father=$request->input('fatherName');
        $std->gender=$request->input('gender');
        $std->dob=$request->input('dob');
        $std->cnic=$request->input('cnic');
        $std->phone=$request->input('phoneNo');
        $std->religion=$request->input('religion');
        $std->email=$request->input('email');
        $std->address=$request->input('address');
        if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('IMAGES/Upload/',$filename);
            $std->image=$filename;
        }else{
            return $request;
            $std->image='';
        }
        $std->save();
        alert()->success('Student','Data Saved Successfully');
        return redirect('admission');
    }

    function destroy($id){
        $std = student_model::find($id);
        $std->delete();
        alert()->success('Delete','Data Deleted Successfully');
        return redirect('student_model');
    }

    function update(Request $request,$id){
        $data=request()->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'fatherName'=>'required',
            'gender'=> 'required',
            'dob'=>'required',
            'cnic'=>'required',
            'phoneNo'=>'required',
            'religion' => 'required',
            'email'=>'required',
            'address'=>'required',
        ]);
        $std = student_model::find($id);
        $std->first=$request->input('firstName');
        $std->second=$request->input('lastName');
        $std->father=$request->input('fatherName');
        $std->gender=$request->input('gender');
        $std->dob=$request->input('dob');
        $std->cnic=$request->input('cnic');
        $std->phone=$request->input('phoneNo');
        $std->religion=$request->input('religion');
        $std->email=$request->input('email');
        $std->address=$request->input('address');
        $std->save();
        alert()->success('Student','Data Updated Successfully');
        return redirect('student_model')->with('success','Data Updated');
    }
}
