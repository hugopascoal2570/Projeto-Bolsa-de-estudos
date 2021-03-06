@extends('adminlte::page')
@section('title', 'Cursos')

@section('content_header')

    <h1>Lista de Secretários</h1>
    <a href="{{ route('secretarios.add') }}" class="btn btn-sm btn-success">Adicionar Curso</a>
    <div class="container">
        <form action="" method="get" class="sidebar-form">
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
                <th>Nome do Secretário(a)</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($secretarios as $dados)
                <td>{{ $dados->name }}</td>
                <td>{{ $dados->email }}</td>

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

    </table>
    </div>
    </div>

@endsection
