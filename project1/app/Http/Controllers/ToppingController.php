<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topping;

class ToppingController extends Controller
{
  //add a topping
  public function addTopping(Request $request) {
    $topping = new Topping;
    $topping->topping = $request->topping;
    $topping->category = $request->category;
    $topping->save();
    return view('addToppings');
  }

  //view a topping based on it's id
  public function viewTopping($id) {
    $topping = Topping::findOrFail($id);
    return view('viewTopping', compact('topping'));
  }

  //update a topping based on it's id
  public function updateTopping(Request $request) {
    $topping = Topping::findOrFail($request->id);
    $topping->topping = $request->topping;
    $topping->category = $request->category;
    $topping->save();
    $toppings = Topping::paginate(25);
    return view('viewToppings', compact('toppings'));
  }
}
