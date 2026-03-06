<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Autor::with('llibres')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        return Autor::create($request->only('name'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Autor::with('llibres')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $autor = Autor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $autor->update($request->only('name'));

        return $autor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autor::destroy($id);
        return response()->json(['message' => 'Autor eliminado']);
    }
}
