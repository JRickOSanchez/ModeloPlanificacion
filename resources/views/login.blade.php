<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modelo planificación</title>
    <link rel="stylesheet" href="/assets/dist/vendor.css"/>
    <link rel="stylesheet" href="/assets/dist/style.css"/>
</head>
<body>

<div class="viewport">
    <div class="image image-overlay" style="background-image:url('/assets/img/polideportivo.jpg')"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-lg-5">
                <div class="accordion-group accordion-group-portal" data-accordion-group>
                    <div class="accordion open" data-accordion>
                        <div class="accordion-control" data-control>
                            <h5>Acceder a PoliMacro</h5>
                        </div>
                        <div class="accordion-content" data-content>
                            <div class="accordion-content-wrapper">
                                <form method="POST" action="{{ url('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Correo electrónico</label>
                                        <input type="email"
                                               class="form-control"
                                               id="email"
                                               autocomplete="false"
                                               value="{{ old('email') }}"
                                               placeholder="correo@potros.itson.edu.mx" name="email">

                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input type="password"
                                               class="form-control"
                                               autocomplete="false"
                                               placeholder="***********"
                                               value="{{ old('email') }}"
                                               id="password" name="password">

                                        @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif

                                    </div>
                                    <button class="btn btn-primary btn-block">Acceder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/assets/dist/vendor.js"></script>
<script src="/assets/dist/app.js"></script>
</body>
</html>