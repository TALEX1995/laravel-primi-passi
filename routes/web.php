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
    $phrase = 'Hello Class 100';
    return view('home', compact('phrase'));
})->name('home');

Route::get('/students', function () {
    return view('students.index');
})->name('students');
