@include('components.header')
@include('components.page_header')

<section class="bg-light pt-2">
    <div class="container">
        <div class="tab-content" id="demo-2">
            <div class="tab-pane show active" id="demo-2-5" role="tabpanel">
                <section class="component">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4>@yield('title') - {{ $macro->name }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="component-1">
                        <div class="tab-pane show active" role="tabpanel">
                            <div class="component-example">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="nav nav-pills mb-2">

                                                <a class="nav-item nav-link
                                                {{ Route::current()->getName() == 'macro.editar' ? 'active' : '' }}"
                                                   data-toggle="tab"
                                                   href="{{ route('macro.editar.generales', parameters: ['id' => $macro->id]) }}">
                                                    Datos generales
                                                </a>

                                                <a class="nav-item nav-link
                                                {{ Route::current()->getName() == 'macro.editar.acentos' ? 'active' : '' }}"
                                                   data-toggle="tab"
                                                   href="{{ route('macro.editar.acentos', parameters: ['id' => $macro->id]) }}">
                                                    Acentos
                                                </a>
                                            </div>
                                            <div class="px-2">
                                                @yield('slot')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@include('components/bottom')