<?php

use App\Http\Controllers\NoteappController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'Login welcome';
});

Route::get('/index', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/noteapp', [NoteappController::class, 'showNotes']);
Route::post('/noteapp-process', [NoteappController::class, 'createNote']);

Route::get('/noteapp/display', [NoteappController::class, 'displayNotes']);
Route::get('/noteapp/display/{id}', [NoteappController::class, 'displayNote']);
Route::get('/noteapp/display/edit/{id}', [NoteappController::class, 'editNote']);
Route::post('/noteapp/display/edit/{id}', [NoteappController::class, 'updateNote']);
