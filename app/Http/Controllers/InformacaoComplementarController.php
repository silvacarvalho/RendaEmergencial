<?php

namespace App\Http\Controllers;

use App\Models\InformacaoComplementar;
use Illuminate\Http\Request;

class InformacaoComplementarController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformacaoComplementar  $informacaoComplementar
     * @return \Illuminate\Http\Response
     */
    public function show(InformacaoComplementar $informacaoComplementar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformacaoComplementar  $informacaoComplementar
     * @return \Illuminate\Http\Response
     */
    public function edit(InformacaoComplementar $informacaoComplementar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformacaoComplementar  $informacaoComplementar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformacaoComplementar $informacaoComplementar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformacaoComplementar  $informacaoComplementar
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformacaoComplementar $informacaoComplementar)
    {
        //
    }

    public function habitacao( Request $request)
    {
        if(InformacaoComplementar::find($request->responsavelFamiliarId)){
            InformacaoComplementar::where('responsavelFamiliarId', $request->responsavelFamiliarId)->update($request->all());
        } else {
            InformacaoComplementar::create($request->except('_token'));
        }
        return redirect()->route('f-criar-view-composicao', $request->responsavelFamiliarId);
    }


    public function beneficios( Request $request)
    {
        if(InformacaoComplementar::find($request->responsavelFamiliarId)){
            InformacaoComplementar::where('responsavelFamiliarId', $request->responsavelFamiliarId)->update($request->except('_token'));
        } else {
            InformacaoComplementar::create($request->except('_token'));
        }
        return redirect()->route('f-criar-view-composicao', $request->responsavelFamiliarId);
    }

    public function complementares( Request $request)
    {
        if(InformacaoComplementar::find($request->responsavelFamiliarId)){
            InformacaoComplementar::where('responsavelFamiliarId', $request->responsavelFamiliarId)->update($request->except('_token'));
        } else {
            InformacaoComplementar::create($request->except('_token'));
        }
        return redirect()->route('f-index');
    }
}
