<?php

use App\Http\Controllers\QuizController;
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

Route::get('/', [QuizController::class, 'index'])->name('quiz.index');

Route::get('/LaraQuiz/ConferirResposta', [QuizController::class, 'verificarRespostas'])->name('quiz.verificarRespostas');
Route::get('/Laraquiz/Resultado',[QuizController::class, 'verificarRespostas'])->name('quiz.resultado');
