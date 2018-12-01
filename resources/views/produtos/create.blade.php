@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('produtos.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">          
                    <div class="form-group">
                          <label for="nome"> Nome da Produtos </label>
                         <input class ="form-control" type="text" id="nome" name="nome" placeholder="Nome"/>
                   </div>
                   <div class="form-group"> 
                       <label for="endereco"> Valor das peças</label>
                       <input class ="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço"/>
                    </div>    
                   
                    <div class="form-group"> 
                       <label for="telefone"> Quantidade da peça</label>
                       <input class ="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone"/>
                       </div>  
                   
                   
                     <! CRuD formulario -->
                   <div class="form-group">
                       <input class="btn btn-success" type="submit" value="Salvar" />                       
       
                     </div>
                       
                   </form>  

</div>
@endsection
