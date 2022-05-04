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

//Route::get('/contato/{nome}/{categoria_id}',
//    function(
//        string $nome = 'Elimar',
//        int $categoria_id = 1 // 1 - 'Informação'
//    ){
//   echo 'Estamos aqui '.$nome.' - '.$categoria_id;
//})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');


Route::get('/', 'PrincipalController@Principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@Contato');


