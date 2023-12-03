@extends('editar/editar-macro-layout')
@section('title', 'Macro - Mesociclos - Crear')
@section('slot')

    @php($macro->load('acentos'))

    <p class="text-danger">{{ session('errores') }}</p>

    <form method="POST"
          action="{{ route('macro.editar.mesoiclos.guardar', parameters: ['id' => $macro->id])}} " class="pb-20">
        <div class="form-group">
            <label for="mesociclo pt-10">Seleccionar mesociclo:</label>

            @csrf

            <input hidden
                   type="text"
                   id="macro_id"
                   name="macro_id"
                   value="{{ $macro->id }}">

            <select class="form-control" id="mesociclo" name="acento_id">
                <option value="">Seleccionar</option>

                @foreach ($macro->acentos as $acento)
                    <option
                            {{ old('acento_id') == $acento->id ? 'selected': '' }}
                            value="{{ $acento->id }}">
                        Microciclos: {{ $acento->semanas }} - Ciclicidad: {{ $acento->nombre }}</option>
                @endforeach

            </select>

            @if ($errors->has('acento_id'))
                <p class="text-danger">{{ $errors->get('acento_id')[0] }}</p>
            @endif

            <label for="mesociclo" class="pt-4">Etapa:</label>

            <select class="form-control" id="mesociclo" name="etapa">
                <option value="">Seleccionar</option>
                <option
                        {{ old('etapa') == 'GEN' ? 'selected': '' }}
                        value="GEN">General</option>
                <option
                        {{ old('etapa') == 'ESP' ? 'selected': '' }}
                        value="ESP">Especial</option>
                <option
                        {{ old('etapa') == 'COMP' ? 'selected': '' }}
                        value="COMP">Competitivo</option>
            </select>

            @if ($errors->has('etapa'))
                <p class="text-danger">{{ $errors->get('etapa')[0] }}</p>
            @endif

        </div>

        <div class="form-row mt-1 align-items-center">
            <div class="col-6">
                <button class="btn btn-secondary">Guardar</button>
            </div>
        </div>
    </form>

@endsection

