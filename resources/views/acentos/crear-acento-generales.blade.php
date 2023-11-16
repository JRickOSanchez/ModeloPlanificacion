@extends('editar.editar-macro-layout')

@section('title', 'Macro - Crear acento')
@section('slot')

    <form method="POST" action="{{route('api.macro.acento.crear', parameters: ['id' =>$macro->id])}}">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text"
                           id="nombre"
                           class="form-control"
                           name="nombre"
                           value="{{ old('nombre') }}"
                           placeholder="Nombre para el acento">
                </div>

                @if ($errors->has('nombre'))
                    <p class="text-danger">{{ $errors->get('nombre')[0] }}</p>
                @endif
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="sport">Semanas</label>
                    <input type="number"
                           id="semanas"
                           class="form-control"
                           name="semanas"
                           value="{{ old('semanas') }}"
                           placeholder="Número de semanas del acento">
                </div>

                @if ($errors->has('semanas'))
                    <p class="text-danger">{{ $errors->get('semanas')[0] }}</p>
                @endif
            </div>
        </div>
        <div class="form-row mt-1 align-items-center">
            <div class="col-6">
                <button class="btn btn-secondary">Continuar</button>
            </div>
        </div>
    </form>

@endsection