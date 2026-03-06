<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Llibre extends Model
{
    protected $fillable = ['titol'];

    public function autors()
    {
        return $this->belongsToMany(Autor::class, 'autor_llibre');
    }
}

