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
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="firstName">Nombre</label>
                                                <input type="email"
                                                       class="form-control"
                                                       id="firstName"
                                                       placeholder="Nombre para el macro">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="secondName">Deporte</label>
                                                <input type="email"
                                                       class="form-control"
                                                       id="secondName"
                                                       placeholder="Deporte del macro">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="firstName">Fecha de inicio</label>
                                                <input type="date"
                                                       class="form-control"
                                                       id="firstName"
                                                       placeholder="Nombre para el macro">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="secondName">Fecha de fin</label>
                                                <input type="date"
                                                       class="form-control"
                                                       id="secondName"
                                                       aria-describedby="secondName"
                                                       placeholder="Deporte del macro">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="firstName">Duración en semanas</label>
                                                <input type="number"
                                                       class="form-control"
                                                       id="firstName"
                                                       placeholder="Duración en número de semanas">
                                            </div>
                                        </div>
                                        <div class="col"></div>
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
            <!-- / tab -->
        </div>
    </div>
</section>

@include('components/bottom')