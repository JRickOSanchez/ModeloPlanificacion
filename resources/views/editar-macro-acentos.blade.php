@extends('editar/editar-macro-layout')

@section('title', 'Macro - Acentos')
@section('slot')

    <a href="{{ route('macro.acento.crear.1', parameters: ['id'=>$macro->id])  }}" class="btn btn-with-ico btn-primary">Crear nuevo acento <i class="icon-plus2"></i></a>

@endsection

