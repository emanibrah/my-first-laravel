<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
   public function my_data(){
    return view('test');
   }

   public function myVal(){
      // session()->put('test','My first session');
      session()->flash('test1','My first session');
      return 'Session Created';
   }

// Restore session
   public function restoreVal(){
      return 'My Session value is: ' . session('test1');
  }

  // forget session
  public function deleteVal(){
   // session()->forget('test');
   session()->flush();
   return 'Session removed';
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

