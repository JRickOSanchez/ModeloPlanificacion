@extends('editar.editar-macro-layout')

@section('title', 'Macro - Crear acento')
@section('slot')

    <div class="row">

        <h5><b>Acento:</b> {{ $nombre }}</h5>
        <h5> - <b>Semanas:</b> {{ $semanas }}</h5>
    </div>


    <form method="POST" action="{{route('api.macro.acento.paso-2', parameters: [
        'id' => $macro->id,
        'nombre' => $nombre,
        'semanas' => $semanas
    ])}}">
        @csrf
        <div class="form-row">
            @for ($i = 1; $i <= $semanas; $i++)
                <div class="col-6">
                    <div class="form-group">
                        <label for="sem_{{ $i }}">Semana {{ $i }}</label>
                        <input type="number"
                               id="sem_{{ $i }}"
                               class="form-control"
                               name="sem_{{ $i }}"
                               value="{{ old('sem_' . $i) }}"
                               placeholder="Porcentaje para semana {{ $i }}">
                    </div>

                    @if ($errors->has('sem_' . $i))
                        <p class="text-danger">{{ $errors->get('sem_' . $i)[0] }}</p>
                    @endif
                </div>
            @endfor


        </div>
        <div class="form-row mt-1 align-items-center">
            <div class="col-6">
                <button class="btn btn-secondary">Guardar</button>
            </div>
        </div>
    </form>

@endsection