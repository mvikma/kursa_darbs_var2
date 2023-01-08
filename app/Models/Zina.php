<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zina extends Model
{
    protected $primaryKey = 'Zina_ID';
    public $timestamps = false;
    protected $fillable = [
        'vards', 'e_pasts', 'tema', 'zina', 
    ];
}