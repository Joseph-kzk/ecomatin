<?php

namespace App\Http\Controllers;

use App\Article;
use App\Notifications\NewAddArticle;
use App\User;
use App\Rubrique;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $articles = DB::table('articles')->orderby('idarticle','desc')->get();
        return view('listearticle', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('article');
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
        $users = new User();

        // Envois de la notification
       //$articles->user()->notify(new NewAddArticle($articles, auth()->user()));

        $articles->notify(new NewAddArticle($articles, auth()->user()));



        return redirect()->route('mesarticles')->with('success', 'Article enregistré et envoyé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $articles = Article::findOrfail($id);
        return view('detail', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $articles = Article::findOrfail($id);
        return view('modifierarticle', compact('articles'));
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
        $article = Article::findOrfail($id);
        $data = $request->all();
        unset($data['image']);
        $article->update($data);
        return redirect()->route('mesarticles')->with('success', 'Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $articles = Article::findOrfail($id);
        $articles->delete();
        return redirect()->back()->with('success', 'Articles supprimée avec succès');
    }


    public function sendMail(int $article,Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email'
        ]);
        $article = Article::query()->findOrFail($article);
        Mail::send('emails.send_article', ['articles' => $article], function ($message) use ($request,$article){
            $message->from('contact@ecomatin.com', "Envoie de l'article  {{$article->titre}} ");
            $message->to($request->get('email'));
            $message->subject("Envoie de l'article  {$article->titre} ");
        });
        return back()->with('success','Envoie réussi');
    }


}
