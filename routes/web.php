<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChineseController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ModifyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WordListController;
use App\Http\Controllers\EnglishWordlist;
use App\Http\Controllers\EnglishRegister;
use App\Http\Controllers\EnglishModify;
use App\Http\Controllers\EnglishAnswer;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\EnglishDelete;

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
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/english', [EnglishController::class, 'showWord'])->name('english');
    Route::prefix('english')->group(function () {
        Route::patch('/answer', [EnglishAnswer::class, 'checkAnswer'])->name('english.answer');
        Route::get('/answer', [EnglishAnswer::class, 'showAnswer'])->name('english.showanswer');
        Route::get('/register_word', [EnglishRegister::class, 'register'])->name('english.register');
        Route::post('/register_word', [EnglishRegister::class, 'registerToDB'])->name('english.registerToDB');
        Route::get('/modify', [EnglishModify::class, 'modify'])->name('english.modify');
        Route::post('/modify', [EnglishModify::class, 'modifyWord'])->name('english.modifyWord');
        Route::get('/wordlist', [EnglishWordlist::class, 'wordlist'])->name('english.wordlist');
        Route::delete('/delete/{id}', [EnglishDelete::class, 'destroy'])->name('english.destroy');
    });




    Route::get('/chinese', [ChineseController::class, 'showWord'])->name('chinese');
    Route::prefix('chinese')->group(function () {
        Route::patch('/answer', [AnswerController::class, 'checkAnswer'])->name('chinese.answer');
        Route::get('/answer', [AnswerController::class, 'showAnswer'])->name('chinese.showanswer');
        Route::get('/register_word', [RegisterController::class, 'register'])->name('chinese.register');
        Route::post('/register_word', [RegisterController::class, 'registerToDB'])->name('chinese.registerToDB');
        Route::get('/modify', [ModifyController::class, 'modify'])->name('chinese.modify');
        Route::post('/modify', [ModifyController::class, 'modifyWord'])->name('chinese.modifyWord');
        Route::get('/wordlist', [WordListController::class, 'wordlist'])->name('chinese.wordlist');
        Route::delete('/delete/{id}', [DeleteController::class, 'destroy'])->name('chinese.destroy');
    });
});

require __DIR__ . '/auth.php';
