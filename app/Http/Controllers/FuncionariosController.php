<?php

namespace App\Http\Controllers;

use App\Funcionarios;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $funcionarios = Funcionarios::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('funcionarios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Funcionarios::create($request->all());
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionarios $funcionarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Funcionarios $funcionarios)
    {
        //
        $funcionario = $funcionarios->find($id);
        return view('funcionarios.update', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Funcionarios $funcionarios)
    {
        //
        $funcionario = $funcionarios->find($id);
        // Clientes::create($request->all());
        $funcionario->update($request->all());
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Funcionarios $funcionarios)
    {
        //
        $funcionario = $funcionarios->find($id);
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
