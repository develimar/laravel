<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $parametros = [
            'titulo' => 'Contato',
        ];


//        $contato = new SiteContato();
//        $contato->nome = $request->input('nome');
//        $contato->telefone = $request->input('telefone');
//        $contato->email = $request->input('email');
//        $contato->motivo_contato = $request->input('motivo_contato');
//        $contato->mensagem = $request->input('mensagem');
//        $contato->save();

//        $contato = new SiteContato();
//        $contato->create($request->all());
//        print_r($contato->getAttributes());
        //$contato->save();


        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];

        return view('site.contato', ['titulo'=>$parametros['titulo'],'motivo_contatos'=>$motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //realizar a validação dos dados do formularios recebidos no request
        $request->validate([
            'nome'=> 'required | min:3 | max:40',
            'telefone'=> 'required',
            'email'=> 'required',
            'motivo_contato'=> 'required',
            'mensagem'=> 'required | max:2000'
        ]);

        //SiteContato::create($request->all());
    }
}
