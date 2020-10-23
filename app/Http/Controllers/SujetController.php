<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Sujet;
use App\Rubrique;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sujets = Sujet::where('idmenu')->fetch();
        return view('sujet', compact('sujets'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $request->validate([
            'titre' => 'required',
            'rubrique' => 'required',
            'responsable' => 'required',
            'encombrement' => 'required'
        ]);

        $sujets = Sujet::create([
            'titre' => $request->get('titre'),
            'rubrique' => $request->get('rubrique'),
            'responsable' => $request->get('responsable'),
            'encombrement' => $request->get('encombrement'),
            'idmenu' => $id,
        ]);

        return redirect()->route('menus.show',$id)->with('success', 'Sujet ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function show(Sujet $sujet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $sujets = Sujet::findOrfail($id);
        $sujets-> update($request->all());
        return redirect()->back()->with('success', 'Sujet modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rubriques = Sujet::findOrfail($id);
        $rubriques->delete();
        return redirect()->back()->with('success', 'Sujet supprimé avec succès');
    }
}
