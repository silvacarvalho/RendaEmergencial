<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

    protected $table = "responsavel_familiars";

    protected $fillable = [
        "nome",
        "nascimento",
        "estadoCivil",
        "NIS",
        "CPF",
        "RG",
        "escolaridade",
        "telefone",
        "sexo",
        "renda",
        "origemRenda",
        "endereco",
        "numero",
        "bairro",
        "cep",
        "cidade"
    ];

    /**
     * Retorna toda a composição familiar do Responsável pela Família
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function composicao()
    {

        return $this->hasMany(ComposicaoFamiliar::class, 'responsavelFamiliarId', '', 'id');
    }

    /**
     * Retorna todas as informações complementares do Responsável pela Família
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complementar()
    {
        return $this->hasMany(InformacaoComplementar::class, 'responsavelFamiliarId', 'id');
    }
}
