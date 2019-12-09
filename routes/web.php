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
Route::get("/annonces/create", "AnnoncesController@show");
Route::post("/annonces/create", "AnnoncesController@depot")->name("ajout_annonce");
Route::get("/annonces/index", "PagesController@display")->name("");


?>