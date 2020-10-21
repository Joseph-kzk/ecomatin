<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Sujet;
use App\Rubrique;
use App\Article;
use App\Utilisateur;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AfficheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journalistes = User::all()->count();
        $articles = Article::all()->count();
        $rubriques = Rubrique::all()->count();
        $jl = Article::where('type','=','Journal en ligne')->get()->count();
        $jt = Article::where('type','=','Journal tabloïd')->get()->count();
        $jm = Article::where('type','=','Magazine')->get()->count();
        $conjoncture = Article::where('rubrique','=','Conjoncture')->get()->count();
        $banque = Article::where('rubrique','=','Banques et Finances')->get()->count();
        $business = Article::where('rubrique','=','Business et Entreprises')->get()->count();
        $politique = Article::where('rubrique','=','Politiques Publiques')->get()->count();

        return view('home')
            ->with('journalistes',$journalistes)
            ->with('articles',$articles)
            ->with('rubriques',$rubriques)
            ->with('jl',$jl)
            ->with('jt',$jt)
            ->with('jm',$jm)
            ->with('conjoncture',$conjoncture)
            ->with('banque',$banque)
            ->with('business',$business)
            ->with('politique',$politique)
        ;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
