@extends('editar/editar-macro-layout')

@section('title', 'Macro - Acentos')
@section('slot')

    <a href="{{ route('macro.acento.crear', parameters: ['id' => $macro->id])  }}"
       class="btn btn-with-ico btn-primary">
        Crear nuevo acento <i class="icon-plus2"></i>
    </a>

    <div>

        <h5 class="pt-4">Listado de acentos</h5>
        <p class="pb-2">Acentos pertenecientes al macro</p>

        @php($macro->load('acentos'))
        @php($max = $macro->acentos()->max('semanas'))

        <table class="table table-lined">
            <thead>
            <tr>
                <th scope="col"><b>Nombre</b></th>
                <th scope="col"><b>Acentos</b></th>

                @for ($i = 0; $i < $max; $i++)
                    <th scope="col"></th>
                @endfor
            </tr>
            </thead>
            <tbody>


            @foreach ($macro->acentos as $acento)

                @php($acento->load('distribucion'))

                <tr>
                    <th scope="row">{{ $acento->nombre }}</th>
                    <td>{{ $acento->semanas }}</td>

                    @foreach ($acento->distribucion as $distribucion)
                        <td><b>{{ $distribucion->porcentaje }} %</b></td>
                    @endforeach

                </tr>
            @endforeach
        </table>
    </div>

@endsection

