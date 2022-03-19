@extends('layouts.app')
@extends('site.layout')
@extends('site.style.form')

@section('title', $curso['name'])
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


    <form action="{{ route('cadastro') }}" method="POST" id="regForm">
        @csrf
        @include('site.includes.alerts')
        <h1>Faça seu cadastro</h1>

        <!-- One "tab" for each step in the form: -->
        <div class="tab">Email:
            <p><input type="email" name="email" placeholder="email" oninput="this.className = ''"></p>
            <label>Senha</label>
            <p><input type="password" name="password" placeholder="Senha" oninput="this.className = ''"></p>
        </div>

        <div class="tab">Nome:
            <p><input type="text" name="name" placeholder="Nome" oninput="this.className = ''"></p>
            <label>Data de Nascimento</label>
            <p><input type="date" name="birthdate" required placeholder="00/00/0000" oninput="this.className = ''"></p>
        </div>

        <div class="tab">CPF:
            <p><input type="text" name="cpf" placeholder="000.000.000-00" data-mask="000.000.000-00"
                    oninput="this.className = ''"></p>
            <label>Telefone</label>
            <p><input type="text" name="phone" placeholder="(00) 00000-0000" data-mask="(00) 00000-0000"
                    oninput="this.className = ''"></p>
            <label>Nacionalidade</label>
            <select class="form-control" name="nacionalidade" required>
                @foreach ($nacionality as $nacionalidade)
                    <option value="{{ $nacionalidade->id }}">{{ $nacionalidade->description }}</option>
                @endforeach
            </select>


        </div>

        <div class="tab">Foto:
            <p><input type="file" name="photo" oninput="this.className = ''"></p>
        </div>
        <input type="hidden" name="curso_id" value="{{ $curso['id'] }}">

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" class="btn btn-info float-left" id="prevBtn" class="previus btn btn-info float-left"
                    onclick="nextPrev(-1)">Anterior</button>
                <button type="button" class="next btn btn-info float-right" id="nextBtn"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" onclick="nextPrev(1)">Próximo</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    </form>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";

            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }

            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Enviar";
            } else {
                document.getElementById("nextBtn").innerHTML = "Próximo";
            }

            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;

            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }

            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x,
                y,
                i,
                valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {

                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }

            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }

            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i,
                x = document.getElementsByClassName("step");

            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }

            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
