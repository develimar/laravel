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
                'cnpj' => '00.000.000/000-00',
                'ddd' => '11',
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'Fonecedor 2 ',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '38',
                'telefone' => '00000-0359'
            ],
            2 => [
                'nome' => 'Fonecedor 3 ',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '31',
                'telefone' => '00000-0359'
            ]
        ];


        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
