@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
    <div class="row ">
        <table class="table table-striped custab">
            <thead>
            <a href="{{route('clientes.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Novo Cliente</a>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Numero</th>
                    <th>Bairro ID</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
                    <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Numero</th>
                    <th>Bairro ID</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Products</td>
                        <td>Main Products</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Blogs</td>
                        <td>Parent Blogs</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
            </table>
    
 
    </div>
</div>
@endsection
