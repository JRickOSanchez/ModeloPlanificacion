@include('components.header')
@include('components.page_header')

<section class="bg-light pt-2">
    <div class="container">
        <div class="tab-content" id="demo-2">
            <div class="tab-pane show active" id="demo-2-5" role="tabpanel" aria-labelledby="demo-2-5">

                <!-- horizontal -->
                <section class="component">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4>Macro</h4>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="component-1">

                        <div class="tab-pane show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
                            <div class="component-example">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="nav nav-pills mb-2">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#demo-1-1">First Tab</a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#demo-1-2">Second Tab</a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#demo-1-3">Third Tab</a>
                                            </div>
                                            <div class="tab-content" id="demo-1">
                                                <div class="tab-pane show active" id="demo-1-1" role="tabpanel" aria-labelledby="demo-1-1">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error maxime minima commodi vel excepturi repudiandae numquam beatae dignissimos quod accusamus ab perferendis, quibusdam, officiis aspernatur aut vero assumenda voluptatum pariatur.</p>
                                                </div>
                                                <div class="tab-pane" id="demo-1-2" role="tabpanel" aria-labelledby="demo-1-2">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat unde veniam qui dicta exercitationem deserunt vel suscipit quas sequi at inventore perferendis aperiam nisi itaque necessitatibus, saepe molestiae iste, accusamus.</p>
                                                </div>
                                                <div class="tab-pane" id="demo-1-3" role="tabpanel" aria-labelledby="demo-1-3">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor voluptas voluptate, asperiores maiores perspiciatis itaque aliquam ut blanditiis qui!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="nav nav-tabs mb-2">
                                                <a class="nav-item nav-link active" data-toggle="tab" href="#demo-2-1">First Tab</a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-2">Second Tab</a>
                                                <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-3">Third Tab</a>
                                            </div>
                                            <div class="tab-content" id="demo-2">
                                                <div class="tab-pane show active" id="demo-2-1" role="tabpanel" aria-labelledby="demo-2-1">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error maxime minima commodi vel excepturi repudiandae numquam beatae dignissimos quod accusamus ab perferendis, quibusdam, officiis aspernatur aut vero assumenda voluptatum pariatur.</p>
                                                </div>
                                                <div class="tab-pane" id="demo-2-2" role="tabpanel" aria-labelledby="demo-2-2">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat unde veniam qui dicta exercitationem deserunt vel suscipit quas sequi at inventore perferendis aperiam nisi itaque necessitatibus, saepe molestiae iste, accusamus.</p>
                                                </div>
                                                <div class="tab-pane" id="demo-2-3" role="tabpanel" aria-labelledby="demo-2-3">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor voluptas voluptate, asperiores maiores perspiciatis itaque aliquam ut blanditiis qui! Porro, ad eligendi sequi omnis deleniti obcaecati quod ut, optio eos?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- / horizontal -->
            </div>
        </div>
    </div>
</section>

@include('components/bottom')