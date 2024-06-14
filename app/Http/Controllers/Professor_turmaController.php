<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor_turma;
use App\Models\Professor;
use App\Models\Turma;


class Professor_turmaController extends Controller
{

    public function index()
    {
        //
        $professor_turma = Professor_turma::all();
        return view("professor_turma.index",compact('professor_turma'));
    }


    public function create()
    {
        $professor_turma = Professor_turma::all();
        $turma = Turma::all();
        $professor = Professor::all();
        return view('professor_turma.create', compact('professor_turma','professor', 'turma'));

    }

    public function store(Request $request)
    {
         Professor_turma::create([
             'id_professor' => $request->input('id_professor'),
             'id_turma' => $request->input('id_turma'),
        ]);
        $professor_turma = Professor_turma::all();
        return view("professor_turma.index",compact('professor_turma'));
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }


    public function edit(string $id)
    {
        //
        $professor_turma = Professor_turma::findOrFail($id);
        $turma = Turma::all();
        $professor = Professor::all();
        return view('professor_turma.edit', compact('professor_turma', 'professor', 'turma'));
    
    }
    public function update(Request $request, string $id)
    {
        //
        $professor_turma = Professor_turma::findOrFail($id);
        $professor_turma->update([
            'id_professor' => $request->input('id_professor'),
            'id_turma' => $request->input('id_turma'),
        ]);
        $professor_turma = Professor_turma::all();
        return view("professor_turma.index",compact('professor_turma'));
    }

    public function destroy(string $id)
    {
        //
        $professor_turma = Professor_turma::findOrFail($id);
        $professor_turma->delete();
        $professor_turma = Professor_turma::all();
        return view("professor_turma.index",compact('professor_turma'));
    }

    public function delete(string $id) {

        $professor_turma = Professor_turma::findOrFail($id);
        return view("professor_turma.delete",compact('professor_turma'));
    }
}
