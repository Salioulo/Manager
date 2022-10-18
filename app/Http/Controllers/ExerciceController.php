<?php

namespace App\Http\Controllers;

use App\Models\Exercice;
use App\Http\Requests\StoreExerciceRequest;
use App\Http\Requests\UpdateExerciceRequest;

class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercices = Exercice::all();
        return view('exercice.list', compact('exercices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercice.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExerciceRequest $request)
    {
        $request->validate([
            'libelle'=>'required|unique:exercices,libelle',
            'status'=>'required'
        ]);
        //instenciation
        $exercice = new Exercice($request->all());
        $exercice->saveOrFail();
        return redirect()->route('exercice.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function show(Exercice $exercice)
    {
        return view('exercice.show', compact('exercice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercice $exercice)
    {
        return view('exercice.edit', compact('exercice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExerciceRequest  $request
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExerciceRequest $request, Exercice $exercice)
    {
        $request->validate([
            'libelle'=>'libelle|unique:exercices,libelle',
            'status'=>'required'
        ]);

        $exercice->updateOrFail($request->all());
        return redirect()->route('exercice.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercice $exercice)
    {
        $exercice->deleteOrFail();
        return redirect()->route('exercice.index');
    }
}
