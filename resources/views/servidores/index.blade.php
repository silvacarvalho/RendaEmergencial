@extends('includes.layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('s-criar-view') }}" class="text-decoration-none">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center">Servidor</div>
                    <div class="card-body text-primary text-center">
                        <h5 class="card-title">Novo Servidor</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
