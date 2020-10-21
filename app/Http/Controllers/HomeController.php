<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Sujet;
use App\Rubrique;
use App\Article;
use App\Utilisateur;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mesarticles()
    {
        $mesarticles = Article::user()->get();
        return view('mesarticles')
            ->with('articles',$mesarticles);
        ;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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

        $role = auth()->user()->role;

        if($role == 'Rédacteur_en_chef')
        {
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

        elseif($role == 'Journaliste')
        {
            $mesarticles = Article::user()->get();
            return view('mesarticles')
                ->with('journalistes',$journalistes)
                ->with('articles',$mesarticles)
                ->with('rubriques',$rubriques)
                ->with('jl',$jl)
                ->with('jt',$jt)
                ->with('conjoncture',$conjoncture)
                ->with('banque',$banque)
                ->with('business',$business)
                ->with('politique',$politique)
            ;
        }

        elseif($role == 'Coordonnateur Journal en ligne')
        {
            return view('homecordojl')
                ->with('journalistes',$journalistes)
                ->with('articles',$articles)
                ->with('rubriques',$rubriques)
                ->with('jl',$jl)
                ->with('jt',$jt)
                ->with('conjoncture',$conjoncture)
                ->with('banque',$banque)
                ->with('business',$business)
                ->with('politique',$politique)
            ;
        }

        elseif($role == 'Coordonnateur Journal tabloïd')
        {
            return view('homecordojt')
            ->with('journalistes',$journalistes)
            ->with('articles',$articles)
            ->with('rubriques',$rubriques)
            ->with('jl',$jl)
            ->with('jt',$jt)
            ->with('conjoncture',$conjoncture)
            ->with('banque',$banque)
            ->with('business',$business)
            ->with('politique',$politique)
            ;
        }

        elseif($role == 'Coordonnateur des rédactions')
        {
            return view('homecordored')
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

    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function homecordojl()
     {
         $jl = Article::where('type','=','Journal en ligne')->get()->count();

         return view('homecordojl')
             ->with('jl',$jl)
         ;
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function homecordojt()
     {
         $jt = Article::where('type','=','Journal Tabloïd')->get()->count();

         return view('homecordojt')
             ->with('jt',$jt)
         ;
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function journalenligne()
     {
         $journalenligne = Article::where('type','=','Journal en ligne')->get();
         return view('journalenligne', compact('journalenligne'));
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function journaltabloid()
     {
         $journaltabloid = Article::where('type','=','Journal tabloïd')->get();
         return view('journaltabloid', compact('journaltabloid'));
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function conjoncture()
     {
         $conjoncture = Article::where('rubrique','=','Conjoncture')->get();
         return view('conjoncture', compact('conjoncture'));
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function banque()
     {
         $banque = Article::where('rubrique','=','Banques et Finances')->get();
         return view('banque', compact('banque'));
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function politique()
     {
         $politique = Article::where('rubrique','=','Politiques Publiques')->get();
         return view('politique', compact('politique'));
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function business()
     {
         $business = Article::where('rubrique','=','Business et Entreprises')->get();
         return view('business', compact('business'));
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function magazine()
     {
         $magazines = Article::where('type','=','Magazine')->get();
         return view('magazines', compact('magazines'));
     }
}
