<?php

namespace Database\Seeders;


use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class films extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::factory(20)
            ->create();
    }
}
