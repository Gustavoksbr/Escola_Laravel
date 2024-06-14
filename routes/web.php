<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\Professor_turmaController;
use App\Http\Controllers\MensagemController;

Route::get('/',function()
{    return view('home');
});



//teste conexão
Route::get('/teste',function(){
    return view('testeconexao');
});

//mensagem
Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

//turma
Route::resources([
    'turma' => TurmaController::class,
]);

Route::get('/turma/delete/{id}', [TurmaController::class, 'delete']);


//professor
Route::resources([
    'professor' => ProfessorController::class,
]);

Route::get('/professor/delete/{id}', [ProfessorController::class, 'delete']);

//aluno
Route::resources([
    'aluno' => AlunoController::class,
]);

Route::get('/aluno/delete/{id}', [AlunoController::class, 'delete']);

//professor_turma
Route::resources([
    'professor_turma' => Professor_turmaController::class,
]);

Route::get('/professor_turma/delete/{id}', [Professor_turmaController::class, 'delete']);