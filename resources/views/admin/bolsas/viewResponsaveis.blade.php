@extends('adminlte::page')
@section('title', 'Cursos')

@section('content_header')

    <h1>Lista de Bolsas de Estudos</h1>

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
                <th>Nome do Responsável</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($responsaveis as $data)
                @foreach ($data->responsaveis as $dados)
                    <td>{{ $dados->name }}</td>
                    <td>{{ $dados->email }}</td>
                    <td>{{ $dados->phone }}</td>
                    <td><img src="{{ asset("storage/{$dados->image}") }}" width="100px"></td>
                    </td>

                    </tr>
        </tbody>
        @endforeach
        @endforeach
    </table>
    </div>
    </div>

@endsection
