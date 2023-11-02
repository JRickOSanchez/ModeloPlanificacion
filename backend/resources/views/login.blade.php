<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portal</title>
    <link rel="stylesheet" href="/assets/dist/vendor.css"/>
    <link rel="stylesheet" href="/assets/dist/style.css"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121642637-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-121642637-2');
    </script>

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
                        {{$errors}}
                        <div class="accordion-content" data-content>
                            <div class="accordion-content-wrapper">
                                <form method="POST" action="{{ url('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Correo electrónico</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                               autocomplete="false"
                                               placeholder="correo@potros.itson.edu.mx" name="email">

                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Contraseña</label>
                                        <input type="password" placeholder="***********" class="form-control"
                                               autocomplete="false"
                                               id="exampleFormControlInput2" name="password">

                                        @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif

                                    </div>
                                    <button class="btn btn-primary btn-block">Acceder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="accordion" data-accordion>--}}
                    {{--                        <div class="accordion-control" data-control>--}}
                    {{--                            <h5>Create Account</h5>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="accordion-content" data-content>--}}
                    {{--                            <div class="accordion-content-wrapper">--}}
                    {{--                                <form>--}}
                    {{--                                    <div class="form-group">--}}
                    {{--                                        <label for="exampleFormControlInput3">Email address</label>--}}
                    {{--                                        <input type="email" class="form-control" id="exampleFormControlInput3"--}}
                    {{--                                               placeholder="name@example.com">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="form-group">--}}
                    {{--                                        <label for="exampleFormControlInput4">Password</label>--}}
                    {{--                                        <input type="password" class="form-control" id="exampleFormControlInput4">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="form-group">--}}
                    {{--                                        <label for="exampleFormControlInput5">Repeat Password</label>--}}
                    {{--                                        <input type="password" class="form-control" id="exampleFormControlInput5">--}}
                    {{--                                    </div>--}}
                    {{--                                    <a href="" class="btn btn-primary btn-block">Sign In</a>--}}
                    {{--                                </form>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/assets/dist/vendor.js"></script>
<script src="/assets/dist/app.js"></script>
</body>
</html>