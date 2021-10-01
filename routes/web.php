<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;
use App\login;
use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/clickButton','clickButton');
Route::view('/admission','admission');
Route::view('/schoolLife','schoolLife');
Route::view('/albums','albums');
Route::view('/contactUs','contactUs');
Route::view('/faculty','faculty');
Route::view('/newsUpdates','newsUpdates');
Route::view('/adminData','adminData')->middleware('authenticated');


Route::get('feedback_model','feedback_controller@index')->middleware('authenticated');
Route::get('feedback','feedback_controller@createFeedback');
Route::post('feedback_model','feedback_controller@saveFeedback');
Route::resource('/feed','feedback_controller')->middleware('authenticated');

Route::get('chat_model','chat_controller@index')->middleware('authenticated');
Route::get('chat','chat_controller@createChat');
Route::post('chat_model','chat_controller@saveChat');
Route::resource('/chat','chat_controller')->middleware('authenticated');

Route::get('contact_model','contact_controller@index')->middleware('authenticated');
Route::get('contact','contact_controller@createContact');
Route::post('contact_model','contact_controller@saveContact');
Route::resource('/cont','contact_controller')->middleware('authenticated');

Route::get('student_model','student_controller@index')->middleware('authenticated');
Route::get('student','student_controller@createStudent');
Route::post('student_model','student_controller@store');
Route::resource('/std','student_controller')->middleware('authenticated');
Route::resource('/stud','student_controller');

Route::get('logout', 'LoginController@logout');

Route::get('/register', function () {
})->middleware('authenticated');
Route::get('/verify', function () {
})->middleware('authenticated');
Route::get('/reset', function () {
})->middleware('authenticated');
Route::get('/confirm', function () {
})->middleware('authenticated');
Route::get('/email', function () {
})->middleware('authenticated');
Route::get('/register', function () {
    return view('register');
});
Route::post('/registeruser','feedback_controller@save');




