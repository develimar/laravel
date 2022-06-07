<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos()
    {
        $parametros = [
            'titulo' => 'Sobre Nós',
        ];
        return view('site.sobre-nos', $parametros);
    }
}
