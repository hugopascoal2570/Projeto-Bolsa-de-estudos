<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBag;
use App\Http\Requests\StoreCourse;
use App\Models\Course;
use App\Models\ScholarShip;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    protected $repository;

    public function __construct(Course $bags)
    {
        $this->repository = $bags;
    }


    public function index()
    {
        $courses = Course::paginate();
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

        $bags = $this->repository->create($data);

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
