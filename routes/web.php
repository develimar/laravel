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

/* verbo http

get
post
put
patch
delete
options

*/


/*
Route::get('/', function () {
    return 'Ola seja bem vindo ao curso';
});
*/


Route::get('/', 'PrincipalController@Principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@Contato');


