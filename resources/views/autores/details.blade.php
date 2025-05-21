@extends('layouts.app')

@section('title', 'Detalles del Autor')

@section('content')
    <h2>Detalles del autor</h2>

    <table class="table table-bordered w-50">
        <tbody>
            <tr>
                <th>Código</th>
                <td>{{ $autor->codigo_autor }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $autor->nombre_autor }}</td>
            </tr>
            <tr>
                <th>Nacionalidad</th>
                <td>{{ $autor->nacionalidad }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('autores.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
@endsection
