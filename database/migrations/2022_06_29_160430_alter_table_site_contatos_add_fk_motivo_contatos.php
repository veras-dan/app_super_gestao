<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Adicionando a coluna motivo_contatos_id
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        // Atribuindo motivo_contatos para a nova coluna motivo_contatos_id
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        // Criando a FK
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
        });

        // Remover a coluna motivo_contato
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Criando a coluna e removendo a FK
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contato_motivo_contatos_id_foreign');

            //Desfazendo atribuição da nova coluna
            DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

            $table->dropColumn('motivo_contato_id');
        });
    }
}
