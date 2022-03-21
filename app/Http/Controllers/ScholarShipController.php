<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ScholarShip;
use App\Models\User;


class ScholarShipController extends Controller
{
    protected $repository;

    public function __construct(ScholarShip $scholarships)
    {
        $this->repository = $scholarships;
        $this->middleware(['can:admin-secretario']);
    }
    public function index()
    {
        $courses = Course::with('desconto')->paginate(10);

        return view('admin.bolsas.home', [
            'cursos' => $courses
        ]);
    }

    public function viewScholarship($id)
    {
        $data  = Course::with('estudantes')->with('desconto')->where('id', $id)->get();
        return view('admin.bolsas.view', [
            'data' => $data
        ]);
    }

    public function viewResponsible($id)
    {
        $responsaveis = User::where('id', $id)->with('responsaveis')->get();

        return view('admin.bolsas.viewResponsaveis', [
            'responsaveis' => $responsaveis
        ]);
    }
}
