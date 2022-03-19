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

        //echo "chegou aqui";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $inicio = strtotime($data['inicio']);
        $final = strtotime($data['final']);

        if ($inicio > $final) {
            return redirect()->route('scholarship.create');
        }

        $scholarships = $this->repository->create($data);

        return redirect()->route('scholarship.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
