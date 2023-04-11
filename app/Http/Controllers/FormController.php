<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getForm()
    {

        return view('form');
    }


    function postForm(Request $req)
    {
        $req->validate(
            [
                "sname" => "required",
                "sgender" => "required",
                "scontact" => "required",
                "scity" => "required",
                "password" => "required",
                // "password_confirmation" => "required"
                "confirmPass" => "required|same:password"


            ]
        );
        // $req->all();
        echo "<pre>";
        print_r($req->all());

        // return view('welcome');
    }
}
