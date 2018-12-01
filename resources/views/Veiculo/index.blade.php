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
                <a href="{{route('Veiculo.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Novo Veiculo</a>
                    <tr>
                        <th>Placa</th>
                        <th>Ano</th>
                        <th>Modelo</th>
                        <th>Data da entrada</th>
                        <th>Data da Saida</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse ($Veiculo as $itens)
                    <tr>
                      <td>{{$itens->Placa}}</td>
                      <td>{{$itens->Ano}}</td>
                      <td>{{$itens->Modelo}}</td>
                      <td>{{$itens->Data da entrada}}</td>
                      <td>{{$itens->Data da Saida}}</td>
                      <td>{{$itens->Status}}</td>
                    <td class="text-center">
                    <form method="POST" action="{{route('Veiculo.destroy', $itens->id)}}" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                          <a class='btn btn-info btn-xs' href="{{route('fornecedores.edit', $itens->id)}}">
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
