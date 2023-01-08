<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'admin_id';
    public $timestamps = false;
    protected $fillable = [
        'vards', 'uzvards', 'parole',
    ];
}