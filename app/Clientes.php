<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $fillable = ['id','nome','endereco','telefone','bairro','numero','cep'];


}
