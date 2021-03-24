<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "sexo",
        "nascimento",
        "cpf",
        "registroprofissional",
        "rg",
        "emissor",
        "uf",
        "emissao",
        "escolaridade",
        "profissao",
        "titulo",
        "zona",
        "secao",
        "email",
        "fone",
        "tipoendereco",
        "endereco",
        "numero",
        "bairro",
        "cargo",
        "tipocontrato",
        "iniciocontrato",
        "fimcontrato"
    ];

}
