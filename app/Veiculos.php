<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    // Aqui está as variaveis que temos em veiculo
    protected $fillable = ['modelo','placa','dataentrada','datadesaida','ano','status'];
}
