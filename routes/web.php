<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("auth.login");
})->middleware("guest");

Route::get('/logout', function (){
    auth()->logout();
    \session()->flush();
    return redirect()->Route('login')->with('success', 'Déconnecté avec succès');
  })->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mesarticles', 'HomeController@mesarticles')->name('mesarticles');

Route::post('/search', 'HomeController@search');

Route::get('/homecordored', 'HomeController@homecordored');

Route::get('/homecordojl', 'HomeController@homecordojl');

Route::get('/homecordojt', 'HomeController@homecordojt');

Route::get('/journalenligne', 'HomeController@journalenligne');

Route::get('/journaltabloid', 'HomeController@journaltabloid');

Route::get('/magazine', 'HomeController@magazine');

Route::get('/conjoncture', 'HomeController@conjoncture');

Route::get('/business', 'HomeController@business');

Route::get('/banque', 'HomeController@banque');

Route::get('/politique', 'HomeController@politique');

Route::resource('rubriques', 'RubriqueController');

Route::resource('users', 'UtilisateurController');

Route::resource('affiches', 'AfficheController');

Route::resource('articles', 'ArticleController');

Route::resource('menus', 'MenuController');

Route::get('/consultermenu', 'MenuController@consultermenu');

Route::resource('/{id}/sujets', 'SujetController');


// Envoi du mail d'un article
Route::post('/send_article_mail/{article}','ArticleController@sendMail')
    ->name('send_article_mail');
