<?php

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

Route::get('/teste', function() {
    return "TESTE";
});
//Parâmetro obrigatório
Route::get('/seunome/{nome}/{sobrenome}', function($nome, $sobrenome) {
    return $nome . $sobrenome;
});
//Parâmetro opcional
Route::get('/seunome/{nome?}', function($nome = null) {
    return $nome;
});
//Parâmetro com regra
Route::get('/rotacomregras/{string}/{int}', function($string, $int){
    echo "Olá, seja bem-vindo, $string!";
})->where('string', '[A-Za-z]+')->where('int', '[0-9]+');
//Agrupando rotas
Route::prefix('/aplicacao')->group(function(){

    Route::get('/', function () {
        return view('app');
    })->name('app');
    Route::get('/user', function () {
        return view('user');
    })->name('app.user');
    Route::get('/profile', function () {
        return view('profile');
    })->name('app.profile');

});
//Nomeando rotas
Route::get('/produtos', function(){
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');