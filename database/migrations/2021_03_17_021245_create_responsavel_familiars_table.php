<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsavelFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsavel_familiars', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nascimento');
            $table->string('NIS')->nullable();
            $table->string('CPF')->nullable();
            $table->string('RG')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('telefone')->nullable();
            $table->string('sexo')->nullable();
            $table->string('renda')->nullable();
            $table->string('origemRenda')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsavel_familiars');
    }
}
