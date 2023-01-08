<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nosaukums', 'cena', 'kategorija', 'apraksts', 'galerija',
    ];
}