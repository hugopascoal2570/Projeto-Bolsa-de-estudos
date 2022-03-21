<?php

namespace App\Http\Controllers;


use App\Models\Tutor;
use DateTime;
use Illuminate\Http\Request;

class ResponsibleController extends Controller
{

    private $repository;
    public function __construct(Tutor $responsavel)
    {

        $this->repository = $responsavel;
    }


    public function etapaDois()
    {
    }

    public function etapaDoisAction(Request $request)
    {
        $data = $request->all();
        //dd($data);

        if ($request->hasFile('image') && $request->image->isValid()) {
            $imagePath = $request->image->store('fotos', 'public');
            $data['image'] = $imagePath;
        }

        $dataNascimento = $data['birthdate'];
        $date = new DateTime($dataNascimento);
        $interval = $date->diff(new DateTime(date('Y-m-d')));

        if ($interval->format('%Y') < 18) {
            return view(
                'site.addResponse'
            );
        } else {
            $curso = $this->repository->create($data);
            // dd($curso);
            $curso->estudantes()->sync($data['user_id']);

            return redirect('/painel');
        }
        return redirect('/painel');
    }
}
