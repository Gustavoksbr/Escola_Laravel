<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{

    public function index()
    {
        //
        $aluno = Aluno::all();
        return view("aluno.index",compact('aluno'));
    }


    public function create()
    {
        $turma = Turma::all();
        return view('aluno.create',compact('turma'));

    }

    public function store(Request $request)
    {
         Aluno::create([
             'nome' => $request->input('nome'),
             'turma' => $request->input('turma'),
        ]);
        return redirect()->route('aluno.index')->with('success'.'Aluno criado com sucesso');
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
        $aluno = Aluno::findOrFail($id);
        $turma = Turma::all();
        return view("aluno.edit",compact('aluno','turma'));
    
    }
    public function update(Request $request, string $id)
    {
        //
        $aluno = Aluno::findOrFail($id);
        $aluno->update([
            'nome' => $request->input('nome'),
            'turma' => $request->input('turma'),
        ]);
        return redirect()->route('aluno.index')->with('success'.'Aluno atualizado com sucesso');
    }

    public function destroy(string $id)
    {
        //
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('aluno.index')->with('success'.'Aluno deletado com sucesso');
    }

    public function delete(string $id) {

        $aluno = Aluno::findOrFail($id);
        return view("aluno.delete",compact('aluno'));
    }
}
