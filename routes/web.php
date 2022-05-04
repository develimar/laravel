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


Route::get('/', 'PrincipalController@Principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@Contato')->name('site.contato');
Route::get('/login', function (){return 'Login';})->name('site.login');

// Agrupar as rotas /app

Route::prefix('/app')->group(function (){
    Route::get('/clientes', function (){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function (){return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function (){return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


//Rota de Fallback
Route::fallback(function (){
    echo 'A rota acessa não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a tora inicial';
});


