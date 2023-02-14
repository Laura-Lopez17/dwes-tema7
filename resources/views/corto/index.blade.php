@extends('plantilla')
@section('contenido')

   <ul>
        @forelse ($cortos as $corto)
            <li>{{ $corto["titulo"] }} ({{ $corto["autor"] }})</li>
        @empty
            <li>No hay elementos que mostrar</li>
        @endforelse
    </ul>
@endsection