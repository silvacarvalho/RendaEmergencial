<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servidors', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 60);
            $table->string("sexo", 10);
            $table->string("nascimento", 10);
            $table->string("cpf", 15);
            $table->string("registroprofissional", 8);
            $table->string("rg", 10);
            $table->string("emissor", 5);
            $table->string("uf", 2);
            $table->string("emissao", 10);
            $table->string("escolaridade", 100);
            $table->string("profissao", 100);
            $table->string("titulo", 20);
            $table->string("zona", 5);
            $table->string("secao", 5);
            $table->string("email", 30);
            $table->string("fone", 15);
            $table->string("tipoendereco", 5);
            $table->string("endereco", 20);
            $table->string("numero", 5);
            $table->string("bairro", 50);
            $table->text("complemento")->nullable();

            $table->string("cargo", 50)->nullable();
            $table->string("tipocontrato", 20)->nullable();
            $table->string("iniciocontrato", 20)->nullable();
            $table->string("fimcontrato", 20)->nullable();

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
        Schema::dropIfExists('servidors');
    }
}
