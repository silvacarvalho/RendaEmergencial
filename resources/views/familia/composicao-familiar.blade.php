@extends('includes.layout')

@push('css')
    <link href="/DataTables/Plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="/DataTables/Plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="/DataTables/Plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-composicao-tab" data-toggle="tab" href="#nav-composicao" role="tab" aria-controls="nav-composicao" aria-selected="true">Composição Familiar</a>
            <a class="nav-item nav-link" id="nav-habitacao-tab" data-toggle="tab" href="#nav-habitacao" role="tab" aria-controls="nav-complementar" aria-selected="false">Informações de Habitação</a>
            <a class="nav-item nav-link" id="nav-beneficios-tab" data-toggle="tab" href="#nav-beneficios" role="tab" aria-controls="nav-beneficios" aria-selected="false">Informações dos Benefícios</a>
            <a class="nav-item nav-link" id="nav-complementares-tab" data-toggle="tab" href="#nav-complementares" role="tab" aria-controls="nav-complementares" aria-selected="false">Informações Complementares</a>
        </div>
    </nav>
    <div class="tab-content mb-5" id="nav-tabContent">

        <!-- Composição Familiar   show active -->
        <div class="tab-pane fade show active" id="nav-composicao" role="tabpanel" aria-labelledby="nav-composicao-tab">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('composicao-cadastrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="responsavelFamiliarId" value="{{ $RF->id }}">
                        <fieldset>
                            <legend class="text-uppercase text-success">Cadastrar Membro da Família</legend>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
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
                                    <label for="sexo" class="form-label">Sexo</label>
                                    <select class="form-control @error('sexo') border-danger @enderror" name="sexo"
                                            aria-label="Selecione o Sexo" id="sexo">
                                        <option value="" selected>Selecione o Sexo</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="parentesco" class="form-label">Parentesco</label>
                                    <input type="text" name="parentesco" id="parentesco" placeholder="Informe o Parentesco com RF" value="{{ old('parentesco') }}"
                                           class="form-control @error('parentesco') border-danger @enderror">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="renda" class="form-label">Renda <span class="text-muted">Para R$ 50,00 digite 50</span></label>
                                    <input type="number" name="renda" id="renda" placeholder="Se não tem Renda digite o número  0" value="{{ old('renda') }}"
                                           class="form-control @error('renda') border-danger @enderror">
                                </div>
                                <div class="col-md-6">
                                    <label for="origemRenda" class="form-label">Origem da Renda</label>
                                    <input type="text" name="origemRenda" id="origemRenda" value="{{ old('origemRenda') }}" placeholder="Informe a Origem da Renda"
                                           class="form-control @error('origemRenda') border-danger @enderror">
                                </div>
                            </div>

                        <!--
                    <div class="row">
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
            <div class="row">
                <div class="col-md-12">
                    <table id="composicao" class="table table-hover table-condensed" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Data de Nascimento</th>
                            <th>Parentesco</th>
                            <th>Renda</th>
                            <th>Origem da Renda</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">01</td>
                            <td>{{ $RF->nome }}</td>
                            <td class="text-center">{{ $RF->sexo }}</td>
                            <td class="text-center">{{ date( 'd/m/Y' , strtotime($RF->nascimento)) }}</td>
                            <td class="text-center">O Próprio</td>
                            <td class="text-center">R$ {{ $RF->renda }}</td>
                            <td class="text-center">{{ $RF->origemRenda }}</td>
                        </tr>
                        <?php $cont = 2?>
                        @foreach($RF->composicao as $compo)
                            <tr>
                                <td class="text-center">{{ str_pad(($cont++) , 2 , '0' , STR_PAD_LEFT) }}</td>
                                <td>{{ $compo->nome }}</td>
                                <td class="text-center">{{ $compo->sexo }}</td>
                                <td class="text-center">{{ date( 'd/m/Y' , strtotime($compo->nascimento)) }}</td>
                                <td class="text-center">{{ $compo->parentesco }}</td>
                                <td class="text-center">R$ {{ $compo->renda }}</td>
                                <td class="text-center">{{ $compo->origemRenda }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Informações Habitação -->
        <div class="tab-pane fade" id="nav-habitacao" role="tabpanel" aria-labelledby="nav-habitacao-tab">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('habitacao-cadastrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="responsavelFamiliarId" value="{{ $RF->id }}">
                        <fieldset>
                            <legend class="text-uppercase text-success">Cadastrar Informações Habitacionais</legend>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="moradia">Modelo de Moradia</label>
                                    <select id="moradia" class="form-control @error('hMoradia') border-danger @enderror" required
                                            aria-label="Selecione a Moradia" name="hMoradia">
                                        <option value="" selected>Selecione uma Moradia</option>
                                        <option value="Própria">Própria</option>
                                        <option value="Alugada">Alugada</option>
                                        <option value="Cedida">Cedida</option>
                                        <option value="Agregado">Agregado</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                </div>

                                <div class="col-md-6 hMoradia d-none">
                                    <label for="hOutroModeloMoradia">Qual outro modelo?</label>
                                    <input type="text" id="hOutroModeloMoradia" name="hOutroModeloMoradia" class="form-control" placeholder="Qual outro modelo da Moradia">
                                </div>

                                <div class="col-md-6 hValor d-none">
                                    <label for="hAluguelValor">Valor do aluguel</label>
                                    <input type="text" name="hAluguelValor" class="form-control" placeholder="Informe o valor do aluguel">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="tipoCasa">Tipo de construção</label>
                                    <select id="tipoCasa" class="form-control @error('hTipoCasa') border-danger @enderror" required
                                            aria-label="Selecione um tipo">
                                        <option value="" selected>Selecione um tipo</option>
                                        <option value="Madeira">Madeira</option>
                                        <option value="Alvenaria">Alvenaria</option>
                                        <option value="Barro">Barro</option>
                                        <option value="Mista">Mista</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6 hTipoCasa d-none">
                                    <label for="hTipoCasa">Outro tipo de construção?</label>
                                    <input type="text" id="hTipoCasa" name="hTipoCasa" class="form-control" placeholder="Qual outro tipo">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="hQtdQuarto">Quantos quartos?</label>
                                    <input type="text" id="hQtdQuarto" name="hQtdQuarto" class="form-control" placeholder="Quantos quartos?">
                                </div>
                                <div class="col-md-4">
                                    <label for="hQtdBanheiro">Quantos banheiros?</label>
                                    <input type="text" id="hQtdBanheiro" name="hQtdBanheiro" class="form-control" placeholder="Quantos banheiros?">
                                </div>
                                <div class="col-md-4">
                                    <label for="hQtdSala">Quantas salas?</label>
                                    <input type="text" id="hQtdSala" name="hQtdSala" class="form-control" placeholder="Quantas salas?">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="hQtdCozinha">Quantas cozinhas?</label>
                                    <input type="text" id="hQtdCozinha" name="hQtdCozinha" class="form-control"
                                           placeholder="Quantas cozinhas?">
                                </div>
                                <div class="col-md-4">
                                    <label for="hOutrosComodos">Outros cômodo?</label>
                                    <input type="text" id="hOutrosComodos" name="hOutrosComodos" class="form-control"
                                           placeholder="Outros cômodo?">
                                </div>
                                <div class="col-md-4">
                                    <label for="hQtdOutros">Quantos outros cômodos?</label>
                                    <input type="text" id="hQtdOutros" name="hQtdOutros" class="form-control" placeholder="Quantos outros cômodos?">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="cobertura">Tipo de cobertura</label>
                                    <select id="cobertura" class="form-control @error('hCobertura') border-danger @enderror" required
                                            aria-label="Selecione um tipo de cobertura">
                                        <option value="" selected>Selecione um tipo de cobertura</option>
                                        <option value="Telha de Barro">Telha de Barro</option>
                                        <option value="Brasilit">Brasilit</option>
                                        <option value="Cavacos">Cavacos</option>
                                        <option value="Palha">Palha</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6 hCobertura d-none">
                                    <label for="hCobertura">Outro tipo de cobertura?</label>
                                    <input type="text" id="hCobertura" name="hCobertura" class="form-control" placeholder="Outro tipo de cobertura">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="banheiro">Qual a condição do banheiro?</label>
                                    <select id="banheiro" class="form-control @error('hCobertura') border-danger @enderror" required
                                            aria-label="Selecione um banheiro" name="hBanheiro">
                                        <option value="" selected>Selecione um banheiro</option>
                                        <option value="Interno">Interno</option>
                                        <option value="Externo">Externo</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" id="hSubmit" class="btn btn-primary mt-2">Cadastrar Informações</button>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <!-- Benefícios -->
        <div class="tab-pane fade" id="nav-beneficios" role="tabpanel" aria-labelledby="nav-beneficios-tab">

            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('beneficios-cadastrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="responsavelFamiliarId" value="{{ $RF->id }}">
                        <fieldset>
                            <legend class="text-uppercase text-success">Informações de Benefícios</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="recebeBeneficio">Recebe algum Benefício Social?</label>
                                    <select id="recebeBeneficio" class="form-control @error('bRecebeBeneficioSocial') border-danger @enderror"
                                            name="bRecebeBeneficioSocial" aria-label="Selecione um banheiro">
                                        <option value="Não" selected>Não</option>
                                        <option value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="content pt-4 fade" id="beneficioContent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check pt-1">
                                            <input type="checkbox" class="form-check-input" name="bProgramaBolsaFamilia" id="bProgramaBolsaFamilia">
                                            <label class="form-check-label" for="bProgramaBolsaFamilia">Bolsa Família</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 bProgramaBolsaFamiliaValor d-none">
                                        <div class="form-group">
                                            <input type="text" name="bProgramaBolsaFamiliaValor" class="form-control" id="bProgramaBolsaFamiliaValor" placeholder="Qual o valor do benefício?">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check pt-1">
                                            <input type="checkbox" class="form-check-input" name="bProgramaBPC" id="bProgramaBPC">
                                            <label class="form-check-label" for="bProgramaBPC">Programa BPC</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 bProgramaBpcValor d-none">
                                        <div class="form-group">
                                            <input type="text" name="bProgramaBpcValor" class="form-control" id="bProgramaBpcValor" placeholder="Qual o valor do benefício?">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check pt-1">
                                            <input type="checkbox" class="form-check-input" id="bOutroPrograma">
                                            <label class="form-check-label" for="bOutroPrograma">Outro Programa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bOutroProgramaValor d-none">
                                        <div class="form-group">
                                            <input type="text" name="bOutroPrograma" class="form-control" placeholder="Qual outro programa?">
                                        </div>
                                    </div>
                                    <div class="col-md-3 bOutroProgramaValor d-none">
                                        <div class="form-group">
                                            <input type="text" name="bOutroProgramaValor" class="form-control" id="bOutroProgramaValor" placeholder="Qual o valor do benefício?">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="bNomeBeneficiario">Nome do(s) beneficiário(s)?</label>

                                        <select id="bNomeBeneficiario" class="form-control @error('bNomeBeneficiario') border-danger @enderror"
                                                name="bNomeBeneficiario" multiple aria-label="Selecione uma opção">
                                            <option value="" selected>Selecione uma opção</option>
                                            @foreach($RF->composicao as $composicao)
                                                <option value="{{ $composicao->nome }}">{{ $composicao->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" id="hSubmit" class="btn btn-primary mt-2">Cadastrar Informações</button>

                    </form>
                </div>
            </div>
        </div>

        <!-- Informações Complementares -->
        <div class="tab-pane fade" id="nav-complementares" role="tabpanel" aria-labelledby="nav-complementares-tab">

            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('complementares-cadastrar') }}"  method="POST">
                        @csrf
                        <input type="hidden" name="responsavelFamiliarId" value="{{ $RF->id }}">
                        <fieldset>
                            <legend class="text-uppercase text-success">Informações Complementares</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="possueGestanteFamilia">Possui gestante na família?</label>
                                    <select id="possueGestanteFamilia" class="form-control @error('cPossuiGestanteFamilia') border-danger @enderror"
                                            name="cPossuiGestanteFamilia" aria-label="Selecione uma opção">
                                        <option value="Não" selected>Não</option>
                                        <option value="Sim">Sim</option>
                                    </select>
                                </div>
                                <div class="col-md-6 pessoaGestante fade">
                                    <label for="cQuemPessoaGestante">Quem é a pessoa Gestante?</label>
                                    <select id="cQuemPessoaGestante" class="form-control @error('cPossueGestante') border-danger @enderror"
                                            name="cQuemPessoaGestante" aria-label="Selecione uma opção">
                                        <option value="" selected>Selecione uma opção</option>
                                        @if($RF->sexo == "Feminino")
                                            <option value="{{ $RF->nome }}">{{ $RF->nome }}</option>
                                        @endif

                                        @foreach($RF->composicao as $composicao)
                                            @if($composicao->sexo == "Feminino")
                                                <option value="{{ $composicao->nome }}">{{ $composicao->nome }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pessoaGestante fade">
                                    <label for="cIdadeGestacional">Qual a idade gestacional? <span class="text-muted">em semanas Ex.: 01</span></label>
                                    <input type="text" name="cIdadeGestacional" id="cIdadeGestacional" placeholder="Qual a idade Gestacional?"
                                           class="form-control @error('cIdadeGestacional') border-danger @enderror">
                                </div>
                                <div class="col-md-6 pessoaGestante fade">
                                    <label for="cDPP">Data Prevista para o Parto?</label>
                                    <input type="date" name="cDataPrevistaParto" id="cDPP" placeholder="Data Prevista para o Parto?"
                                           class="form-control @error('cDataPrevistaParto') border-danger @enderror">
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-6">
                                    <label for="possueDeficienteFamilia">Possui pessoa com deficiência na família?</label>
                                    <select id="possueDeficienteFamilia" class="form-control @error('cPossueDeficienteFamilia') border-danger @enderror"
                                            name="cPossueDeficienteFamilia" aria-label="Selecione uma opção">
                                        <option value="Não" selected>Não</option>
                                        <option value="Sim">Sim</option>
                                    </select>
                                </div>
                                <div class="col-md-6 possueDeficienteFamilia fade">
                                    <label for="cQuemPessoaDeficiente">Quem é a pessoa com deficiência?</label>
                                    <select id="cQuemPessoaDeficiente" class="form-control @error('cPossueDeficienteFamilia') border-danger @enderror"
                                            name="cQuemPessoaDeficiente" aria-label="Selecione uma opção">
                                        <option value="" selected>Selecione uma opção</option>
                                        <option value="{{ $RF->nome }}">{{ $RF->nome }}</option>
                                        @foreach($RF->composicao as $composicao)
                                            <option value="{{ $composicao->nome }}">{{ $composicao->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 possueDeficienteFamilia fade">
                                    <label for="cTipoDeficiencia">Qual o tipo de deficiência?</label>
                                    <input type="text" name="cTipoDeficiencia" id="cTipoDeficiencia" placeholder="Qual o tipo de deficiência?"
                                           class="form-control @error('cTipoDeficiencia') border-danger @enderror">
                                </div>
                                <div class="col-md-3 possueDeficienteFamilia fade">
                                    <label for="cNecessidadePermanente">Cuidados permanentes?</label>
                                    <select id="cNecessidadePermanente" class="form-control @error('cNecessitaCuidadoPermanente') border-danger @enderror"
                                            name="cNecessitaCuidadoPermanente" aria-label="Selecione uma opção">
                                        <option value="Não" selected>Não</option>
                                        <option value="Sim">Sim</option>
                                    </select>
                                </div>
                                <div class="col-md-3 cuidadosPermanentes fade">
                                    <label for="cQuemCuidaPermanente">De quem?</label>
                                    <input type="text" name="cNecessitaCuidadoPermanenteDeQuem" id="cQuemCuidaPermanente" placeholder="Quem Cuida Permanente?"
                                           class="form-control @error('cNecessitaCuidadoPermanenteDeQuem') border-danger @enderror">
                                </div>
                            </div>

                            <button type="submit" id="hSubmit" class="btn btn-primary mt-2">Cadastrar Informações</button>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </div>




@endsection

@push('js')
    <script src="/DataTables/Plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/DataTables/Plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/DataTables/Plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/DataTables/Plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="/DataTables/Plugins/datatables.net-select/js/dataTables.select.min.js"></script>

    <script>
        $(document).ready(function(){
            /**
             * Script Para Composição Familiar
             */
            var table = $("#composicao").DataTable({
                "language": {
                    "url": "/DataTables/languages/pt_br.json"
                },
                "searching": false,
                "paging": false,
                responsive: true,
                columnDefs: [
                    { responsivePriority: 1},
                    { responsivePriority: 2},
                    { responsivePriority: 4},
                    { responsivePriority: 4},
                    { responsivePriority: 4},
                    { responsivePriority: 4},
                    { responsivePriority: 4}
                ]
            });

            /**
             * Script Para Informações Complementares
             */
            $("#moradia").on('change', function () {
                var moradia = $(this).val();
                if(moradia == "Outros"){
                    $("#hMoradia").val("");
                    $(".hMoradia").removeClass('d-none').addClass('d-block');
                    $(".hValor").removeClass('d-block').addClass('d-none');
                } else if(moradia == "Alugada") {
                    $("#hMoradia").val(moradia);
                    $(".hValor").removeClass('d-none').addClass('d-block');
                    $(".hMoradia").removeClass('d-block').addClass('d-none');
                } else{
                    $("#hMoradia").val(moradia);
                    $(".hMoradia").removeClass('d-block').addClass('d-none');
                    $(".hValor").removeClass('d-block').addClass('d-none');
                }
            });

            $("#tipoCasa").on('change', function () {
                var tipoCasa = $(this).val();
                if(tipoCasa == "Outro"){
                    $("#hTipoCasa").val("");
                    $(".hTipoCasa").removeClass('d-none').addClass('d-block');
                } else{
                    $("#hTipoCasa").val(tipoCasa);
                    $(".hTipoCasa").removeClass('d-block').addClass('d-none');
                }
            });

            $("#cobertura").on('change', function () {
                var cobertura = $(this).val();
                if(cobertura == "Outro"){
                    $("#hCobertura").val("");
                    $(".hCobertura").removeClass('d-none').addClass('d-block');
                } else{
                    $("#hCobertura").val(cobertura);
                    $(".hCobertura").removeClass('d-block').addClass('d-none');
                }
            });

            $("#recebeBeneficio").on('change', function () {
                var i = $(this).val();
                if(i == "Sim"){
                    $("#beneficioContent").addClass("show");
                } else{
                    $("#beneficioContent").removeClass("show");
                }
            });

            $("#bProgramaBolsaFamilia").on("change", function () {
                if($("#bProgramaBolsaFamilia").is(':checked')){
                    $(".bProgramaBolsaFamiliaValor").addClass("d-block").removeClass("d-none");
                } else {
                    $(".bProgramaBolsaFamiliaValor").addClass("d-none").removeClass("d-block");
                }
            });
            $("#bProgramaBPC").on("change", function () {
                if($("#bProgramaBPC").is(':checked')){
                    $(".bProgramaBpcValor").addClass("d-block").removeClass("d-none");
                } else {
                    $(".bProgramaBpcValor").addClass("d-none").removeClass("d-block");
                }
            });
            $("#bOutroPrograma").on("change", function () {
                if($("#bOutroPrograma").is(':checked')){
                    $(".bOutroProgramaValor").addClass("d-block").removeClass("d-none");
                } else {
                    $(".bOutroProgramaValor").addClass("d-none").removeClass("d-block");
                }
            });

            $("#possueGestanteFamilia").on("change", function () {
                var i = $(this).val();
                if(i == "Sim"){
                    $(".pessoaGestante").addClass("show");
                }else{
                    $(".pessoaGestante").removeClass("show");
                }
            });

            $("#possueDeficienteFamilia").on("change", function () {
                var i = $(this).val();
                if(i == "Sim"){
                    $(".possueDeficienteFamilia").addClass("show");
                }else{
                    $(".possueDeficienteFamilia").removeClass("show");
                }
            });
            $("#cNecessidadePermanente").on("change", function () {
                var i = $(this).val();
                if(i == "Sim"){
                    $(".cuidadosPermanentes").addClass("show");
                } else {
                    $(".cuidadosPermanentes").removeClass("show");
                }
            });
        });
    </script>
@endpush
