<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use Illuminate\Http\Request;
use Validator;
class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('familia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('familia.criar-familia');
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
            'estadoCivil'   => 'required',
            'NIS'           => 'required',
            'CPF'           => 'required',
            'RG'            => 'required',
            'escolaridade'  => 'required',
            'telefone'      => 'required',
            'sexo'          => 'required',
            'renda'         => 'required',
            'origemRenda'   => 'required',
            'endereco'      => 'required',
            'numero'        => 'required',
            'bairro'        => 'required'
        ]);
        if ($valid->fails()) {
            return redirect()->back()
                ->withErrors($valid)
                ->withInput();
        }
        $cadastrado = Familia::create($request->all());
        return redirect()->route('f-criar-view-composicao', $cadastrado->id);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function composicaoFamiliar(Request $request, $id)
    {
        $dados = Familia::find($id);
        return view('familia.composicao-familiar')->with(['RF' => $dados]);
    }
}
