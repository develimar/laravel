<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instruções para criação dos registros
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'MG';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        //metodo create (atenção para o atributo fillabel da classe model)
        Fornecedor::create([
            'nome' => 'Fornecedor200',
            'site' => 'Fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'fornecedor200@gmail.com',
        ]);


        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor300',
            'site' => 'Fornecedor300.com.br',
            'uf' => 'RJ',
            'email' => 'fornecedor300@gmail.com',
        ]);
    }
}
