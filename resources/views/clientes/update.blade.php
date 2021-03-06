@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">      
                <input name="_method" type="hidden" value="PUT">    
                    <div class="form-group">
                          <label for="nome"> Nome Completo </label>
                          <input  value="{{@$cliente->nome}}"  class ="form-control" type="text" id="nome" name="nome" placeholder="Nome"/>
                   </div>
                   <div class="form-group"> 
                       <label for="endereco"> Endereço </label>
                       <input  value="{{@$cliente->endereco}}" class ="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço"/>
                    </div>    
                        
                     <div class="form-group"> 
                         <label for="numero"> Endereço </label>
                        <input  value="{{@$cliente->numero}}" class ="form-control" type="text" id="numero" placeholder="Numero"/>
                    </div> 
                   
                    <div class="form-group"> 
                       <label for="telefone"> Telefone </label>
                       <input  value="{{@$cliente->telefone}}" class ="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone"/>
                       </div>                     
                   <div class="form-group">
                       <label for="bairro"> Bairro </label>
                        <input  value="{{@$cliente->bairro}}" class ="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro"/>
                     </div>                   
                   <div class="form-group">
                      <label for="numero"> Numero </label>
                      <input  value="{{@$cliente->numero}}" class ="form-control" type="int" id="numero" name="numero" placeholder="Numero"/>
                   </div>                   
                   <div class="form-group">
                    <label for="cep"> CEP </label>
                    <input  value="{{@$cliente->cep}}" class ="form-control" type="int" id="cep" name="cep" placeholder="CEP"/>
                   </div>
                   
                   
                     <! CRuD formulario -->
                   <div class="form-group">
                       <input class="btn btn-success" type="submit" value="Atualizar" />                       
       
                     </div>
                       
                   </form>  

</div>
@endsection
