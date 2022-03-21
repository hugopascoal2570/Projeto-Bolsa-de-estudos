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

                <th>Estudantes</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $curso)
                @foreach ($curso->estudantes as $dados)
                    @if ($dados->name == '')
                        <td><?php echo 'Não informado pelo usuário'; ?></td>
                    @else
                        <td>{{ $dados->name }}</td>
                    @endif
                    @if ($dados->email == '')
                        <td><?php echo 'não informado pelo usuário'; ?></td>
                    @else
                        <td>{{ $dados->email }}</td>
                    @endif

                    <td><img src="{{ asset("storage/public/{$dados->image}") }}" width="100px"></td>

                    </td>
                    <td>

                        <a href="{{ route('visualizarResponsaveis', ['id' => $dados->id]) }}"
                            class="btn btn-sm btn-success">
                            Vizualizar Responsáveis</a>
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
