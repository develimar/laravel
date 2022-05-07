<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fonecedor',
                'status' => 'N',
                'cnpj' => '00.000.000/000-00'
            ],
            1 => [
                'nome' => 'Fonecedor',
                'status' => 'N',
            ]
        ];

        //condicao ? se verdadeiro : se falso ;
        //condicao ? se verdadeiro : (condicao ? se verdadeiro : se falso) ;

        $msg = isset($fornecedores[1]['cnpj'])? 'CNPJ Informado' : 'CNPJ não informado';



        return view('app.fornecedor.index', compact('fornecedores', 'msg' ));
    }
}
