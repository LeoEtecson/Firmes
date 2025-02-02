<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    use HasFactory;

    protected $primaryKey = "idFilme";
    protected $fillable = [
            'nomeFilme',
            'duracaoFilme',
            'roteiristaFilme',
            'classidadeFilme',
    ];
};
