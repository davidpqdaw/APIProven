<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria=new Categorias(['name'=>'Videogame']);
        $categoria->save();
        $categoria=new Categorias(['name'=>'Book']);
        $categoria->save();
    }
}
