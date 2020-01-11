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
        
/* Route::get('/', function () {
    return view('acceuil');
}); */
//Route::get("/", "biensController@index");
/* les page avec le controlleur PageController */
Route::get("/","PagesController@index");
Route::get("/menu/acheter","PagesController@show_acheter");
Route::get("/menu/louer","PagesController@show_louer");
/* les page avec le controlleur AnnonceController */
Route::get("/annonces/create", "AnnoncesController@show");
Route::post("/annonces/create", "AnnoncesController@depot")->name("ajout_annonce");/* formulaire de creation d'annonce */
/* affichage de toute les annonces avec AnnoncesControlleur  */
Route::get("/annonce/{slug}/one", 'AnnoncesController@show_ann');
Route::get("/annonces/index", "AnnoncesController@display")->name("");
/* affichant les annonces de vente avec AnnonceControlleur */
Route::get("/menu/acheter", "AnnoncesController@display_acheter")->name("");
/*  edition,mis a jour et suppression de d'annonce */
Route::get("/annonces/{ann}/edit", "AnnoncesController@edit")->name("editer_annonce");
Route::patch("/annonces/{ann}/edit", "AnnoncesController@update")->name("update_annonce");
Route::delete('biens/{id}', 'AnnoncesController@destroy');
/* ???? */
/* Route::get("/home", "HomeController@index"); */

        

/* les routes pour le home */
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
