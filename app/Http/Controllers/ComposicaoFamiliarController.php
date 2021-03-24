<?php

namespace App\Http\Controllers;

use App\Models\ComposicaoFamiliar;
use App\Models\Familia;
use Illuminate\Http\Request;
use Validator;

class ComposicaoFamiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'nome'          => 'required',
            'nascimento'    => 'required',
            'sexo'          => 'required',
            'parentesco'    => 'required',
            'renda'         => 'required',
            'origemRenda'   => 'required'
        ]);
        if ($valid->fails()) {
            return redirect()->back()
                ->withErrors($valid)
                ->withInput();
        }
        $cadastrado = ComposicaoFamiliar::create($request->all());
        return redirect()->route('f-criar-view-composicao', $cadastrado->responsavelFamiliarId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComposicaoFamiliar  $composicaoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function show(ComposicaoFamiliar $composicaoFamiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComposicaoFamiliar  $composicaoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(ComposicaoFamiliar $composicaoFamiliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComposicaoFamiliar  $composicaoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComposicaoFamiliar $composicaoFamiliar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComposicaoFamiliar  $composicaoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComposicaoFamiliar $composicaoFamiliar)
    {
        //
    }
}
