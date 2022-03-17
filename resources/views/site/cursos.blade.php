@extends('site.layout')


@section('title', 'Cursos')

@section('content')
    @foreach ($cursos as $curso)
        <!-- prising_area  -->
        <div class="prising_area">
            <div class="container">

                <div class="row no-gutters align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="single_prising text-center wow fadeInUp">
                            <div class="prising_header d-flex justify-content-between blue_header">
                                <h3>{{ $curso->name }}</h3>
                                <td>{{ $cursos->desconto->bolsas }}</td>
                            </div>
                            <ul>
                                <li>total de bolsas com desconto: {{ $curso->bolsas }}</li>
                                <li>Início da matricula:
                                    {{ \Carbon\Carbon::parse($curso->inicio)->format('d/m/Y') }}</li>
                                <li>Final da matricula:
                                    {{ \Carbon\Carbon::parse($curso->final)->format('d/m/Y') }}</li>
                            </ul>
                            <div class="prising_bottom">
                                <a href="#" class="get_now prising_btn">Essa Bolsa é minha!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{ $cursos->links() }}
@endsection
