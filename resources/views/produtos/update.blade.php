@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('produtos.update', $produtos->id) }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
          <input name="_method" type="hidden" value="PUT">           
            <div class="form-group">
                <label for="nome"> Nome do produto </label>
                <input  value="{{ $produtos->nome }}"  class ="form-control" type="text" id="nome" name="nome" placeholder="Nome"/>
             </div>
             <div class="form-group"> 
                 <label for="valor"> valor das  peças </label>
                 <input class ="form-control" type="int" id="valor" name="valor" value="{{ $produtos->valor }}"  placeholder="valor"/>
              </div>    
             
              <div class="form-group"> 
                 <label for="quantidade"> Quantidade de Peças</label>
                 <input class ="form-control" type="int" id="quantidade" name="quantidade" value="{{ $produtos->quantidade }}" placeholder="quantidade"/>
                 </div>             
             
               <! CRuD formulario -->
             <div class="form-group">
                 <input class="btn btn-success" type="submit" value="Salvar" />                       
  
               </div>
                 
        </form>  

</div>
@endsection
