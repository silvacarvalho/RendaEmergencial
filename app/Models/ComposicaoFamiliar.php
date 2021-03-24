<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComposicaoFamiliar extends Model
{
    use HasFactory;

    protected $fillable = [
        "responsavelFamiliarId",
        "nome",
        "nascimento",
        "sexo",
        "parentesco",
        "renda",
        "origemRenda"
    ];
}
