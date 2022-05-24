<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHome;
use App\Http\Requests\StoreUserCad;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Nationality;
use App\Models\ScholarShip;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    private $repository;
    public function __construct(User $usuario)
    {

        $this->repository = $usuario;
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
        $cursos = Course::with('desconto')->get();

        $CursoInvalido = [];
        foreach ($cursos as $curso) {
            $inicial = strtotime(date('Y-m-d H:i:s'));
            $final = strtotime($curso->desconto->final);
            if ($final > $inicial) {
                array_push($CursoInvalido, $curso);
            } else {

                DB::table('scholarships')
                    ->where('id', $curso['id'])
                    ->update(['active' => 0]);
            }
        }
        return view('site.cursos', [
            'cursos' => $CursoInvalido
        ]);
    }

    public function register($id)
    {
    }

    public function registerAction(StoreHome $request)
    {

        $data = $request->all();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $curso = $this->repository->create($data);

        return redirect('/painel');
    }

    public function cadastroEtapa2()
    {

        return view('admin.site.formulario');
    }

    public function EtapaDoisAction(Request $request)
    {

        $data = $request->all();

        if (!$usuario = $this->repository->find($data['id'])) {
        }
        if ($request->hasFile('image') && $request->image->isValid()) {
            $imagePath = $request->image->store('fotos', 'public');
            $data['image'] = $imagePath;
        }
        $data['first_access'] = 1;
        $usuario->update($data);

        //validação dos pais
        $dataNascimento = $data['birthdate'];
        $date = new DateTime($dataNascimento);
        $interval = $date->diff(new DateTime(date('Y-m-d')));

        if ($interval->format('%Y') < 18) {
            $usuario->update($data);
            return view('site.addResponse', [
                'usuario' => $usuario
            ]);
        } else {
            $usuario->update($data);
            return redirect('/painel');
        }

        return redirect('/painel');
    }
}
