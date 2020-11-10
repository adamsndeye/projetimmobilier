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


Route::get('/', 'welcomeController@index')->name('welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('produits', 'ProduitController');
Route::resource('partenaires', 'PartenaireController');
Route::resource('categories', 'CategorieController');
Route::resource('propos', 'QuisommenousController');
Route::resource('imageproduits', 'ImageproduitController');
Route::resource('temoignages', 'TemoignageController');
Route::resource('contacts', 'ContactController');
Route::post('produits.updateproduit', 'ProduitController@updateproduit')->name('produits.updateproduit');
Route::post('contactsend', 'WelcomeController@store')->name('contacts.store');
Route::get('/descproduit/{id}','DescproduitController@index')->name('descproduit');
Route::get('/list_produit','List_produitController@index')->name('list_produit');
Route::get('/listeproduits','List_produitController@index')->name('listeproduits');