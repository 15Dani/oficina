@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('fornecedores.update') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
                <input name="_method" type="hidden" value="PUT">         
                    <div class="form-group">
                          <label for="nome"> Nome Completo Fornecedor </label>
                          <input  class ="form-control" type="text" id="nome" name="nome" value="{{ $fornecedor->nome }}" placeholder="Nome"/>
                   </div>
                   <div class="form-group"> 
                       <label for="endereco"> Endereço Fornecedor </label>
                       <input class ="form-control" type="text" id="endereco" name="endereco" value="{{ $fornecedor->endereco }}"placeholder="Endereço"/>
                    </div>    
                    <div class="form-group">
                      <label for="numero"> Numero </label>
                      <input class ="form-control" type="int" id="numero" name="numero" value="{{ $fornecedor->numero }}" placeholder="Numero"/>
                   </div>  
                    <div class="form-group"> 
                       <label for="telefone"> Telefone </label>
                       <input class ="form-control" type="text" id="telefone" name="telefone"  value="{{ $fornecedor->telefone }}" placeholder="Telefone"/>
                       </div>                     
                   <div class="form-group">
                       <label for="bairro"> Bairro </label>
                        <input class ="form-control" type="text" id="bairro" name="bairro" value="{{ $fornecedor->bairro }}" placeholder="Bairro"/>
                     </div>                                    
                   <div class="form-group">
                    <label for="cep"> CEP </label>
                    <input class ="form-control" type="int" id="cep" name="cep" value="{{ $fornecedor->cep }}" placeholder="CEP"/>
                   </div>
                   
                   
                     <! CRuD formulario -->
                   <div class="form-group">
                       <input class="btn btn-success" type="submit" value="Salvar" />                       
       
                     </div>
                       
                   </form>  

</div>
@endsection
