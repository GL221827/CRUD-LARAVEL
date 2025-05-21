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
        //Mostrar lista de autores
        $autores=Autor::all();
        return view('autores.index',compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Autor::create($request->validated());
        return redirect()->route('autores.index')->with('success', 'Autor creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($codigo)
    {
        $autor=Autor::find($codigo);
        return view('autores.details', compact('autor'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        //
         $autor = Autor::findOrFail($codigo);
        return view('autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        //
        $autor = Autor::findOrFail($codigo);
        $autor->update($request->validated());
        return redirect()->route('autores.index')->with('success', 'Autor actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        //
         $autor = Autor::find($codigo);
        $autor->delete();
        return redirect()->route('autores.index')->with('success', 'Autor eliminado.');
    }
}
