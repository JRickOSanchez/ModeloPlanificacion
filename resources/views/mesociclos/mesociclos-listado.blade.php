@extends('editar/editar-macro-layout')

@section('title', 'Macro - Mesociclos')
@section('slot')

    <a href="{{ route('macro.editar.mesoiclos.crear', parameters: ['id' => $macro->id])  }}"
       class="btn btn-with-ico btn-primary mb-5">
        Agregar mesociclo <i class="icon-plus2"></i>
    </a>

    @php($counter = 1)

    @php($colors = [
        'GEN'  => 'bg-info',
        'ESP'  => 'bg-warning',
        'COMP' => 'bg-danger',
    ])

    <div class="container">

        <div class="flex-column">
            <p><b>Colores de etapas: </b></p>
            <p class="text-info">ETAPA GENERAL</p>
            <p class="text-warning">ETAPA ESPECIAL</p>
            <p class="text-danger">ETAPA COMPETITIVO</p>
        </div>

        <p class="pt-4"><b>Distribucion por periodos / etapas: </b></p>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" class="bg-success text-white">Mesociclos</th>

                        @foreach($macro->mesociclos as $mesociclo)
                            <th scope="col" class="bg-success text-white bold">{{ $counter++ }}</th>
                        @endforeach

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"  class="bg-success text-white">Microciclos</th>

                        @foreach($macro->mesociclos as $mesociclo)
                            <th class="{{ $colors[$mesociclo->etapa] }}">{{$mesociclo->acento->semanas}}</th>
                        @endforeach

                    </tr>
                    <tr>
                        <th scope="row" class="bg-success text-white">Ciclicidad</th>

                        @foreach($macro->mesociclos as $mesociclo)
                            <th class="{{ $colors[$mesociclo->etapa] }}">{{$mesociclo->acento->nombre}}</th>
                        @endforeach

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

