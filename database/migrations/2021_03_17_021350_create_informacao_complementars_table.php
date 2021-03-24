<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacaoComplementarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacao_complementars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('responsavelFamiliarId')->constrained('responsavel_familiars');

            $table->string('hMoradia')->nullable();
            $table->string('hOutroModeloMoradia')->nullable();
            $table->string('hAluguelValor')->nullable();
            $table->string('hTipoCasa')->nullable(); //Aqui vou colocar um SELECT sem name, quando selecionar o JS vai setar o valor em um campo hide, caso selecione OUTROS mostra o campo e habilita para escrever
            $table->string('hQtdQuarto')->nullable();
            $table->string('hQtdBanheiro')->nullable();
            $table->string('hQtdSala')->nullable();
            $table->string('hQtdCozinha')->nullable();
            $table->string('hOutrosComodos')->nullable();
            $table->string('hQtdOutros')->nullable();
            $table->string('hCobertura')->nullable(); //Aqui vou colocar um SELECT sem name, quando selecionar o JS vai setar o valor em um campo hide, caso selecione OUTROS mostra o campo e habilita para escrever
            $table->enum('hbanheiro', ['Interno', 'Externo'])->nullable();

            $table->enum('bRecebeBeneficioSocial', ['Sim', 'Não'])->nullable();
            $table->string('bProgramaBolsaFamilia')->nullable();
            $table->string('bProgramaBolsaFamiliaValor')->nullable();
            $table->string('bProgramaBPC')->nullable();
            $table->string('bProgramaBpcValor')->nullable();
            $table->string('bOutroPrograma')->nullable();
            $table->string('bOutroProgramaValor')->nullable();
            $table->string('bNomeBeneficiario')->nullable();

            $table->enum('cPossuiGestanteFamilia', ['Sim', 'Não'])->nullable();
            $table->string('cQuemPessoaGestante')->nullable();
            $table->string('cIdadeGestacional')->nullable();
            $table->string('cDataPrevistaParto')->nullable();
            $table->enum('cPossueDeficienteFamilia', ['Sim', 'Não'])->nullable();
            $table->string('cQuemPessoaDeficiente')->nullable();
            $table->string('cTipoDeficiencia')->nullable();
            $table->string('cNecessitaCuidadoPermanente')->nullable();
            $table->string('cNecessitaCuidadoPermanenteDeQuem')->nullable();
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
        Schema::dropIfExists('informacao_complementars');
    }
}
