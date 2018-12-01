@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('veiculos.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">          
                    <div class="form-group">
                          <label for="placa"> placa  </label>
                         <input class ="form-control" type="text" id="placa" name="placa" placeholder="Placa"/>
                   </div>
                   <div class="form-group"> 
                       <label for="modelo"> modelo </label>
                       <input class ="form-control" type="text" id="modelo" name="modelo" placeholder="Modelo"/>
                    </div> 
            
                    <div class="form-group"> 
                         <label for="dataentrada"> Data entrada  </label>
                        <input class ="form-control" type="text" id="dataentrada" placeholder="Dataentrada"/>
                    </div>  
                   
                    <div class="form-group"> 
                       <label for="Datasaida"> Data de saida </label>
                       <input class ="form-control" type="text" id="datadesaida" name="datadesaida" placeholder="Datadesaida"/>
                       </div>  
                   
                   <div class="form-group">
                       <label for="status"> status</label>
                        <input class ="form-control" type="text" id="status" name="status" placeholder="status"/>
                     </div>
                   
                     <div class="form-group">
                       <label for="status"> ano</label>
                        <input class ="form-control" type="text" id="status" name="status" placeholder="status"/>
                     </div>
                  
                   
                     <! CRuD formulario -->
                   <div class="form-group">
                       <input class="btn btn-success" type="submit" value="Salvar" />                       
       
                     </div>
                       
                   </form>  

</div>
@endsection
