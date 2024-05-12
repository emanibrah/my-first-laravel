<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});
 Route::get('eman/{id?}' , function ($id=0) {
    return 'welcome for my frist site'. $id;
})->where(['id'=> '[0-9]+']);

Route::get('test1', function () {
    return view('test');
});

Route::get('form1', function () {
    return view('form1');
});

// Route::post('receiveform', function () {
//     return ('receivedform');
// })->name ('receiveform1');

Route::post('receiveform', function (Request $request) {
    return $request->all();
})->name ('receiveform1');

//Route::get('test20',[MyController::class, 'my_data']);
// Route::get('receiveform1',[MyController::class, 'receiveForm']);
//Route::post('/receiveform1', 'MyController@receiveForm')->name('receiveform1');
//Route::post('receiveform1', 'Mycontroller@receiveForm')->name('receiveform1');

// clintinsert form 
Route::get('addclient', [ClientController::class, 'create'])->name('addclient');
Route::get('clients', [ClientController::class, 'index'])->name('clients');
Route::post('insetclient', [ClientController::class, 'store'])->name('insetclient');

// student form 
Route::get('addstudent', [StudentController::class, 'create'])->name('newstudent');
Route::get('students', [StudentController::class, 'index'])->name('students');
Route::post('insertstudent', [StudentController::class, 'store'])->name('addstudent');