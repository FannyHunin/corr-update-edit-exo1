<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index () {
        $dataAll = Animal::all();
        return view('pages.animals', compact('dataAll'));
    }
    public function create () {
        return view('pages.createAnimals');
    }
    public function store (Request $request) {
        $newEntry = new Animal;
        $newEntry->species = $request->species;
        $newEntry->age = $request->age;
        $newEntry->save();
        return redirect()->route('home');
    }
    public function show (Animal $id) {
        $animal = $id;
        return view('pages.showAnimal', compact('animal'));
    }
    public function destroy (Animal $id) {
        $id->delete();
        return redirect()->route('home');
    }
    public function edit (Animal $id) {
        $animal = $id;
        return view('pages.editAnimal', compact('animal'));
    }
    public function update (Animal $id, Request $request) {
        $animal = $id;
        $animal->species = $request->species;
        $animal->age = $request->age;
        $animal->save();
        return redirect()->route('show', $animal->id);
    }
}
