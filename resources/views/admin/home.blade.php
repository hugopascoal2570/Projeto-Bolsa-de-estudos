@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Painel de Controle</h1>
@stop

@section('content')
    <p>Sejam Ben-vindos ao painel de controle.</p>

    @foreach ($cursos as $curso)
        @if ($curso->desconto->active == 1)
            <div class="card card-title col-lg-4">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ $curso->name }}
                    </h3>
                    <div class="card-tools">
                        <span class="badge badge-primary">Novo</span>
                    </div>
                </div>
                <div class="card-footer">
                    <li>total de bolsas com desconto: {{ $curso->desconto->bolsas }}</li>
                </div>
                <div class="card-footer">
                    <li>Início da matricula:{{ \Carbon\Carbon::parse($curso->inicio)->format('d/m/Y') }}</li>
                </div>
                <div class="card-footer">
                    <li>Final da matricula:{{ \Carbon\Carbon::parse($curso->final)->format('d/m/Y') }}</li>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/curso', ['id' => $curso->id]) }}" class="btn btn-block btn-info btn-lg">Essa
                        Bolsa é minha!</a>
                </div>
            </div>
            </div>
        @endif
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
