<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    function product(){
        return $this->belongsToMany(Product::class);
    }
}
