@extends('adminlte::page')
@section('title', 'Cursos')

@section('content_header')

    <h1>Lista de Bolsas de Estudos</h1>
    <a href="{{ route('scholarship.create') }}" class="btn btn-sm btn-success">Adicionar Bolsa de Estudos</a>
    <div class="container">
        <form action="{{ route('scholarship.index') }}" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Procurar">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
@endsection
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>

                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $data)

                <td>
                    <a href="" class="btn btn-sm btn-info">Editar</a>
                    <form class="d-inline" method="POST" action=""
                        onsubmit="return confirm('tem certeza que deseja excluir?')">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
                </tr>
        </tbody>
        @endforeach
        @endforeach
    </table>
    </div>
    </div>

@endsection
