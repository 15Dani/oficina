@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
     
        <form method="POST" action="{{ route('compras.update', $compras->id) }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
          <input name="_method" type="hidden" value="PUT">           
            <div class="form-group">
                <label for="nome"> Nome da compra </label>
                <input  value="{{ $compras->nome }}"  class ="form-control" type="text" id="nome" name="nome" placeholder="Nome"/>
             </div>
             <div class="form-group"> 
                 <label for="valor"> valor da compra</label>
                 <input class ="form-control" type="int" id="valor" name="valor" value="{{ $compras->valor }}"  placeholder="valor"/>
              </div>    
                        
             
               <! CRuD formulario -->
             <div class="form-group">
                 <input class="btn btn-success" type="submit" value="Salvar" />                       
  
               </div>
                 
        </form>  

</div>
@endsection
