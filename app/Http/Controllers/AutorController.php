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
        $autores=Autor::get();
        return view('autores.index',compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Crear nuevo autor
        $autor= new Autor();
        $autor->codigo_autor="AUT500";
        $autor->nombre_autor="prueba insert";
        $autor->nacionalidad="Salvadoreño";
        $autor->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //metodo a ejecutar con los datos del nuevo autor
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
        $autor=Autor::find($codigo);
        $autor->nacionalidad="Colombiano";
        $autor->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
