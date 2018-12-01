@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head></head>
  <meta charset="utf-8">
   
<div class="container">
    <div class="row ">
    {{-- BUSCA --}}
    <div class="col-8">
    <a href="{{route('compras.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Novo produtos</a>
</div>
<div class="col-4">
<form class="form-inline" action="">
              <input value="{{@$request->busca}}" class="form-control mr-sm-2" name="busca" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Pesquisar</button>
              </form>
</div>
</div>
{{-- BUSCA FIM --}}
      <div class="row ">
        <table class="table table-striped custab">
            <thead>
                  <tr>
                    <th>Nome</th>
                    <th>valor</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
              @forelse ($compras as $compras)
                <tr>
                  <td>{{  $compras->nome  }}</td>
                  <td>{{  $compras->valor  }}</td>
                <td class="text-center">
                <form method="POST" action="{{route('compras.destroy', $compras->id)}}" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                      <a class='btn btn-info btn-xs' href="{{route('compras.edit', $compras->id)}}">
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
