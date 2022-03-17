<?php

namespace App\Http\Controllers;

use App\Models\ScholarShip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = ScholarShip::paginate(3);
        return view('site.home', [
            'cursos' => $cursos
        ]);
    }

    public function contato()
    {
        $cursos = ScholarShip::paginate(3);
        return view('site.cursos', [
            'cursos' => $cursos
        ]);
    }
}
