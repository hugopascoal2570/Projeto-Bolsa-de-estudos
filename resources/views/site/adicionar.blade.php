@extends('layouts.app')
@extends('site.layout')
@extends('site.style.form')

@section('title', $curso['name'])

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>{{ $curso['name'] }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<form action="{{ route('cadastro') }}" method="POST" id="regForm" enctype="multipart/form-data">
    @csrf
    @include('site.includes.alerts')
    <h1>Faça seu cadastro</h1>

    <!-- One "tab" for each step in the form: -->
    <div class="card">

        <div class="card-body">
            <label>Email</label>
            <p><input type="email" name="email" placeholder="email" oninput="this.className = ''"></p>
            <label>Senha</label>
            <p><input type="password" name="password" placeholder="Senha" oninput="this.className = ''"></p>

            <input type="hidden" value="{{ $curso->id }}" name="curso_id">
            <label class="col-sm-2 col-from-label"></label>
            <input type="submit" value="cadastrar" class="btn btn-info">
        </div>
    </div>

</form>
