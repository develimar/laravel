<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();

            $table->string('unidade',5); //cm, mm, kg
            $table->string('descricao',30); //cm, mm, kg

            $table->timestamps();
        });

        //adicoinar o relaciomaneto com tabela produtos
        Schema::table('produtos', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id')->after('estoque_maximo');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //adicoinar o relaciomaneto com tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id')->after('produto_id');
            $table->foreign('unidade_id')->references('id')->on('produto_detalhes');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover constrant produtos detalhes
        Schema::table('produto_detalhes', function (Blueprint $table){
            //remover a fk
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            //remover a coluna unidade id
            $table->dropColumn('unidade_id');
        });

        //remover constrant produtos
        Schema::table('produtos', function (Blueprint $table){

            $table->dropForeign('produtos_unidade_id_foreign');

            $table->dropColumn('unidade_id');

        });

        Schema::dropIfExists('unidades');
    }
}
