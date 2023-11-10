@include('components.header')
@include('components.page_header')

<section class="bg-light pt-2">
    <div class="container">
        <div class="tab-content" id="demo-2">
            <!-- tab payment -->
            <div class="tab-pane show active" id="demo-2-5" role="tabpanel" aria-labelledby="demo-2-5">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive-md">
                                    <table class="table table-lined">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Fecha de creación</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach (\App\Models\Macro::all() as $macro)
                                            <tr>
                                                <th scope="row">{{ $macro->name }}</th>
                                                <td>{{ $macro->created_at }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-ico btn-warning">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-ico btn-danger">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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