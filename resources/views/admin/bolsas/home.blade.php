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
                <th>Nome do Curso</th>
                <th>Número de Bolsas</th>
                <th>Status</th>
                <th>Inicio das Matriculas</th>
                <th>Final das Matriculas</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <td>{{ $curso->name }}</td>
                <td>{{ $curso->desconto->bolsas }}</td>
                <td>
                    @if ($curso->desconto->active == 0)
                        <?php echo 'Curso Encerrado'; ?>
                    @else
                        <?php echo 'Curso Ativo'; ?>
                    @endif
                <td>{{ $curso->desconto->inicio }}</td>
                <td>{{ $curso->desconto->final }}</td>
                </td>
                <td>
                    <a href="{{ route('visualizarBolsas', ['id' => $curso->id]) }}" class="btn btn-sm btn-success">
                        Vizualizar Curso</a>
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
