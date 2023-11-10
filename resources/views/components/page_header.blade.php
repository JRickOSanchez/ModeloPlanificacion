<section class="p-0 bg-light">
    <div class="image image-overlay image-cover" style="background-image:url('/assets/img/polideportivo.jpg')"
         data-top-top="transform: translateY(0px);"
         data-top-bottom="transform: translateY(-250px);"></div>
    <div class="container">
        <div class="row justify-content-center align-items-end vh-50 mb-5">
            <div class="col col-md-10 col-lg-8">
                <div class="row align-items-center">
                    <div class="col-4 col-lg-3">
                        <img class="mr-3 avatar avatar-xl rounded" src="/assets/img/profile.jpg">
                    </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="mb-0"><b>Macro</b> Poli</h2>
                                <span class="text-muted">{{ Auth::user()->email }}</span>
                            </div>
                            <div class="col-md-4 text-left text-md-right">
                                <a href="{{ url('crear-macro') }}"
                                   class="btn btn-rounded btn-ico btn-white"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Crear nuevo MACRO">
                                    <i class="icon-plus2 fs-20"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>