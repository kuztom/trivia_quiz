<?php

use App\Http\Controllers\QuestionsController;
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

Route::get('/start', [QuestionsController::class, 'index'])
    ->middleware('auth')
    ->name('game.start');

Route::get('/game/question', [QuestionsController::class, 'question'])
    ->middleware('auth')
    ->name('game.question');

Route::post('/game/check', [QuestionsController::class, 'check'])
    ->middleware('auth')
    ->name('game.check');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])
    ->name('dashboard');

require __DIR__.'/auth.php';
