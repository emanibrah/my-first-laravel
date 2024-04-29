<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
   public function my_data(){
    return view('test');
   }
}
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class Mycontroller extends Controller
// {
//     public function receiveForm(Request $request)
//     {
//         $firstName = $request->input('fname');
//         $lastName = $request->input('lname');

//         return "First Name: " . $firstName . ", Last Name: " . $lastName;
//     }
// }