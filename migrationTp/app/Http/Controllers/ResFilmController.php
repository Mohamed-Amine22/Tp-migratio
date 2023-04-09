<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Film;

class ResFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filmItems =Film::all();
        return view('Home',['listfilm'=>$filmItems]);
    }

    
    public function create()
    {
        return view('create');
    }

 
    public function store(Request $request)
    {
        Film::create([
            'titre'=>$request->titre,
            'pays'=>$request->pays,
        ]);
        return redirect()->route('film.index');
    }

    public function show(Film $Film)
    {
        return view('show',compact('Film'));
    }


    public function edit(Film $Film)
    {
        return view('edit',compact('Film'));
    }

  
    public function update(Request $request, Film $Film)
    {
        $Film->update([
            'titre'=>$request->titre,
            'pays'=>$request->pays,
        ]); 
        return redirect()->route('film.index');
    }

    public function destroy(Film $Film)
    {
        $Film->delete();

        return redirect()->route('film.index');
    }
}
