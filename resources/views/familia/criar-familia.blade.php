@extends('includes.layout')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sucesso!</strong> {{ session('success') }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ route('f-cadastrar') }}" method="POST">
                @csrf
                <fieldset>
                    <legend class="text-uppercase text-success">Cadastrar Família</legend>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Responsável Familiar - RF</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite o nome do Responsável Familiar"
                                   class="form-control @error('nome') border-danger @enderror"
                                   value="{{ old('nome') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="nascimento" class="form-label">Data de Dascimento</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="Data de Nascimento"
                                   class="form-control @error('nascimento') border-danger @enderror"
                                   value="{{ old('nascimento') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="estadoCivil" class="form-label">Estado Civil</label>
                            <input type="text" name="estadoCivil" id="estadoCivil" placeholder="Informe o Estado Civil"
                                   class="form-control @error('estadoCivil') border-danger @enderror" value="{{ old('estadoCivil') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" name="NIS" id="nis" placeholder="Informe o NIS do Responsável Familiar"
                                   class="form-control @error('NIS') border-danger @enderror"
                                   value="{{ old('NIS') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="CPF" class="form-label">CPF</label>
                            <input type="text" name="CPF" id="CPF" placeholder="Informe o CPF do RF" value="{{ old('CPF') }}"
                                   class="form-control @error('CPF') border-danger @enderror">
                        </div>
                        <div class="col-md-6">
                            <label for="RG" class="form-label">RG</label>
                            <input type="text" name="RG" id="RG" value="{{ old('RG') }}" placeholder="Informe o RG do RF"
                                   class="form-control @error('RG') border-danger @enderror">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="escolaridade" class="form-label">Escolaridade</label>
                            <input type="text" name="escolaridade" id="escolaridade" placeholder="Escolaridade"
                                   class="form-control @error('escolaridade') border-danger @enderror" value="{{ old('escolaridade') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="telefone" class="form-label">Telefone (Celular, WhatsApp)</label>
                            <input type="text" name="telefone" id="telefone" placeholder="Telefone para contato"
                                   class="form-control @error('telefone') border-danger @enderror" value="{{ old('telefone') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-control @error('sexo') border-danger @enderror" name="sexo"
                                    aria-label="Selecione o Sexo" id="sexo">
                                <option value="" selected>Selecione o Sexo</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="renda" class="form-label">Renda</label>
                            <input type="text" name="renda" id="renda" placeholder="Informe a Renda do RF" value="{{ old('renda') }}"
                                   class="form-control @error('renda') border-danger @enderror">
                        </div>
                        <div class="col-md-3">
                            <label for="origemRenda" class="form-label">Origem da Renda</label>
                            <input type="text" name="origemRenda" id="origemRenda" value="{{ old('origemRenda') }}" placeholder="Informe a Origem da Renda"
                                   class="form-control @error('origemRenda') border-danger @enderror">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" id="endereco" placeholder="Endereço"
                                   class="form-control @error('endereco') border-danger @enderror" value="{{ old('endereco') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="numero">Número</label>
                            <input type="text" name="numero" id="tipo" placeholder="Número"
                                   class="form-control @error('numero') border-danger @enderror" value="{{ old('numero') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro" placeholder="Bairro"
                                   class="form-control @error('bairro') border-danger @enderror" value="{{ old('bairro') }}">
                        </div>
                    </div>

                    <div class="row text-hide">
                        <div class="col-md-6">
                            <label for="cep">CEP</label>
                            <input type="hidden" name="cep" class="form-control" value="68.523-000">
                        </div>
                        <div class="col-md-6">
                            <label for="cidade">Cidade</label>
                            <input type="hidden" name="cidade" class="form-control" value="Curionópolis">
                        </div>
                    </div>

                    <!--
                    <div class="row">
                        <div class="col-md-6">
                            <label for="sexo" class="form-label">Sexo*</label>
                            <select class="form-control @error('sexo') border-danger @enderror" name="sexo"
                                    aria-label="Selecione o Sexo" id="sexo">
                                <option value="" selected>Selecione o Sexo</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="complemento">Complemento</label>
                            <textarea name="complemento" id="complemento" cols="30" rows="3" value="{{ old('complemento') }}"
                                      class="form-control" name="complemento" placeholder="Complemento"></textarea>
                        </div>
                    </div>
                    -->

                    <div class="mb-3 mt-2">
                        <button type="submit" class="btn btn-primary">Cadastrar Dados</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection
