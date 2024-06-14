<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{

    public function index()
    {
        //
        $professor = Professor::all();
        return view("professor.index",compact('professor'));
    }


    public function create()
    {

        return view('professor.create');
    }

    public function store(Request $request)
    {
         Professor::create([
             'nome' => $request->input('nome'),
             'materia' => $request->input('materia'),
        ]);
        $professor = Professor::all();
        return view("professor.index",compact('professor'));
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
        $professor = Professor::findOrFail($id);
        return view("professor.edit",compact('professor'));
    }

    public function update(Request $request, string $id)
    {
        //
        $professor = Professor::findOrFail($id);
        $professor->update([
            'nome' => $request->input('nome'),
            'materia' => $request->input('materia'),
        ]);
        $professor = Professor::all();
        return view("professor.index",compact('professor'));
    }

    public function destroy(string $id)
    {
        //
        $professor = Professor::findOrFail($id);
        $professor->delete();
        $professor = Professor::all();
        return view("professor.index",compact('professor'));
    }

    public function delete(string $id) {

        $professor = Professor::findOrFail($id);
        return view("professor.delete",compact('professor'));
    }
}
