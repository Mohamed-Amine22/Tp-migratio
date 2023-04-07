<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class stagiaires extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table__stagiaires')->insert([
            [
                'nom_complet'=>"ahmad",
                "genre"=>'M'
                
            ],
            [
                'nom_complet'=> "ali",
                "genre"=>'M'
               
            ],
            [
           
            'nom_complet'=> "fatima",
            "genre"=>'F'
            
            ],
            
            [
           
            'nom_complet'=> "meryam",
            "genre"=>'F'
            
            ],
            [
           
            'nom_complet'=> "islam",
            "genre"=>'F'
            
            ],
            [
           
            'nom_complet'=> "ayman",
            "genre"=>'M'
            
            ],
            [
           
            'nom_complet'=> "islam",
            "genre"=>'M'
            
            ],
            


        ]);
    }
}
