@extends('layouts.app')

@section('title', 'Editar Autor')

@section('content')
    <h2>Editar autor</h2>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('autores.update', $autor->codigo_autor) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="codigo_autor" class="form-label">Código del autor</label>
            <input type="text" name="codigo_autor" class="form-control" value="{{ $autor->codigo_autor }}" readonly>
        </div>

        <div class="mb-3">
            <label for="nombre_autor" class="form-label">Nombre del autor</label>
            <input type="text" name="nombre_autor" class="form-control" value="{{ old('nombre_autor', $autor->nombre_autor) }}" required>
        </div>

        <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control" value="{{ old('nacionalidad', $autor->nacionalidad) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
