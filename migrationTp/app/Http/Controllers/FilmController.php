<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function index(){
        $listfilm = DB::table('films')->get();
        return view('home',['listfilm'=>$listfilm]);
    }

    public function create(){
        return view('createFilm');
    }

    public function store(Request $req){
        DB::table('films')->insert([
            'titre'=>$req->title,
            'pays'=>$req->country,
        ]);
        return redirect()->route('Home');
    }

    public function edit($id ){
        $film=DB::table('films')->find($id);
        
        return view('edit',['film'=>$film]);

    }

    public function update($id ,Request $req){
        $film=DB::table('films')->where('id',$id);
        $film->update([
            'titre'=>$req->titre,
            'pays'=>$req->pays,
        ]);

        return redirect()->route('Home');
    }

    public function delete($id){
        $film=DB::table('films')->where('id',$id);

        $film->delete();
         return redirect()->route('Home');
    }
}
