@extends('editar/editar-macro-layout')

@section('title', 'Macro - Datos generales')
@section('slot')

    <form method="POST" action="{{ url('macro/crear') }}">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text"
                           id="name"
                           class="form-control"
                           name="name"
                           disabled
                           value="{{ $macro->name }}"
                           placeholder="Nombre para el macro">
                </div>

                @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->get('name')[0] }}</p>
                @endif
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="sport">Deporte</label>
                    <input type="text"
                           id="sport"
                           class="form-control"
                           name="sport"
                           disabled
                           value="{{ $macro->sport }}"
                           placeholder="Deporte del macro">
                </div>

                @if ($errors->has('sport'))
                    <p class="text-danger">{{ $errors->get('sport')[0] }}</p>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="start_at">Fecha de inicio</label>
                    <input type="date"
                           disabled
                           id="start_at"
                           class="form-control"
                           value="{{ $macro->start_at->format('Y-m-d') }}"
                           name="start_at">
                </div>

                @if ($errors->has('start_at'))
                    <p class="text-danger">{{ $errors->get('start_at')[0] }}</p>
                @endif
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="end_at">Fecha de fin</label>
                    <input type="date"
                           id="end_at"
                           name="end_at"
                           class="form-control"
                           disabled
                           value="{{ $macro->end_at->format('Y-m-d') }}">
                </div>

                @if ($errors->has('end_at'))
                    <p class="text-danger">{{ $errors->get('end_at')[0] }}</p>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="branch">Rama</label>
                    <input type="text"
                           id="branch"
                           name="branch"
                           class="form-control"
                           disabled
                           value="{{ $macro->branch }}"
                           placeholder="Rama del deporte">
                </div>

                @if ($errors->has('branch'))
                    <p class="text-danger">{{ $errors->get('branch')[0] }}</p>
                @endif
            </div>
            <div class="col"></div>
        </div>
    </form>
@endsection