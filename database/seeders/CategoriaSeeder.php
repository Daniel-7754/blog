<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'sapato',
            'created_at' => now(),
            'updated_at' => now()


        ]);

        DB::table('categorias')->insert([
            'nome' => 'meia',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('categorias')->insert([
            'nome' => 'tenis',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
