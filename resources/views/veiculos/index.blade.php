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
                <a href="{{route('veiculos.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Novo veiculo</a>
                    <tr>
                        <th>modelo</th>
                        <th>placa</th>
                        <th>Data da entrada</th>
                        <th>Data da Saida</th>
                        <th>ano</th>
                        <th>status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($veiculos as $veiculo)
                    <tr>
                      <td>{{ $veiculo->modelo }}</td>
                      <td>{{ $veiculo->placa }}</td>
                      <td>{{ $veiculo->Modelo }}</td>
                      <td>{{ $veiculo->Datadaentrada }}</td>
                      <td>{{ $veiculo->DatadaSaida }}</td>
                      <td>{{ $veiculo->ano }}</td>
                      <td>{{ $veiculo->status }}</td>
                    <td class="text-center">
                    <form method="POST" action="{{route('veiculos.destroy', $veiculo->id)}}" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                          <a class='btn btn-info btn-xs' href="{{route('veiculos.edit', $veiculo->id)}}">
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
