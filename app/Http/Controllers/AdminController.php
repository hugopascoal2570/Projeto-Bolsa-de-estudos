<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'login',
            'loginAction',
            'registerAction',
            'register'
        ]]);
    }
    public function index()
    {
        $cursos = Course::with('desconto')->get();

        // dd($cursos);
        return view('admin.home', [
            'cursos' => $cursos
        ]);
        return view('admin.home');
    }

    public function login(Request $request)
    {
        return view('admin.login');
    }
    public function loginAction(Request $request)
    {
        $data = $request->only(['email', 'password']);

        $usuarios = User::where('first_access', 0)->where('email', $data['email'])->count();

        $dados = User::where('email', $data['email'])->get();


        if ($usuarios  === 0) {
            $creds = $request->only('email', 'password');
            if (Auth::attempt($creds)) {
                return redirect('/painel');
            } else {
                $request->session('error', 'E-mail e/ou senha não conferem');
                return redirect('/login');
            }
        } else {
            return view('/admin.site.formulario', [
                'dados' => $dados,
            ]);
        }
    }
    public function register(Request $request)
    {
        return view('admin.register', [
            'error' => $request->session()->get('error')
        ]);
    }

    public function RegisterAction(Request $request)
    {

        $creds = $request->only('email', 'password', 'name');

        $hasEmail = User::where('email', $creds['email'])->count();

        if ($hasEmail === 0) {
            $newUser = new User();
            $newUser->email = $creds['email'];
            $newUser->name = $creds['name'];
            $newUser->password = password_hash($creds['password'], PASSWORD_DEFAULT);
            $newUser->save();

            Auth::login($newUser);
            return redirect('/painel');
        } else {
            $request->session('error', 'Já existe um usuário com este e-mail');
            return redirect('admin/register');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/painel');
    }
}
