<?php

namespace App\Http\Controllers;

use nApp\Utilisateur;
use App\User;
use App\Sujet;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = User::all();
        return view('auth.register', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $vars = DB::table('rubriques')->get();
        return view('sujet', compact('vars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
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
     * @param $id
     * @return Application|Factory|View
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
     * @param Request $request
     * @param $id
     * @return RedirectResponse
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
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $users = User::findOrfail($id);
        $users->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
