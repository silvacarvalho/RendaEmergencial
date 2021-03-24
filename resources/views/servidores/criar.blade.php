@extends('includes.layout')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('s-cadastrar') }}" method="POST">
                @csrf
                <fieldset>
                    <legend class="text-uppercase text-success">Cadastro de Servidores</legend>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nome" class="form-label">Nome Completo*</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo"
                                   class="form-control @error('nome') border-danger @enderror"
                                   value="{{ old('nome') }}">
                        </div>
                    </div>
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
                        <div class="col-md-6">
                            <label for="nascimento" class="form-label">Data de Dascimento*</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="Data de Nascimento"
                                   class="form-control @error('nascimento') border-danger @enderror"
                                   value="{{ old('nascimento') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="cpf" class="form-label">CPF*</label>
                            <input type="text" name="cpf" id="cpf" placeholder="CPF" value="{{ old('cpf') }}"
                                   class="form-control @error('cpf') border-danger @enderror">
                        </div>
                        <div class="col-md-6">
                            <label for="registroprofissional" class="form-label">Registro Profissional <span class="text-muted font-weight-light"> - Caso possua</span>*</label>
                            <input type="text" name="registroprofissional" id="registroprofissional" class="form-control @error('registroprofissional') border-danger @enderror"
                                   value="{{ old('registroprofissional') }}" placeholder="Número do Registro Profissional">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="rg" class="form-label">RG*</label>
                            <input type="text" name="rg" id="rg" value="{{ old('rg') }}" placeholder="RG"
                                   class="form-control @error('rg') border-danger @enderror">
                        </div>
                        <div class="col-md-6">
                            <label for="emissor" class="form-label">Órgão Emissor*</label>
                            <input type="text" name="emissor" id="emissor" value="{{ old('emissor') }}"
                                   class="form-control @error('emissor') border-danger @enderror" placeholder="Órgão Emissor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="uf" class="form-label">UF*</label>
                            <select name="uf" id="uf" aria-label="Selecione o Estado"
                                    class="form-control @error('uf') border-danger @enderror">
                                <option selected value="">Selecione o Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="emissao" class="form-label">Data de Emissão*</label>
                            <input type="date" name="emissao" id="emissao" value="{{ old('emissao') }}"
                                   class="form-control @error('emissao') border-danger @enderror" placeholder="Data de Emissão">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="escolaridade" class="form-label">Escolaridade*</label>
                            <select name="escolaridade" id="escolaridade" aria-label="Escolaridade"
                                    class="form-control @error('escolaridade') border-danger @enderror" value="{{ old('escolaridade') }}" >
                                <option selected value="">Selecione a sua escolaridade</option>
                                <option value="Fundamental -Incompleto">Fundamental -Incompleto</option>
                                <option value="Fundamental -Completo">Fundamental -Completo</option>
                                <option value="Médio -Incompleto">Médio -Incompleto</option>
                                <option value="Médio -Completo">Médio -Completo</option>
                                <option value="Superior -Incompleto">Superior -Incompleto</option>
                                <option value="Superior -Completo">Superior -Completo</option>
                                <option value="Pós-graduação (Strictosensu, nível mestrado) -Incompleto">Pós-graduação (Strictosensu, nível mestrado) -Incompleto</option>
                                <option value="Pós-graduação (Strictosensu, nível mestrado) -Completo">Pós-graduação (Strictosensu, nível mestrado) -Completo</option>
                                <option value="Pós-graduação (Strictosensu, nível doutor) -Incompleto">Pós-graduação (Strictosensu, nível doutor) -Incompleto</option>
                                <option value="Pós-graduação (Strictosensu, nível doutor) -Completo">Pós-graduação (Strictosensu, nível doutor) -Completo</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="profissao" class="form-label">Profissão*</label>
                            <input type="text" name="profissao" id="profissao" placeholder="Informe sua profissão"
                                   class="form-control @error('profissao') border-danger @enderror" value="{{ old('profissao') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="titulo" class="form-label">Titulo de Eleitor*</label>
                            <input type="text" name="titulo" id="titulo" placeholder="Titulo de Eleitor"
                                   class="form-control @error('titulo') border-danger @enderror" value="{{ old('titulo') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="zona" class="form-label">Zona*</label>
                            <input type="text" name="zona" id="zona" placeholder="Zona"
                                   class="form-control @error('zona') border-danger @enderror" value="{{ old('zona') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="secao" class="form-label">Seção*</label>
                            <input type="text" name="secao" id="secao" placeholder="Seção"
                                   class="form-control @error('secao') border-danger @enderror" value="{{ old('secao') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email" class="form-label">E-Mail*</label>
                            <input type="email" name="email" id="email" placeholder="E-Mail"
                                   class="form-control @error('email') border-danger @enderror" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="fone" class="form-label">Telefone (Celular, WhatsApp)*</label>
                            <input type="text" name="fone" id="fone" placeholder="Telefone para contato"
                                   class="form-control @error('fone') border-danger @enderror" value="{{ old('fone') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="tipoendereco">Tipo de endereço (Avenida, Rua, Travessa)*</label>
                            <input type="text" name="tipoendereco" id="tipoendereco" placeholder="Tipo de Endereço"
                                   class="form-control @error('tipoendereco') border-danger @enderror"
                                   value="{{ old('tipoendereco') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="endereco">Endereço*</label>
                            <input type="text" name="endereco" id="endereco" placeholder="Endereço"
                                   class="form-control @error('endereco') border-danger @enderror" value="{{ old('endereco') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="numero">Número*</label>
                            <input type="text" name="numero" id="tipo" placeholder="Número"
                                   class="form-control @error('numero') border-danger @enderror" value="{{ old('numero') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="bairro">Bairro*</label>
                            @error('bairro')
                            <i class="fab fa-exclamation-circle border-danger"></i>
                            @enderror
                            <input type="text" name="bairro" id="bairro" placeholder="Bairro"
                                   class="form-control @error('bairro') border-danger @enderror" value="{{ old('bairro') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="complemento">Complemento</label>
                            <textarea name="complemento" id="complemento" cols="30" rows="3" value="{{ old('complemento') }}"
                                      class="form-control" name="complemento" placeholder="Complemento"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <button type="submit" class="btn btn-primary">Cadastrar Dados</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection
