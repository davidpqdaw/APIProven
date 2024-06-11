<?php

namespace Database\Seeders;

use App\Models\Vendedors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provider=new Vendedors(['name'=>"Empresa","email"=>"empresa@empresa.com","telefono"=>123456789]);
        $provider->save();
        $provider=new Vendedors(['name'=>"Insomniac Games","email"=>"insomniacgames@nsomniacgames.com","telefono"=>987654321]);
        $provider->save();
    }
}
