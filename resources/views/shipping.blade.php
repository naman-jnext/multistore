@php
    $html_tag_data = [];
    $title = 'Shipping';
    $description= 'Ecommerce Shipping Page'
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">Shipping</h1>
                    </div>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Courier Services Start -->
        <div class="mb-5">
            <h2 class="small-title">Courier Services</h2>
            <div class="card mb-2">
                <div class="row g-0 card-body">
                    <div class="col-auto">
                        <img src="{{ asset('/img/brand/dhl.jpg') }}" class="card-img rounded-md h-100 sh-6 sw-9" alt="thumb"/>
                    </div>
                    <div class="col">
                        <div class="ps-4">
                            <div class="row mb-1">
                                <div class="col">
                                    <div class="heading text-primary mb-1">DHL</div>
                                    <div class="mb-3">Lollipop apple pie lollipop toffee danish powder croissant.</div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-icon btn-icon btn-icon-only btn-outline-primary"
                                            type="button">
                                        <i data-cs-icon="gear"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">OPTIONS</div>
                                <div class="text-alternate">Standard Shipping</div>
                                <div class="text-alternate">Priority Shipping</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">LOCATION</div>
                                <div class="text-alternate">Domestic</div>
                            </div>
                            <div>
                                <div class="text-small text-muted">STATUS</div>
                                <div class="badge bg-outline-primary">ACTIVE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="row g-0 card-body">
                    <div class="col-auto">
                        <img src="{{ asset('/img/brand/fedex.jpg') }}" class="card-img rounded-md h-100 sh-6 sw-9" alt="thumb"/>
                    </div>
                    <div class="col">
                        <div class="ps-4">
                            <div class="row mb-1">
                                <div class="col">
                                    <div class="heading text-primary mb-1">FedEx</div>
                                    <div class="mb-3">Dessert gummies soufflé toffee cake. Sesame snaps sesame snaps
                                        gummies oat cake sesame snaps.
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-icon btn-icon btn-icon-only btn-outline-primary"
                                            type="button">
                                        <i data-cs-icon="gear"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">OPTIONS</div>
                                <div class="text-alternate">Standard Shipping</div>
                                <div class="text-alternate">Priority Shipping</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">LOCATION</div>
                                <div class="text-alternate">International</div>
                            </div>
                            <div>
                                <div class="text-small text-muted">STATUS</div>
                                <div class="badge bg-outline-primary">ACTIVE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2 opacity-75">
                <div class="row g-0 card-body">
                    <div class="col-auto">
                        <img src="{{ asset('/img/brand/ups.jpg') }}" class="card-img rounded-md h-100 sh-6 sw-9" alt="thumb"/>
                    </div>
                    <div class="col">
                        <div class="ps-4">
                            <div class="row mb-1">
                                <div class="col">
                                    <div class="heading text-primary mb-1">UPSP</div>
                                    <div class="mb-3">Chocolate bar tootsie roll pastry icing dragée. Tiramisu danish
                                        donut tiramisu biscuit.
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-icon btn-icon btn-icon-only btn-outline-primary"
                                            type="button">
                                        <i data-cs-icon="gear"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">OPTIONS</div>
                                <div class="text-alternate">Standard Shipping</div>
                                <div class="text-alternate">Priority Shipping</div>
                            </div>
                            <div class="mb-3">
                                <div class="text-small text-muted">LOCATION</div>
                                <div class="text-alternate">International</div>
                            </div>
                            <div>
                                <div class="text-small text-muted">STATUS</div>
                                <div class="badge bg-outline-muted">INACTIVE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courier Services End -->

        <!-- Box Sizes Start -->
        <h2 class="small-title">Box Sizes</h2>
        <div class="row g-2">
            <div class="col-6 col-xl-3 sh-20" data-intro="Category card!" data-step="3">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                        <div
                            class="sw-5 sh-5 mb-3 d-inline-block bg-primary d-flex justify-content-center align-items-center rounded-xl mx-auto">
                            <div class="text-white">S</div>
                        </div>
                        <p class="heading mt-3">Small</p>
                        <div class="text-extra-small fw-medium text-muted">15x20x5 cm</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-xl-3 sh-20" data-intro="Category card!" data-step="3">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                        <div
                            class="sw-5 sh-5 mb-3 d-inline-block bg-primary d-flex justify-content-center align-items-center rounded-xl mx-auto">
                            <div class="text-white">M</div>
                        </div>
                        <p class="heading mt-3">Medium</p>
                        <div class="text-extra-small fw-medium text-muted">25x30x5 cm</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-xl-3 sh-20" data-intro="Category card!" data-step="3">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                        <div
                            class="sw-5 sh-5 mb-3 d-inline-block bg-primary d-flex justify-content-center align-items-center rounded-xl mx-auto">
                            <div class="text-white">L</div>
                        </div>
                        <p class="heading mt-3">Large</p>
                        <div class="text-extra-small fw-medium text-muted">40x50x15 cm</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-xl-3 sh-20" data-intro="Category card!" data-step="3">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                        <div class="sw-6 sh-6 p-1 border border-dashed rounded-xl mx-auto">
                            <div
                                class="text-white bg-separator w-100 h-100 d-flex justify-content-center align-items-center mx-auto rounded-xl">
                                <i data-cs-icon="plus"></i>
                            </div>
                        </div>
                        <p class="heading mt-3 text-muted">Add New</p>
                        <div class="text-extra-small fw-medium text-muted">4 OPTIONS</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Box Sizes End -->
    </div>
@endsection
