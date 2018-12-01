@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('funcionarios.update', $funcionario->id) }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
          <input name="_method" type="hidden" value="PUT">           
            <div class="form-group">
                <label for="nome"> Nome Completo do funcionario </label>
                <input  value="{{ $funcionario->nome }}"  class ="form-control" type="text" id="nome" name="nome" placeholder="Nome"/>
             </div>
             <div class="form-group"> 
                 <label for="endereco"> Endereço do funcionario </label>
                 <input class ="form-control" type="text" id="endereco" name="endereco" value="{{ $funcionario->endereco }}"  placeholder="Endereço"/>
              </div>    
             
              <div class="form-group"> 
                 <label for="telefone"> Telefone do funcionario</label>
                 <input class ="form-control" type="text" id="telefone" name="telefone" value="{{ $funcionario->telefone }}" placeholder="Telefone"/>
                 </div>  
             
             <div class="form-group">
                 <label for="bairro"> Bairro do funcionario </label>
                  <input class ="form-control" type="text" id="bairro" name="bairro" value="{{ $funcionario->bairro }}" placeholder="Bairro"/>
               </div>
             
             <div class="form-group">
                <label for="numero"> Numero do funcionario </label>
                <input class ="form-control" type="int" id="numero" name="numero" value="{{ $funcionario->numero }}" placeholder="Numero"/>
             </div>
             
             <div class="form-group">
              <label for="cep"> CEP  do funcionario</label>
              <input class ="form-control" type="int" id="cep" name="cep" value="{{ $funcionario->cep }}" placeholder="CEP"/>
             </div>
             
             
               <! CRuD formulario -->
             <div class="form-group">
                 <input class="btn btn-success" type="submit" value="Salvar" />                       
  
               </div>
                 
        </form>  

</div>
@endsection
