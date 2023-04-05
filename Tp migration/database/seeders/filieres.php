<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class filieres extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filieres')->insert([
            [
                'titre'=>"DEVOWFS",
                'description'=> "Développement digital-option web full stack"
            ],
            [
            'titre'=> "DEVOAM",
            'description'=> "Développement digital-option applications mobiles"
            ],
            [
           
            'titre'=> "DEVORVRA",
            'description'=> "Développement digital-option réalité virtuelle/réalité augmentée"
            ],
            [
            'titre'=> Str::random(20),
            'description'=> Str::random(50)
            ]


        ]);
    }
}
