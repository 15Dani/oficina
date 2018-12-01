<?php

namespace App\Http\Controllers;

use App\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedores::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fornecedores.create');

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
        Fornecedores::create($request->all());
        return redirect()->route('fornecedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Fornecedores $fornecedores)
    {
        //

        $fornecedor = $fornecedores->find($id);
        return view('fornecedores.update', compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */

    public function update($id, Request $request, Fornecedores $fornecedores)
    {
        $fornecedor = $fornecedores->find($id);
        // Clientes::create($request->all());
        $fornecedor->update($request->all());
        return redirect()->route('fornecedores.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Fornecedores $fornecedores)
    {
        //

        $fornecedor = $fornecedores->find($id);
        $fornecedor->delete();
        return redirect()->route('fornecedores.index');
    }
}
