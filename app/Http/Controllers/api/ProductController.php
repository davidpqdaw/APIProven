<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($id=0){
        if($id==0){
            return Product::all();
        }else{
            return Product::find($id);
        }
    }

    public function update($id){
        $change=[];
        if(isset($_GET['name'])){
            $change['name']=$_GET['name'];
        }
        if(isset($_GET['stock'])){
            $change['stock']=$_GET['stock'];
        }
        if(isset($_GET['price'])){
            $change['price']=$_GET['price'];
        }
        if(isset($_GET['description'])){
            $change['description']=$_GET['description'];
        }
        try{
            $product=Product::find($id);
            Product::where('id', $product->id)
            ->update($change);
            return "Actualizado Correctamente";
        }catch(Exception $e){
            return "Algo fallo no se pudo actualizar";
        }
    }

    public function destroy($id){
        try{
            $product=Product::find($id);
            Product::where('id', $product->id)
            ->delete();
            return "Eliminado Correctamente";
        }catch(Exception $e){
            return "Algo fallo no se pudo eliminar";
        }
    }

    public function register()
    {
        if(isset($_GET['name']) and isset($_GET['stock']) and isset($_GET['price']) and isset($_GET['description']) and isset($_GET['vendedors']) and isset($_GET['categorias'])){
            try{
                $product=new Product(['name'=>$_GET['name'],'stock'=>$_GET['stock'],'price'=>$_GET['price'],'description'=>$_GET['description']]);
                $product->save();
                $vendedors = DB::select('SELECT * FROM vendedors WHERE name="'.$_GET['vendedors'].'"');
                $product->vendedor()->attach($vendedors[0]->id);
                $categorias = DB::select('SELECT * FROM categorias WHERE name="'.$_GET['categorias'].'"');
                $product->categoria()->attach($categorias[0]->id);
                // dd($vendedors[0]->id);
                return "Añadido Correctamente";
            }catch(Exception $e){
                return "Algo fallo no se pudo añadir";
            }

        }
    }
}
