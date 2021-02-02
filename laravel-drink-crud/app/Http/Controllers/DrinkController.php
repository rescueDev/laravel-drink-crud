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
    public function create()
    {
        return view('pages.new-drink');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $newDrink = Drink::create($request->all());
        return redirect()->route('drinks');
    }
    public function edit($id)
    {
        // dd($id);
        $drink = Drink::findOrFail($id);
        return view('pages.edit-drink', compact('drink'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all(), $id);
        $drink = Drink::findOrFail($id);
        $drink->update($request->all());
        return redirect()->route('show-drink', $drink->id);
    }
}
