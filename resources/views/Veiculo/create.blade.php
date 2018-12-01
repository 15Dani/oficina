@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('Veiculo.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">          
                    <div class="form-group">
                          <label for="placa"> placa  </label>
                         <input class ="form-control" type="text" id="placa" name="placa" placeholder="placa"/>
                   </div>
                   <div class="form-group"> 
                       <label for="modelo"> modelo </label>
                       <input class ="form-control" type="text" id="modelo" name="modelo" placeholder="modelo"/>
                    </div> 
            
                    <div class="form-group"> 
                         <label for="numero"> Data entrada  </label>
                        <input class ="form-control" type="text" id="numero" placeholder="Numero"/>
                    </div>  
                   
                    <div class="form-group"> 
                       <label for="telefone"> Data de saida </label>
                       <input class ="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone"/>
                       </div>  
                   
                   <div class="form-group">
                       <label for="bairro"> Status do veiculos</label>
                        <input class ="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro"/>
                     </div>
                   
                  
                   
                   
                     <! CRuD formulario -->
                   <div class="form-group">
                       <input class="btn btn-success" type="submit" value="Salvar" />                       
       
                     </div>
                       
                   </form>  

</div>
@endsection
