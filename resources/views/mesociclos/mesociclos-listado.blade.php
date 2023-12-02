@extends('editar/editar-macro-layout')

@section('title', 'Macro - Mesociclos')
@section('slot')

    <a href="{{ route('macro.editar.mesoiclos.crear', parameters: ['id' => $macro->id])  }}"
       class="btn btn-with-ico btn-primary">
        Agregar mesociclo <i class="icon-plus2"></i>
    </a>

@endsection

