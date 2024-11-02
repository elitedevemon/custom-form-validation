<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', [FormController::class, 'index'])->name('form-view');
Route::post('/', [FormController::class, 'submit'])->name('form-submit');