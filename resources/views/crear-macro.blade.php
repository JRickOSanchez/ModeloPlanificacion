@include('components.header')
@include('components.page_header')

<section class="bg-light pt-2">
    <div class="container">
        <div class="tab-content" id="demo-2">
            <div class="tab-pane show active" id="demo-2-5" role="tabpanel" aria-labelledby="demo-2-5">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="row">
                            <div class="col">
                                <h5 class="mb-2 fs-20 font-weight-normal">Crear nuevo MACRO</h5>
                                <form method="POST" action="{{url('macro/crear')}}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name">Nombre</label>
                                                <input type="text"
                                                       id="name"
                                                       class="form-control"
                                                       name="name"
                                                       value="{{ old('name') }}"
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
                                                       value="{{ old('sport') }}"
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
                                                       id="start_at"
                                                       class="form-control"
                                                       value="{{ old('start_at') }}"
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
                                                       value="{{ old('end_at') }}">
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
                                                       value="{{ old('branch') }}"
                                                       placeholder="Rama del deporte">
                                            </div>


                                            @if ($errors->has('branch'))
                                                <p class="text-danger">{{ $errors->get('branch')[0] }}</p>
                                            @endif
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="weeks">Semanas de duración</label>
                                                <input type="text"
                                                       id="weeks"
                                                       disabled
                                                       value=""
                                                       class="form-control"
                                                       placeholder="Semanas de duración">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mt-1 align-items-center">
                                        <div class="col-6">
                                            <button class="btn btn-secondary">Guardar y continuar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const startAt = document.getElementById('start_at');
    const endAt   = document.getElementById('end_at');

    startAt.addEventListener('change', (event) => {
        tryCalculate();
    });

    endAt.addEventListener('change', (event) => {
        tryCalculate();
    });

    function calculateWeeks() {
        const date1 = new Date(startAt.value);
        const date2 = new Date(endAt.value);

        if (date2 < date1) {
            document.getElementById('weeks').value = '';
            return;
        }

        const diferenciaEnMilisegundos = Math.abs(date2 - date1);

        const semanas = Math.floor(diferenciaEnMilisegundos / (1000 * 60 * 60 * 24 * 7));

        document.getElementById('weeks').value = semanas;
    }

    function tryCalculate() {
        if (startAt.value.length > 0 && endAt.value.length > 0) {
            calculateWeeks();
        }
    }

    tryCalculate();

</script>

@include('components/bottom')