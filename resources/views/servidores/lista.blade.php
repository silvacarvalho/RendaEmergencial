@extends('includes.layout')

@section('css')

    <link href="/DataTables/Plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="/DataTables/Plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="/DataTables/Plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" />

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table id="servidores" class="responsive table-striped table-bordered nowrap">
                <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Escolaridade</th>
                    <th>Profissão</th>
                    <th>Cargo</th>
                    <th>Tipo de Contrato</th>
                    <th>Inicio do Contrato</th>
                    <th>Fim do Contrato</th>
                </tr>
                </thead>
                <tbody>
                @foreach($servidores as $servidor)
                    <tr>
                        <td></td>
                        <td><a href="/servidor/{{ $servidor->id }}/detalhes">{{$servidor->nome}}</a></td>
                        <td>{{$servidor->cpf}}</td>
                        <td>{{$servidor->escolaridade}}</td>
                        <td>{{$servidor->profissao}}</td>
                        <td>{{$servidor->cargo}}</td>
                        <td>{{$servidor->tipocontrato}}</td>
                        <td>{{$servidor->iniciocontrato}}</td>
                        <td>{{$servidor->fimcontrato}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="#" id="group" data-type="select" data-name="group" data-pk="1"
               data-value="5" data-source="" data-original-title="Select group">Admin</a>
        </div>
    </div>

@endsection

@section('js')
    <script src="/DataTables/Plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/DataTables/Plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script src="/DataTables/Plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/DataTables/Plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="/DataTables/Plugins/datatables.net-select/js/dataTables.select.min.js"></script>
    <script>
        $(document).ready(function(){

            var table = $("#servidores").DataTable({
                "language": {
                    "url": "/DataTables/languages/pt_br.json"
                },
                responsive: true,
                columnDefs: [
                    { responsivePriority: 1, targets: 0 },
                    { responsivePriority: 2, targets: 1 },
                    { responsivePriority: 4, targets: 2 },
                    { responsivePriority: 4, targets: 2 },
                    { responsivePriority: 4, targets: 2 },
                    { responsivePriority: 4, targets: 2 },
                    { responsivePriority: 4, targets: 2 },
                    { responsivePriority: 3, targets: 3 }
                ]
            });
        });
    </script>
@endsection
