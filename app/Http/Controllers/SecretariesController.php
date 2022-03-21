<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SecretariesController extends Controller
{

    protected $repository;

    public function __construct(User $secretarios)
    {
        $this->repository = $secretarios;
        $this->middleware(['can:admin']);
    }

    public function index()
    {
        $secretarios = User::where('is_admin', 2)->get();

        return view('admin.secretarios.home', [
            'secretarios' => $secretarios
        ]);
    }

    public function add()
    {
        return view('admin.secretarios.add');
    }

    public function addAction(Request $request)
    {
        $data = $request->only(['name']);

        $data['is_admin'] = 2;
        $data['email'] = 'admin_' . $data['name'] . '@xpto.com.br';
        $password = 'secXpto';
        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        $curso = $this->repository->create($data);

        return redirect('painel/secretarios');
    }
}
