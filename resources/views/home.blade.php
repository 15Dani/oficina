@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<!-- Css do menu do sistema -->

  <head></head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  </head>
  <body>
  <br>  
  
<div class="container">
    {!! $MyNavBar->asDiv() !!}   
    <h2>Sistema de Gestão</h2>
     <br>
     <!-- chamado os menus com as telas -->
     <ul class="nav nav-tabs" role="tablist">
     <li class="nav-item">
     <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
     </li>
     <li class="nav-item">
     <a class="nav-link"  data-toggle="tab" href="#cliente">Cliente</a>
     </li>
     <li class="nav-item">
     <a class="nav-link" data-toggle="tab" href="#veiculo">Veiculo</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Funcionário">Funcionário</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Fornecedor">Fornecedor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Produto">Produto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Compra">Compra</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Pagamento">Pagamento </a>
    </li>
    </ul>
</div>
@endsection
