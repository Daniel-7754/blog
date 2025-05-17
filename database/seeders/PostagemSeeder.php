<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'titulo' => 'postagem 1',
            'descricao'=> 'Descrição da postagem 1',
            'created_at' => now(),
            'updated_at' => now()
        ]);




        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'titulo' => 'postagem 2',
            'descricao'=> 'Descrição da postagem 2',
            'created_at' => now(),
            'updated_at' => now()
        ]);



        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'titulo' => 'postagem 3',
            'descricao'=> 'Descrição da postagem 3',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
