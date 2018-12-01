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
            <a href="{{route('funcionarios.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Novo funcionarios</a>
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
            <tbody>
              @forelse ($funcionarios as $funcionario)
                <tr>
                  <td>{{  $funcionario->nome  }}</td>
                  <td>{{  $funcionario->endereco  }}</td>
                  <td>{{  $funcionario->numero  }}</td>
                  <td>{{  $funcionario->bairro  }}</td>
                  <td>{{  $funcionario->cep }}</td>
                  <td>{{  $funcionario->telefone  }}</td>
                <td class="text-center">
                <form method="POST" action="{{route('funcionarios.destroy', $funcionario->id)}}" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                      <a class='btn btn-info btn-xs' href="{{route('funcionarios.edit', $funcionario->id)}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                      </a>                    
                      <button style="float:right" type='submit' class='btn btn-danger'><span class="glyphicon glyphicon-remove"></span> Del</button>                                            
                      </form>
                </td>
                </tr>                    
                  
              @empty
                  <h2>Não existem registros</h2>
              @endforelse

            </tbody>
            </table>
    
 
    </div>
</div>
@endsection
