<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class studentController extends Controller
{
    private $columns = ['studentName','age'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view("students", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $student = new Student();
        // $student->studentName =$request->studentName ;
        // $student->age = $request->age;
        // $student->save();
        // return 'insert successfully';
        Student::create($request->only($this->columns));
        return redirect('students');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('showStudent', compact('student'));
            
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('editStudents', compact('student'));
            }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::where('id', $id)->update($request->only($this->columns));
        return redirect('students');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
            Student::where('id', $id)->delete();
            return redirect('students');
    }
            //rash
            public function trash()
            {
            $trashed = Student::onlyTrashed()->get();
            return view('trashStudent', compact('trashed'));
            }

            //restore

            public function restore(string $id)
            {
                Student::where('id', $id)->restore();
            return redirect('students');
            }


}


