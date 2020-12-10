<?php

namespace App\Archivos;

use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    protected $table = 'archivo';
    protected $fillable = [
        'title',
        'archivo'
    ];
}
