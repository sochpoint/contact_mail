<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::post('/', function (Request  $request) {
    try {
        $email='info@mahabazar.com.np';
        $data = $request->all();

        Mail::send('email.contact', $data , function ($message) use($email) {
            $message->to($email, 'contact');
            $message->subject('Contact Mail');
        });
    } catch (\Exception $e) {
        dd($e);
        return redirect()->back()->with('error', 'Your Message has not been delivered Successfully');
    }
    return redirect()->back()->with('success', 'Your Message has been delivered Successfully');
});
