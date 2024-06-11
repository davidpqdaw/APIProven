<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product=new Product(['name'=>'Horizon Zero Dawn', "stock"=>10,"price"=>10,"description"=>"Desciprion del juego"]);
        $product->save();
        $product2=new Product(['name'=>'Horizon Forbbiden West', "stock"=>10,"price"=>10,"description"=>"Desciprion del juego"]);
        $product2->save();
        $provider=DB::select("SELECT * FROM vendedors WHERE id=1");
        $provider2=DB::select("SELECT * FROM vendedors WHERE id=2");
        $product2->vendedor()->attach($provider[0]->id);
        $product->vendedor()->attach($provider2[0]->id);
        $categoria=DB::select("SELECT * FROM categorias WHERE id=1");
        $categoria2=DB::select("SELECT * FROM categorias WHERE id=2");
        $product2->categoria()->attach($categoria[0]->id);
        $product->categoria()->attach($categoria2[0]->id);
    }
}
