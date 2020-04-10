<?php

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
   
    public function index()
    {
        return view('111865.student');
    }
    public function storeStudent(Request $request)
    {
        $this->validate($request, [
            'full_name'=>'required',
            'date_of_birth'=>'required',
            'address'=>'required'

        ]);

        $student = new Student();
        $student->full_name = $request->full_name;
        $student->date_of_birth = $request->date_of_birth;
        $student->address = $request->address;
        $student->save();

        return redirect()->route('home')->with('successMsg', 'You have successfully added a new Student');
    }
}
