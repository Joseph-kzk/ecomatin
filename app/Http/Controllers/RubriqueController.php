<?php

namespace App\Http\Controllers;

use App\Rubrique;
use App\User;
use App\Article;
use App\Sujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubriques = Rubrique::all();
        $users = User::all();
        return view('rubrique', compact('rubriques'),['users' => $users]);
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
        $request->validate([
            'nom' => 'required',
            'description' => 'required'
        ]);

        $rubriques = new Rubrique([

            'nom' => $request->get('nom'),
            'responsable' => $request->get('responsable'),
            'description' => $request->get('description'),
        ]);
        $rubriques->save();

        return redirect()->route('rubriques.index')->with('success', 'Rubrique ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function show(Rubrique $rubrique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rubriques = Rubrique::findOrfail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rubriques = Rubrique::findOrfail($id);
        $rubriques-> update($request->all());

        return redirect()->route('rubriques.index')->with('success', 'Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $rubriques = Rubrique::findOrfail($id);
        $rubriques->delete();
        return redirect()->route('rubriques.index')->with('success', 'Rubrique supprimée avec succès');
    }
}

