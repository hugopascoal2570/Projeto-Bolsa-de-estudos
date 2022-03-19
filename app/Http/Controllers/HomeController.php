<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\Course;
use App\Models\Nationality;
use App\Models\ScholarShip;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    private $repository;
    public function __construct(User $usuario)
    {

        $this->repository = $usuario;
    }

    public function login(Request $request)
    {
        return view('site.login');
    }
    public function loginAction(Request $request)
    {
        $creds = $request->only('email', 'password');
        if (Auth::attempt($creds)) {
            return redirect('/area');
        } else {
            $request->session('error', 'E-mail e/ou senha não conferem');
            return redirect('site/login');
        }
    }

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
        $nacionality = Nationality::all();
        return view('site.adicionar', [
            'curso' => $curso,
            'nacionality' => $nacionality
        ]);
    }

    public function registerAction(StoreUser $request)
    {

        $data = $request->all();
        //dd($data);

        if ($request->hasFile('photo') && $request->image->isValid()) {
            $imagePath = $request->image->store('fotos', 'public');
            $data['photo'] = $imagePath;
        }
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $dataNascimento = $data['birthdate'];
        $date = new DateTime($dataNascimento);
        $interval = $date->diff(new DateTime(date('Y-m-d')));


        if ($interval->format('%Y') < 18) {
            $curso = $this->repository->create($data);
            $curso->cursos()->sync($data['curso_id']);
            return view('site.addResponse', [
                'curso' => $curso
            ]);
        } else {
            $curso = $this->repository->create($data);
            $curso->cursos()->sync($data['curso_id']);
            return redirect('/');
        }
        return redirect('/');
    }
}
