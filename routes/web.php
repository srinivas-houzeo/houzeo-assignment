<?php

use App\UserBasicDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/**
 * 1. Check the form on the "form-validations" URL. After submitting this form, data should be inserted into the user_basic_details
 * table with server-side Laravel validation rules as mentioned below:
 *
2. Full Name: Required, min length 4, Only Alphabets, space, and hyphen are allowed
3. Phone number: Optional but if entered then only 10 digits number should be accepted
4. Date of birth: Required, Difference between entered date and today must be more than 15 years

 * dob more than 50
 */

Route::post('/test', function (Request $request) {
    $dt = new Carbon\Carbon();
    $before = $dt->subYears(50)->format('Y-m-d');

    $request->validate([
        'full_name' =>  'required|string',
        'phone_number'  =>  'required|string',
        'email' =>  'required|email',
//        'dob'   =>  'required|string',
        'dob' => 'required|date|before:' . $before
    ]);

    UserBasicDetails::create($request->all());
    return back();
})->name('storeData');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/property-details', 'Property_details@index');
Route::get('/form-validation', 'Property_details@form_validation');
