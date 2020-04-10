<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Fee;
use App\Student;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('111865.welcome');
})->name('home');*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/feestable','HomeController@display')->name('display');

Route::get('/students', 'StudentsController@index')->name('student');
Route::post('/students', 'StudentsController@storeStudent')->name('storeStudent');

Route::get('/fees', 'FeesController@index')->name('fees');
Route::post('/fees', 'FeesController@storePayment')->name('storePayment');

/*Route::get('/search', 'FeesController@search');
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $fee = Fee::where('student_number','LIKE','%'.$q.'%')->orWhere('full_name','LIKE','%'.$q.'%')->get();
    if(count($student) > 0)
        return view('feestable')->withDetails($fee)->withQuery ( $q );
    else return view ('feestable')->withMessage('No Details found. Try to search again !');
});
*/
/*Route::get("my-search","FeesController@mySearch");*/

Route::get('/search', function(){
    $q = Input::get('q');
    //dd($q);
    if($q != "" ){
        $student = Student::where('student_number', 'LIKE', '%' . $q . '%')
                                ->orWhere('full_name', 'LIKE', '%' . $q . '%')
                                ->get();
        if(count($student) >0)
            return view('feestable')->withDetails($student)->withQuery($q);
    }
    return view('feestable')->withMessage("No Students found");

});
