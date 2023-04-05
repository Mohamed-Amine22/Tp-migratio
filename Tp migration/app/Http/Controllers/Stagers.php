<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Stagers extends Controller
{
    public function index(){
        $filieres = DB::table('filieres')->get();
        // dd($filieres);
        return view('stager',['filieres'=>$filieres]);
    }
}
