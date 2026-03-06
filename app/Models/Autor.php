<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['nom'];

    public function llibres()
    {
        return $this->belongsToMany(Llibre::class, 'autor_llibre');
    }
}

