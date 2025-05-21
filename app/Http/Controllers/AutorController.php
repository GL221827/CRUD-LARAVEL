<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Http\Requests\AutorRequest;
use Illuminate\Http\Request;

class AutorController extends Controller
{
     //Muestra la lista completa de autores.
     //Se obtienen todos los registros de la tabla  autores y se pasan a la vista autores.index

    public function index()
    {
        $autores=Autor::all();
        return view('autores.index',compact('autores'));
    }

    //Muestra el formulario para crear un nuevo autor.
     //Simplemente retorna la vista autores.create donde el usuario puede ingresar los datos.
    public function create()
    {
          return view('autores.create');
    }

    //Guarda un nuevo autor en la base de datos.
    //Valida los datos recibidos con AutorRequest y crea un nuevo registro en la tabla autores.
    //Luego redirige a la lista de autores con un mensaje de éxito.
    public function store(AutorRequest $request)
    {
        Autor::create($request->validated());
        return redirect()->route('autores.index')->with('success', 'Autor creado correctamente.');
    }


    //Muestra los detalles de un autor especifico.
    // Busca un autor por su codigo y muestra la vista autores.details con la información encontrada
    public function show($codigo)
    {
        $autor=Autor::find($codigo);
        return view('autores.details', compact('autor'));
    
    }

    //Muestra el formulario para editar un autor existente
     //Busca el autor por su código y carga la vista 'autores.edit' con los datos actuales del autor.
    public function edit($codigo)
    {
        //
         $autor = Autor::find($codigo);
        return view('autores.edit', compact('autor'));
    }

    //Actualiza un autor existente en la base de datos
    //Valida los datos recibidos con AutorRequest, busca el autor por codigo, actualiza sus datos y redirige a la lista
    public function update(AutorRequest $request, $codigo)
    {
        //
        $autor = Autor::findOrFail($codigo);
        $autor->update($request->validated());
        return redirect()->route('autores.index')->with('success', 'Autor actualizado correctamente.');
    }


   //Busca el autor por código, lo elimina y redirige a la lista 
    public function destroy($codigo)
    {
        //
         $autor = Autor::find($codigo);
        $autor->delete();
        return redirect()->route('autores.index')->with('success', 'Autor eliminado.');
    }
}
