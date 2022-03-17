@extends('layouts.app')
@extends('adminlte::page')

@section('title', 'Nova Bolsa de Estudos')

@section('content_header')
    <h1>Adicionar Nova Renda</h1>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function() {
            $('.phone').mask.mask('(00) 00000-0000');
            $('.cpf').mask('000.000.000-00', {
                reverse: true
            });
        });
    </script>
@endsection
@section('content')

    <div class="card">

        <div class="card-body">
            <form action="{{ route('scholarship.store') }}" method="POST" class="form-horizontal"
                enctype="multipart/form-data">
                @csrf
                @include('admin.includes.alerts')
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Selecione a sala</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="course_id" required>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label"></label>
                    <input type="submit" value="cadastrar" class="btn btn-success">
                </div>

            </form>
        </div>
    </div>

@endsection
