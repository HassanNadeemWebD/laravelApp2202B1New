<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function getForm()
    {
        $title = "Register Yourself";
        $url = "/form";

        $data = compact("title", "url");

        return view('form')->with($data);
    }


    function postForm(Request $req)
    {
        // $req->validate(
        //     [
        //         "sname" => "required",
        //         "sgender" => "required",
        //         "scontact" => "required",
        //         "scity" => "required",
        //         "password" => "required",
        //         // "password_confirmation" => "required"
        //         "confirmPass" => "required|same:password"


        //     ]
        // );

        $students = new Students;
        $students->studentName = $req['sname'];
        $students->gender = $req['sgender'];
        $students->contact = $req['scontact'];
        $students->city = $req['scity'];
        $students->password = sha1($req['password']);

        $students->save();



        echo "<script>alert('Registration Successfull !)</script>";

        return redirect("/show");
        // echo $req['sname'];
        // print_r($students->all());
        // echo $students->studentID;


        // $req->all();
        // print_r($req->all());

        // return view('welcome');
    }


    function show()
    {
        $students = Students::all();
        $data =  compact("students");
        // echo "<pre>";
        // print_r($students->toArray());
        return view('showData')->with($data);
    }

    function delete($studentID)
    {
        echo "<pre>";

        $student = Students::find($studentID);
        $student->delete();
        return redirect("/show");
        //   print_r($student->find($id)) ;
        // print_r($student);

        // echo "delete";
    }


    function edit($studentID)
    {
        $student = Students::find($studentID);
        // print_r($student);
        $url = "/update";

        $title = "Edit Information";

        $data = compact("title", "student", "url");

        // echo $id;
        return view("form")->with($data);
    }


    function update(Request $req)
    {
        // $id = 
        $student = Students::find($req['studentID']);
        $student->studentName = $req['sname'];
        // $student->gender = $req['sgender'];
        $student->contact = $req['scontact'];
        $student->city = $req['scity'];
        $student->password = sha1($req['password']);

        $student->save();
        return redirect("/show");
        // print_r($student);


    }
}
