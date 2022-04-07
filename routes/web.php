<?php

use App\Mail\MensagemTesteEmail;
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

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::resource('tarefa','App\Http\Controllers\TarefaController')->middleware('verified');

Route::get('/mensagem-teste', function(){
    Mail::to('daniel.lopes.amorim@hotmail.com')->send(new MensagemTesteEmail());
    return 'E-mail enviado com sucesso!';
});
