<?php

namespace App\Http\Controllers;

use App\Models\Aluno_curso;
use App\Http\Requests\StoreAluno_cursoRequest;
use App\Http\Requests\UpdateAluno_cursoRequest;

class AlunoCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAluno_cursoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAluno_cursoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno_curso  $aluno_curso
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno_curso $aluno_curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno_curso  $aluno_curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno_curso $aluno_curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAluno_cursoRequest  $request
     * @param  \App\Models\Aluno_curso  $aluno_curso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAluno_cursoRequest $request, Aluno_curso $aluno_curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno_curso  $aluno_curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno_curso $aluno_curso)
    {
        //
    }
}
