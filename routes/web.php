<?php

use App\Http\Controllers\AlunosController;
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

Route::get('/', [AlunosController::class, "index"])->name("lista.alunos");
Route::get('/criar-aluno', [AlunosController::class, "create"])->name("criar.aluno");
Route::post('/cadastrar-aluno', [AlunosController::class, "store"])->name("cadastrar.aluno");
Route::get('/deletar-aluno/{id}', [AlunosController::class, "destroy"])->name("deletar.aluno");
Route::get('/editar-aluno/{id}', [AlunosController::class, "edit"])->name("editar.aluno");
Route::post('/atualizar-aluno/{id}', [AlunosController::class, "update"])->name("atualizar.aluno");
