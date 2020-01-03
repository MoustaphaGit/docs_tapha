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
Route::get("/","PagesController@index");
Route::get("/menu/acheter","PagesController@index");
Route::get("/annonces/create", "AnnoncesController@show");
Route::post("/annonces/create", "AnnoncesController@depot")->name("ajout_annonce");
Route::get("/annonces/index", "AnnoncesController@display")->name("");
Route::get("/annonces/{ann}/edit", "AnnoncesController@edit")->name("editer_annonce");
Route::patch("/annonces/{ann}/edit", "AnnoncesController@update")->name("update_annonce");
Route::delete('biens/{id}', 'AnnoncesController@destroy');


