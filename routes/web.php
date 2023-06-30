<?php

use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\QuestionaireController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TeacherController;
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
    return redirect()->route('questionaire.index');
});

Route::resource('questionaire',QuestionaireController::class)->except('destroy');
Route::resource('teachers',TeacherController::class)->except('destroy');
Route::resource('criteria',CriteriaController::class)->except('destroy');
Route::resource('questions',QuestionController::class)->except('destroy');

