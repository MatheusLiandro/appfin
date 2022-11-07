<?php

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


/////////////////Rotas Para Usuário Logado

//Rota extrato(somente se usuário estiver logado)
Route::get('/extrato', function () {
    return view('extrato');
})->name('extrato');


//Rota Seuas dados
Route::get('/seus_dados', function () {
    return view('seus_dados');
})->name('seus_dados');

//Rota Nova entrada - cadastro de receita ou despesa
Route::get('/nova_entrada', function () {
    return view('nova_entrada');
})->name('nova_entrada');

//Rota Seus gastos - Gráfico de despesas x receitas
Route::get('/seus_gastos', function () {
    return view('seus_gastos');
})->name('seus_gastos');

