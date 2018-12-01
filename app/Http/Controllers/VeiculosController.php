<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculos;

class VeiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     * Aqui está todos os controles do veiculos que o mesmo vai funcionar
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//dd('aa');
        //Mostra o html do veiculo
        $veiculo = Veiculos::all();
        // dd($veiculo);
        return view('veiculos.index', compact('veiculos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar um novo veiculo
        return view('veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //direcionar o veiculo cliente para o redirect
        veiculos::create($request->all());
        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $veiculo = $veiculo->find($id);
        return view('veiculos.update', compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $veiculo = $veiculo->find($id);
        // Clientes::create($request->all());
        $veiculo->update($request->all());
        return redirect()->route('veiculos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Deletar o veiculo
        $veiculo = $veiculo->find($id);
        $veiculo->delete();
        return redirect()->route('veiculos.index');
    }
}
