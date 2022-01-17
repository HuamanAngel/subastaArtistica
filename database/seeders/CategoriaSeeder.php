<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['id'=>1 ,'nombre_categoria'=>'Retratos']);
        DB::table('categorias')->insert(['id'=>2 ,'nombre_categoria'=>'Paisajes']);
        DB::table('categorias')->insert(['id'=>3 ,'nombre_categoria'=>'Cuerpo Humano']);
        DB::table('categorias')->insert(['id'=>4 ,'nombre_categoria'=>'Obras reconocidas']);
        DB::table('categorias')->insert(['id'=>5 ,'nombre_categoria'=>'Otros']);
    }
}
