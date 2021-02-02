<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    public function index()
    {
        $drinks = Drink::all();
        return view('pages.drinks', compact('drinks'));
    }
    public function show($id)
    {
        // dd($id);
        $drink = Drink::findOrFail($id);
        return view('pages.drink-show', compact('drink'));
    }
}
