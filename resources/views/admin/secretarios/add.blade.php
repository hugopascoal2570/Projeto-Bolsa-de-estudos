@extends('layouts.app')
@extends('adminlte::page')

@section('title', 'Nova Curso')

@section('content_header')
    <h1>Adicionando Curso</h1>
@endsection

@section('content')

    <div class="card">

        <div class="card-body">
            <form action="{{ route('secretatios.addAction') }}" method="POST" class="form-horizontal"
                enctype="multipart/form-data">
                @csrf
                @include('admin.includes.alerts')
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nome do secretário</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="name" required
                            class="form-control @error('name') is-invalid @enderror">
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
