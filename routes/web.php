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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/chinese', [ChineseController::class, 'showWord'])->name('chinese');
    Route::get('/english', [EnglishController::class, 'showWord'])->name('english');
    Route::patch('/answer', [AnswerController::class, 'checkAnswer'])->name('chinese.answer');
    Route::get('/answer', [AnswerController::class, 'showAnswer'])->name('chinese.showanswer');
    Route::get('/register_word', [RegisterController::class, 'register'])->name('chinese.register');
    Route::post('/register_word', [RegisterController::class, 'registerToDB'])->name('chinese.registerToDB');
    Route::get('/modify', [ModifyController::class, 'modify'])->name('chinese.modify');
    Route::post('/modify', [ModifyController::class, 'modifyWord'])->name('chinese.modifyWord');
    Route::get('/wordlist', [WordListController::class, 'wordlist'])->name('chinese.wordlist');
    Route::get('/test2', [TestController::class, 'test2'])->name('chinese.test2');
    Route::delete('/delete/{id}', [DeleteController::class, 'destroy'])->name('chinese.destroy');
    
    

});

require __DIR__ . '/auth.php';
