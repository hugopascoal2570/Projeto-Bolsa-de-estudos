<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\StoreCourse;
use App\Models\Course;
use App\Models\ScholarShip;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    protected $repository;

    public function __construct(Course $curso, ScholarShip $bolsa)
    {
        $this->repository = $curso;
        $this->repositoryTwo = $bolsa;
    }


    public function index()
    {
        $courses = Course::paginate(3);
        return view('admin.cursos.home', [
            'courses' => $courses
        ]);
    }


    public function create()
    {
        return view('admin.cursos.add');
    }


    public function store(StoreCourse $request)
    {

        $data = $request->all('name');
        $data['slug'] = Str::slug($data['name']);

        $data = $this->repository->create($data);


        $dados = $request->all();

        $inicio = strtotime($data['inicio']);
        $final = strtotime($data['final']);
        //validação da hora
        if ($inicio > $final) {
            return redirect()->route('scholarships.create');
        } else {

            $scholarship = new ScholarShip();
            if ($dados['bolsas'] ==  null) {
                $dados['bolsas'] = 5;
            }
            $scholarship->course_id = $data['id'];
            $scholarship->inicio = $dados['inicio'];
            $scholarship->bolsas = $dados['bolsas'];
            $scholarship->final = $dados['final'];

            $scholarship->save();
        }


        return redirect()->route('cursos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
