<?php

namespace App\Http\Controllers;

use App\Article;
use App\Rubrique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('listearticle', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article');
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
            'auteur' => 'required',
            'titre' => 'required',
            'surtitre' => 'required',
            'chapeau' => 'required',
            'type' => 'required',
            'rubrique' => 'required',
            'legende' => 'required',
            'tag' => 'required',
            'texte' => 'required'
        ]);

        $image = $request->file('image');
        $imagedata = file_get_contents($request->file('image')->getRealPath());
        $base64 = base64_encode($imagedata);

        $articles = new Article([
            'auteur' => $request->get('auteur'),
            'titre' => $request->get('titre'),
            'surtitre' => $request->get('surtitre'),
            'chapeau' => $request->get('chapeau'),
            'reseau' => $request->get('reseau'),
            'type' => $request->get('type'),
            'rubrique' => $request->get('rubrique'),
            'image' => $base64,
            'legende' => $request->get('legende'),
            'tag' => $request->get('tag'),
            'texte' => $request->get('texte'),
            'iduser' => auth()->id()
        ]);

        $articles->save();

        return redirect()->route('mesarticles')->with('success', 'Article enregistré et envoyé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::findOrfail($id);
        return view('detail', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::findOrfail($id);
        return view('modifierarticle', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $article = Article::findOrfail($id);
        $data = $request->all();
        unset($data['image']);
        $article->update($data);
        return redirect()->route('mesarticles')->with('success', 'Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Article::findOrfail($id);
        $articles->delete();
        return redirect()->back()->with('success', 'Articles supprimée avec succès');
    }
}
