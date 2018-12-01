@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('veiculo.update', $cliente->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">      
                <input name="_method" type="hidden" value="PUT">    
                    <div class="form-group">
                          <label for="placa"> placa </label>
                          <input  value="{{@$veiculo->placa}}"  class ="form-control" type="text" id="placa" name="placa" placeholder="Placa"/>
                   </div>
                   <div class="form-group"> 
                       <label for="modelo"> modelo </label>
                       <input  value="{{@$veiculo->modelo}}" class ="form-control" type="text" id="modelo" name="modelo" placeholder="Modelo"/>
                    </div>    
                        
                     <div class="form-group"> 
                         <label for="dataentrada"> Data entrada </label>
                        <input  value="{{@$veiculo->dataentrada}}" class ="form-control" type="text" id="dataentrada" placeholder="Dataentrada"/>
                    </div> 
                   
                    <div class="form-group"> 
                       <label for="datasaida"> Data Saida </label>
                       <input  value="{{@$veiculo->telefone}}" class ="form-control" type="text" id="datasaida" name="datasaida" placeholder="Datasaida"/>
                       </div>      
            
                   <div class="form-group">
                       <label for="status"> Status </label>
                        <input  value="{{@$cliente->bairro}}" class ="form-control" type="text" id="status" name="status" placeholder="Status"/>
                     </div>                   
                  
                   
                   
                     <! CRuD formulario -->
                   <div class="form-group">
                       <input class="btn btn-success" type="submit" value="Atualizar" />                       
       
                     </div>
                       
                   </form>  

</div>
@endsection
