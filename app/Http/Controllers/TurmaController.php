<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{

    public function index()
    {
        //
        $turma = Turma::all();
        return view("turma.index",compact('turma'));
    }


    public function create()
    {

        return view('turma.create');
    }

    public function store(Request $request)
    {
         Turma::create([
             'nome' => $request->input('nome'),
             'turno' => $request->input('turno'),
        ]);
        $turma = Turma::all();
        return view("turma.index",compact('turma'));
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
        $turma = Turma::findOrFail($id);
        dd($turma);
        return view("turma.edit",compact('turma'));
    }

    public function update(Request $request, string $id)
    {
        //
        $turma = Turma::findOrFail($id);
        $turma->update([
            'nome' => $request->input('nome'),
            'turno' => $request->input('turno'),
        ]);
        $turma = Turma::all();
        return view("turma.index",compact('turma'));
    }

    public function destroy(string $id)
    {
        //
        $turma = Turma::findOrFail($id);
        $turma->delete();
        $turma = Turma::all();
        return view("turma.index",compact('turma'));
    }

    public function delete(string $id) {

        $turma = Turma::findOrFail($id);
        return view("turma.delete",compact('turma'));
    }
}
