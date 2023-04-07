<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Stagers extends Controller
{
    public function index(){
        $stagiaires = DB::table('table__stagiaires')->get();
        // dd($filieres);
        return view('stager',['stagiaires'=>$stagiaires]);
    }
    public function edit($id)
    {
        $stagiaires = DB::table('table__stagiaires')->find($id);
        return view('edit',['stager'=>$stagiaires]);
    }
    public function update(  Request $request ,$id)
    {
         DB::table('table__stagiaires')->where('id',$id)
        ->update([
            'nom_complet'=>$request->nom,
            'genre'=>$request->genre,

        ]);
        return redirect()->route('home');
    }
}
