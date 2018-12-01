<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    //
    protected $fillable = ['id','nome','endereco','telefone','bairro','numero','cep'];
}
