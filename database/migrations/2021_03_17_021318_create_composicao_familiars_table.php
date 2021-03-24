<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposicaoFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composicao_familiars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('responsavelFamiliarId')->constrained('responsavel_familiars');
            $table->string('nome');
            $table->string('sexo')->nullable();
            $table->string('nascimento')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('renda')->nullable();
            $table->string('origemRenda')->nullable();
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
        Schema::dropIfExists('composicao_familiars');
    }
}
