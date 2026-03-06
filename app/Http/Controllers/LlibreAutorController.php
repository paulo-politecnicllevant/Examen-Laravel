<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Llibre;
use Illuminate\Http\Request;

class LlibreAutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function assignarAutor($id, $autor_id)
    {
        $llibre = Llibre::findOrFail($id);
        $autor = Autor::findOrFail($autor_id);

        // Evitar duplicados
        if (!$llibre->autors()->where('autor_id', $autor_id)->exists()) {
            $llibre->autors()->attach($autor_id);
        }

        return response()->json(['message' => 'Autor assignado al llibro']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function eliminarAutor($id, $autor_id)
    {
        $llibre = Llibre::findOrFail($id);
        $autor = Autor::findOrFail($autor_id);

        $llibre->autors()->detach($autor_id);

        return response()->json(['message' => 'Autor eliminado del libro']);
    }

    /**
     * Display the specified resource.
     */
    public function autorsDeLlibre($id)
    {
        $llibre = Llibre::with('autors')->findOrFail($id);
        return $llibre->autors;
    }

    /**
     * Update the specified resource in storage.
     */
    public function llibresDeAutor($id)
    {
        $autor = Autor::with('llibres')->findOrFail($id);
        return $autor->llibres;
    }
}
