<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'Bloga_ID';
    public $timestamps = false;
    protected $fillable = [
        'nosaukums', 'galerija', 'apraksts',
    ];
}
