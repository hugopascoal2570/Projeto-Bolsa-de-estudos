@extends('site.layout')

@section('title', $curso['name'])

@section('content')
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
    <!-- /bradcam_area  -->

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('cadastro') }}" method="POST">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" required
                                class="form-control @error('email') is-invalid @enderror">
                            <label class="form-label" for="form3Example3">Email </label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" required
                                class="form-control @error('email') is-invalid @enderror">
                            <label class="form-label" for="form3Example4">Senha</label>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Registre-se</button>

                        </div>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Você já tem uma conta? <a href="#!"
                                class="link-danger">Faça Login</a></p>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
