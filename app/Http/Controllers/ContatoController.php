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

        $contato = new SiteContato();

        //$contato->fill($request->all())->save();
        $contato->create($request->all());

        //$contato->save();

        return view('site.contato', $parametros);
    }
}
