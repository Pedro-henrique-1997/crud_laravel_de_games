<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGames extends Model
{
    protected $table;

    protected $fillable = ['nome', 'tipo', 'versao', 'ano'];
}
