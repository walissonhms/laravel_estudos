<?php

use Illuminate\Http\Request;

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

Route::get('/produtos', 'MeuControlador@produtos');
Route::get('/nome', 'MeuControlador@getNome');
Route::get('/idade', 'MeuControlador@getIdade');
Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

//Associando Rotas ao Controlador
/* Command: php artisan route:list
+--------+-----------+-------------------------+------------------+-------------------------------------------------+--------------+
| Domain | Method    | URI                     | Name             | Action                                          | Middleware   |
+--------+-----------+-------------------------+------------------+-------------------------------------------------+--------------+
|        | GET|HEAD  | /                       |                  | Closure                                         | web          |
|        | GET|HEAD  | api/user                |                  | Closure                                         | api,auth:api |
|        | GET|HEAD  | clientes                | clientes.index   | App\Http\Controllers\ClienteControlador@index   | web          |
|        | POST      | clientes                | clientes.store   | App\Http\Controllers\ClienteControlador@store   | web          |
|        | GET|HEAD  | clientes/create         | clientes.create  | App\Http\Controllers\ClienteControlador@create  | web          |
|        | GET|HEAD  | clientes/{cliente}      | clientes.show    | App\Http\Controllers\ClienteControlador@show    | web          |
|        | PUT|PATCH | clientes/{cliente}      | clientes.update  | App\Http\Controllers\ClienteControlador@update  | web          |
|        | DELETE    | clientes/{cliente}      | clientes.destroy | App\Http\Controllers\ClienteControlador@destroy | web          |
|        | GET|HEAD  | clientes/{cliente}/edit | clientes.edit    | App\Http\Controllers\ClienteControlador@edit    | web          |
|        | GET|HEAD  | idade                   |                  | App\Http\Controllers\MeuControlador@getIdade    | web          |
|        | GET|HEAD  | multiplicar/{n1}/{n2}   |                  | App\Http\Controllers\MeuControlador@multiplicar | web          |
|        | GET|HEAD  | nome                    |                  | App\Http\Controllers\MeuControlador@getNome     | web          |
|        | GET|HEAD  | produtos                |                  | App\Http\Controllers\MeuControlador@produtos    | web          |
+--------+-----------+-------------------------+------------------+-------------------------------------------------+--------------+
*/
Route::resource('/clientes', 'ClienteControlador');