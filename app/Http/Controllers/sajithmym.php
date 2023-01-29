<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class sajithmym extends Controller
{
    public function cool(){
        $s = "I am From Sajithmym Controller";
        return view('j')->with("var",$s);
    }

    public function array_Show(){

        $new = new Student;
        $new->First_Name = "This is";
        $new->Last_Name = "Now Create one";
        $new->save();

        $name = Student::all();  // ["Sajith","Cool","Iron man","Super Man","Batman","Flash"];
        return view("show_array")->with("Names",$name);
    }

    public function FormShow(Request $req){
        $name = $req->input("us");
        $code = $req->input("ps");
        return ("<h1> This is Form For Tessting Name : $name, Password : $code</H1>");
    }

    public function form_Show(){
        return view("form");
    }
}
