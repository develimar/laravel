<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        $parametros = [
          'titulo' => 'Home',
        ];
        echo 'Pagina Principal';
        var_dump($_POST);
        return view('site.principal', $parametros);
    }
}
