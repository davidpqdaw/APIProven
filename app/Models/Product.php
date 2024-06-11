<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'stock',
        'price',
        'description',
    ];
    function vendedor(){
        return $this->belongsToMany(Vendedors::class);
    }
    function categoria(){
        return $this->belongsToMany(Categorias::class);
    }
}
