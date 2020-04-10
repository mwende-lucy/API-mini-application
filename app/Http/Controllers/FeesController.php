<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Student;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('111865.fees')->with('students',$students);
    }
    public function storePayment(Request $request)
    {
        $this->validate($request, [
            'student_number'=>'required',
            'date_of_payment'=>'required',
            'amount'=>'required'

        ]);

        $fee = new Fee();
        $fee->student_number = $request->student_number;
        $fee->date_of_payment = $request->date_of_payment;
        $fee->amount = $request->amount;
        $fee->save();

        return redirect()->route('home')->with('successMsg', 'You have successfully added a new fee payment');
    }
}
