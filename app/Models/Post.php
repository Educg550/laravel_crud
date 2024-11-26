<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Modelo que será usado para adicionar itens ao banco de dados (mesmas colunas definidas no migration)
    protected $fillable = [
        'title',
        'body',
    ];
}
