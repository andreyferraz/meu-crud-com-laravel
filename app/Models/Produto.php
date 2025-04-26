<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao']; // Campos que podem ser preenchidos em massa
    protected $table = 'produtos'; // Nome da tabela no banco de dados
    public $timestamps = true; // Habilita os timestamps (created_at e updated_at)
}
