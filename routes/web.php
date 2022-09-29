<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

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

Route::get('/cadpessoa', function () {
    return view('form_create_pessoa');
})->name('cadpessoa');

Route::get('/listarpessoas', [PessoaController::class, 'listarpessoas'])->name('listarpessoas');

Route::post('/cmd_crud_inserir_pessoa', [PessoaController::class, 'store']);

Route::get('/{id}', [PessoaController::class, 'destroy'])->name('delete_pessoa');
