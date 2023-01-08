<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'admin_id';
    public $timestamps = false;
    protected $fillable = [
        'vards', 'uzvards', 'parole',
    ];
    public function getAuthPassword () {

        return $this->parole;
    
    }
}