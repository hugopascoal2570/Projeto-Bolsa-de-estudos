@extends('layouts.app')
@extends('adminlte::page')

@section('title', 'Nova Curso')

@section('content_header')
    <h1>Adicionar Curso</h1>
@endsection

@section('content')

    <div class="card">

        <div class="card-body">
            <form action="{{ route('cursos.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @include('admin.includes.alerts')
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nome do Curso</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="name" class="form-control @error('nome') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Número de bolsas</label>
                    <div class="col-sm-2">
                        <input type="text" name="bolsas" id="bolsas" placeholder="por padrão são 5 bolsas"
                            class="form-control @error('bolsas') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Início da Promoção</label>
                    <div class="col-sm-2">
                        <input type="date" name="inicio" id="inicio"
                            class="form-control @error('inicio') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Final da Prmoção</label>
                    <div class="col-sm-2">
                        <input type="date" name="final" id="final"
                            class="form-control @error('final') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label"></label>
                    <input type="submit" value="cadastrar" class="btn btn-success">
                </div>

            </form>
        </div>
    </div>

@endsection
