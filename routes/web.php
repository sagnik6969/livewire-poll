<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});


// livewire
// for dynamically updating the web page without full reload
// contrary to other front end frameworks. livewire logic is run on the backend
// if anything in the frontend changes livewire makes a request to the backend server
// after getting back the response livewire make changes to the frontend automatically.

// livewire actions
// just like vue methods.
 