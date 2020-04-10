<?php

namespace App\Http\Controllers;

use App\Fee;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('111865.welcome');
    }
    public function display()
    {
        $fees = Fee::has('students')->get();
        return view('111865.feestable')->with('fees',$fees);
    }
}
