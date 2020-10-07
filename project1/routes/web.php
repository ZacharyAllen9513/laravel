<?php

use Illuminate\Support\Facades\Route;

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

use App\Models\Topping;

//go to a certain page based on the url
Route::get('/', function () {
  return view('home');
});

Route::get('/home', function () {
  return view('home');
});

Route::get('/addToppings', function () {
  return view('addToppings');
});

Route::get('/viewToppings', function () {
  $toppings = Topping::paginate(25);
  return view('viewToppings', compact('toppings'));
});

//link pages with finctions in the ToppingControllers file
Route::post('/addToppings', 'App\Http\Controllers\ToppingController@addTopping')->name('addTopping');
Route::get('/viewTopping/{id}', 'App\Http\Controllers\ToppingController@viewTopping');
Route::get('/updateTopping', 'App\Http\Controllers\ToppingController@updateTopping')->name('updateTopping');