<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\User;
use App\Sujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('auth.register', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vars = DB::table('rubriques')->get();
        return view('sujet', compact('vars'));
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
            'name' => 'required',
            'lastname' => 'required',
            'number' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $users = new User([

            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'number' => $request->get('number'),
            'role' => $request->get('role'),
            'email' => $request->get('email'),
            'password' => \Hash::make($request->get('password')),
        ]);
        $users->save();

        return redirect()->route('users.index')->with('success', 'Utilisateur créer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Protocolaire  $protocolaire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrfail($id);
        return view('showuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $users = User::findOrfail($id);
        $data = $request->all();
        unset($data['password']);
        $users->update($data);
        return redirect()->route('users.index')->with('success', 'Modification(s) effectuée(s) avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrfail($id);
        $users->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
