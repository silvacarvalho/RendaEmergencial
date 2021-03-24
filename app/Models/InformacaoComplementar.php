<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacaoComplementar extends Model
{
    use HasFactory;

    protected $fillable = [
        'responsavelFamiliarId',
        'hMoradia',
        'hOutroModeloMoradia',
        'hAluguelValor',
        'hTipoCasa',
        'hQtdQuarto',
        'hQtdBanheiro',
        'hQtdSala',
        'hQtdCozinha',
        'hOutrosComodos',
        'hQtdOutros',
        'hCobertura',
        'hbanheiro',
        'bRecebeBeneficioSocial',
        'bProgramaBolsaFamilia',
        'bProgramaBolsaFamiliaValor',
        'bProgramaBPC',
        'bProgramaBpcValor',
        'bOutroPrograma',
        'bOutroProgramaValor',
        'bNomeBeneficiario',
        'cPossuiGestanteFamilia',
        'cQuemPessoaGestante',
        'cIdadeGestacional',
        'cDataPrevistaParto',
        'cPossueDeficienteFamilia',
        'cQuemPessoaDeficiente',
        'cTipoDeficiencia',
        'cNecessitaCuidadoPermanente',
        'cNecessitaCuidadoPermanenteDeQuem'
    ];
}
