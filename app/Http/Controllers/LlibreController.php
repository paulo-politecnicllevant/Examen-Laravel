<?php

namespace App\Http\Controllers;

use App\Models\Llibre;
use Illuminate\Http\Request;

class LlibreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Llibre::with('autors')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'titol' => 'required|string|max:255'
        ]);

        return Llibre::create($request->only('titol'));
    }

    public function show($id)
    {
        return Llibre::with('autors')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $llibre = Llibre::findOrFail($id);

        $request->validate([
            'titol' => 'required|string|max:255'
        ]);

        $llibre->update($request->only('titol'));

        return $llibre;
    }

    public function destroy($id)
    {
        Llibre::destroy($id);
        return response()->json(['message' => 'Libro eliminado']);
    }
}
