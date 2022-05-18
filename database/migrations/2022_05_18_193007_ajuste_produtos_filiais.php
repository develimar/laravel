<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando a tabela filias
        Schema::create('filiais', function (Blueprint $table){
           $table->id();
           $table->string('filial',30);
           $table->timestamps();
        });

        //criando a tabela produto filiais
        Schema::create('produto_filiais', function (Blueprint $table){
            $table->id();

            $table->decimal('preco_venda',8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->timestamps();


            //constraints
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');

        });

        //removendo colunas da tabela produtos
        Schema::table('produtos', function (Blueprint $table){
            $table->dropColumn('preco_venda');
            $table->dropColumn('estoque_minimo');
            $table->dropColumn('estoque_maximo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //adicionar campos da tabela produtos
        Schema::table('produtos', function (Blueprint $table){
            $table->decimal('preco_venda',8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
        });

        //remover constrant produtos
        Schema::table('produto_filiais', function (Blueprint $table){
            $table->dropForeign('produto_filiais_produto_id_foreign');
            $table->dropColumn('produto_id');
        });

        //remover constrant filiais
        Schema::table('produto_filiais', function (Blueprint $table){
            $table->dropForeign('produto_filiais_filial_id_foreign');
            $table->dropColumn('filial_id');
        });

        //removendo a tabela produto filiais
        Schema::dropIfExists('produto_filiais');

        //removendo a tabela filias
        Schema::dropIfExists('filiais');
    }
}
