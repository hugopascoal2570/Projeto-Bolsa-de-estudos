<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ScholarShip;
use Illuminate\Http\Request;

class ScholarShipController extends Controller
{
    protected $repository;

    public function __construct(ScholarShip $scholarships)
    {
        $this->repository = $scholarships;
        $this->middleware(['can:admin']);
    }
    public function index()
    {
        $courses = Course::with('desconto')->get();

        return view('admin.bolsas.home', [
            'cursos' => $courses
        ]);
    }

    public function viewScholarship($id)
    {
        $data  = Course::with('cursos')->with('responsaveis')->with('desconto')->where('id', $id)->get();
        dd($data);
        return view('admin.bolsas.view', [
            'data' => $data
        ]);
    }
}
