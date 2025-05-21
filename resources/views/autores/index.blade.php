@extends('layouts.app')

@section('title', 'Lista de Autores')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Lista de autores</h2>
        <a href="{{ route('autores.create') }}" class="btn btn-primary">Nuevo autor</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($autores as $autor)
                <tr>
                    <td>{{ $autor->codigo_autor }}</td>
                    <td>{{ $autor->nombre_autor }}</td>
                    <td>{{ $autor->nacionalidad }}</td>
                    <td>
                        <a href="{{ route('autores.show', $autor->codigo_autor) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('autores.edit', $autor->codigo_autor) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('autores.destroy', $autor->codigo_autor) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('¿Estás seguro de eliminar este autor?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay autores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
