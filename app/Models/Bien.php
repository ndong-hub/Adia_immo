<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    //use HasFactory;

    // Definition d'attribut
    protected $fillable = [
         'id',
        'designation',
        'prix',
        'description'
    ];

    public $timestamps = false;

    
}
