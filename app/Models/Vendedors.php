<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'telefono'
    ];
    
    function product(){
        return $this->belongsToMany(Product::class);
    }
}
