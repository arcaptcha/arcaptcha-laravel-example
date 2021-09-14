<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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
    return view('arcaptcha-usage');
});

Route::post('/submit', function () {
    $validator = Validator::make(request()->all(), [
        'arcaptcha-token' => 'arcaptcha'
    ]);

    // check if validator fails
    if ($validator->fails()) {
        $errors = $validator->errors();

        return 'FAILED';
    } else {
        return 'OK';
    }
});
