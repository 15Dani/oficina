<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    //

    protected $fillable = ['id','nome','endereco','telefone','bairro','numero','cep'];

}
