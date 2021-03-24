<?php

namespace App\Http\Controllers;

use App\Models\Servidor;
use Illuminate\Http\Request;

class ServidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servidores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servidores.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'sexo' => 'required',
            'nascimento' => 'required',
            'cpf' => 'required',
            'registroprofissional' => 'required',
            'rg' => 'required',
            'emissor' => 'required',
            'uf' => 'required',
            'emissao' => 'required',
            'escolaridade' => 'required',
            'profissao' => 'required|max:20',
            'titulo' => 'required',
            'zona' => 'required',
            'secao' => 'required',
            'email' => 'required|email',
            'fone' => 'required',
            'tipoendereco' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required'
        ]);
        Servidor::create($request->all());
        return redirect()->back();
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


    public function lista()
    {
        $dados = Servidor::select(["id", "nome", "cpf", "escolaridade", "profissao", "cargo", "tipocontrato", "iniciocontrato", "fimcontrato"])->get();
        return view("servidores.lista")->with('servidores', $dados);
    }
}
