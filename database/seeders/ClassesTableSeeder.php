<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            ['libelle'=>'6eme'],
            ['libelle'=>'5eme'],
            ['libelle'=>'4eme'],
            ['libelle'=>'3eme'],
            ['libelle'=>'2eme'],
            ['libelle'=>'1ere'],
        ]);
    }
}