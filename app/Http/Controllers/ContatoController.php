<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $parametros = [
            'titulo' => 'Contato',
        ];

        //$contato = new SiteContato();
//        $contato->nome = $request['nome'];
//        $contato->telefone = $request['telefone'];
//        $contato->email = $request['email'];
//        $contato->motivo_contato = $request['motivo_contato'];
//        $contato->mensagem = $request->input('mensagem');
//        $contato->save();

        //$contato = new SiteContato();

        //if ($request->all()){
            //$contato->fill($request->all())->save();
            //$contato->create($request->all());
            //$contato->save();
        //}


        return view('site.contato', $parametros);
    }


    public function salvar(Request $request)
    {
        //validar os dados recebidos no request


        $request->validate([
            'nome' => 'required|min:3|max:40', //nomes com no minimo 3 caracteres
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:200'
        ]);
        //gravar no banco
        //SiteContato::create($request->all());
    }
}
