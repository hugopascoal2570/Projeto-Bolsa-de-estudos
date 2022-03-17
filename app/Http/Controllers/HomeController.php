<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ScholarShip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $cursos = ScholarShip::paginate(3);
        return view('site.home', [
            'cursos' => $cursos
        ]);
    }

    public function cursos()
    {
        $cursos = Course::with('desconto')->paginate(1);
        //dd($cursos);
        return view('site.cursos', [
            'cursos' => $cursos
        ]);
    }

    public function register($slug)
    {

        $curso = Course::where('slug', $slug)->first();
        //dd($curso);

        return view('site.adicionar', [
            'curso' => $curso
        ]);
    }

    public function registerAction(Request $request)
    {
        dd($request->all());
    }
}
