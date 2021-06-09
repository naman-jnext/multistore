@php
    $html_tag_data = [];
    $title = 'Cart';
    $description= 'Ecommerce Cart Page'
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/input-spinner.min.js') }}"></script>
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                            <span class="text-small align-middle">Storefront</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-12 col-lg order-1 order-lg-0">
                <!-- Items Start -->
                <h2 class="small-title">Items</h2>
                <div class="mb-5">
                    <div class="card mb-2">
                        <div class="row g-0 sh-18 sh-md-14">
                            <div class="col-auto">
                                <img src="{{ asset('/img/product/small/baguette.jpg') }}"
                                     class="card-img card-img-horizontal h-100 sw-9 sw-sm-13 sw-md-15" alt="thumb"/>
                            </div>
                            <div class="col position-relative h-100">
                                <div class="card-body">
                                    <div class="row h-100">
                                        <div class="col-12 col-md-6 mb-2 mb-md-0 d-flex align-items-center">
                                            <div class="pt-0 pb-0 pe-2">
                                                <div class="h6 mb-0 clamp-line" data-line="1">Kommissbrot</div>
                                                <div class="text-muted text-small">Whole Wheat</div>
                                                <div class="mb-0 sw-19">$ 22.60</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 pe-0 d-flex align-items-center">
                                            <div class="input-group spinner sw-11" data-trigger="spinner">
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-down single px-2 d-flex justify-content-center"
                                                            data-spin="down">-
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control text-center px-0" value="4"
                                                       data-rule="quantity"/>
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-up single px-2 d-flex justify-content-center"
                                                            data-spin="up">+
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-6 col-md-3 d-flex justify-content-end justify-content-md-start align-items-center">
                                            <div class="h6 mb-0">$ 124.20</div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate position-absolute t-2 e-2"
                                    type="button">
                                    <i data-cs-icon="error-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-18 sh-md-14">
                            <div class="col-auto">
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}"
                                     class="card-img card-img-horizontal h-100 sw-9 sw-sm-13 sw-md-15" alt="thumb"/>
                            </div>
                            <div class="col position-relative h-100">
                                <div class="card-body">
                                    <div class="row h-100">
                                        <div class="col-12 col-md-6 mb-2 mb-md-0 d-flex align-items-center">
                                            <div class="pt-0 pb-0 pe-2">
                                                <div class="h6 mb-0 clamp-line" data-line="1">Kommissbrot</div>
                                                <div class="text-muted text-small">Whole Wheat</div>
                                                <div class="mb-0 sw-19">$ 15.75</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 pe-0 d-flex align-items-center">
                                            <div class="input-group spinner sw-11" data-trigger="spinner">
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-down single px-2 d-flex justify-content-center"
                                                            data-spin="down">-
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control text-center px-0" value="1"
                                                       data-rule="quantity"/>
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-up single px-2 d-flex justify-content-center"
                                                            data-spin="up">+
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-6 col-md-3 d-flex justify-content-end justify-content-md-start align-items-center">
                                            <div class="h6 mb-0">$ 15.75</div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate position-absolute t-2 e-2"
                                    type="button">
                                    <i data-cs-icon="error-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-18 sh-md-14">
                            <div class="col-auto">
                                <img src="{{ asset('/img/product/small/cornbread.jpg') }}"
                                     class="card-img card-img-horizontal h-100 sw-9 sw-sm-13 sw-md-15" alt="thumb"/>
                            </div>
                            <div class="col position-relative h-100">
                                <div class="card-body">
                                    <div class="row h-100">
                                        <div class="col-12 col-md-6 mb-2 mb-md-0 d-flex align-items-center">
                                            <div class="pt-0 pb-0 pe-2">
                                                <div class="h6 mb-0 clamp-line" data-line="1">Kommissbrot</div>
                                                <div class="text-muted text-small">Whole Wheat</div>
                                                <div class="mb-0 sw-19">$ 8.50</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 pe-0 d-flex align-items-center">
                                            <div class="input-group spinner sw-11" data-trigger="spinner">
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-down single px-2 d-flex justify-content-center"
                                                            data-spin="down">-
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control text-center px-0" value="2"
                                                       data-rule="quantity"/>
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-up single px-2 d-flex justify-content-center"
                                                            data-spin="up">+
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-6 col-md-3 d-flex justify-content-end justify-content-md-start align-items-center">
                                            <div class="h6 mb-0">$ 17.00</div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate position-absolute t-2 e-2"
                                    type="button">
                                    <i data-cs-icon="error-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-18 sh-md-14">
                            <div class="col-auto">
                                <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}"
                                     class="card-img card-img-horizontal h-100 sw-9 sw-sm-13 sw-md-15" alt="thumb"/>
                            </div>
                            <div class="col position-relative h-100">
                                <div class="card-body">
                                    <div class="row h-100">
                                        <div class="col-12 col-md-6 mb-2 mb-md-0 d-flex align-items-center">
                                            <div class="pt-0 pb-0 pe-2">
                                                <div class="h6 mb-0 clamp-line" data-line="1">Yeast Karavai</div>
                                                <div class="text-muted text-small">Sourdough</div>
                                                <div class="mb-0 sw-19">$ 18.75</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 pe-0 d-flex align-items-center">
                                            <div class="input-group spinner sw-11" data-trigger="spinner">
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-down single px-2 d-flex justify-content-center"
                                                            data-spin="down">-
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control text-center px-0" value="2"
                                                       data-rule="quantity"/>
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-up single px-2 d-flex justify-content-center"
                                                            data-spin="up">+
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-6 col-md-3 d-flex justify-content-end justify-content-md-start align-items-center">
                                            <div class="h6 mb-0">$ 37.50</div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate position-absolute t-2 e-2"
                                    type="button">
                                    <i data-cs-icon="error-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-18 sh-md-14">
                            <div class="col-auto">
                                <img src="{{ asset('/img/product/small/michetta.jpg') }}"
                                     class="card-img card-img-horizontal h-100 sw-9 sw-sm-13 sw-md-15" alt="thumb"/>
                            </div>
                            <div class="col position-relative h-100">
                                <div class="card-body">
                                    <div class="row h-100">
                                        <div class="col-12 col-md-6 mb-2 mb-md-0 d-flex align-items-center">
                                            <div class="pt-0 pb-0 pe-2">
                                                <div class="h6 mb-0 clamp-line" data-line="1">Bammy</div>
                                                <div class="text-muted text-small">Sourdough</div>
                                                <div class="mb-0 sw-19">$ 12.00</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 pe-0 d-flex align-items-center">
                                            <div class="input-group spinner sw-11" data-trigger="spinner">
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-down single px-2 d-flex justify-content-center"
                                                            data-spin="down">-
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control text-center px-0" value="3"
                                                       data-rule="quantity"/>
                                                <div class="input-group-text">
                                                    <button type="button"
                                                            class="spin-up single px-2 d-flex justify-content-center"
                                                            data-spin="up">+
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-6 col-md-3 d-flex justify-content-end justify-content-md-start align-items-center">
                                            <div class="h6 mb-0">$ 36.00</div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-sm btn-icon btn-icon-only btn btn-foreground-alternate position-absolute t-2 e-2"
                                    type="button">
                                    <i data-cs-icon="error-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Items End -->

                <!-- Banners Start -->
                <div class="row g-2">
                    <div class="col-12">
                        <h2 class="small-title">Worth Checking</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                        <img src="{{ asset('/img/banner/cta-square-1.jpg') }}" class="card-img h-100 scale"
                             alt="card image"/>
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                            <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Seasoned Breads</div>
                                <a href="/Storefront/Filters"
                                   class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                    <i data-cs-icon="chevron-right"></i>
                                    <span>View</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                        <img src="{{ asset('/img/banner/cta-square-2.jpg') }}" class="card-img h-100 scale"
                             alt="card image"/>
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                            <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Herbal and Vegan</div>
                                <a href="/Storefront/Filters"
                                   class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                    <i data-cs-icon="chevron-right"></i>
                                    <span>View</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                        <img src="{{ asset('/img/banner/cta-square-3.jpg') }}" class="card-img h-100 scale"
                             alt="card image"/>
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                            <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Fruit Mixed Dough</div>
                                <a href="/Storefront/Filters"
                                   class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                    <i data-cs-icon="chevron-right"></i>
                                    <span>View</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                        <img src="{{ asset('/img/banner/cta-square-4.jpg') }}" class="card-img h-100 scale"
                             alt="card image"/>
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                            <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                                <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Berries, Nuts and
                                    Sugar
                                </div>
                                <a href="/Storefront/Filters"
                                   class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                    <i data-cs-icon="chevron-right"></i>
                                    <span>View</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banners End -->
        </div>

        <div class="col-12 col-lg-auto order-0 order-lg-1">
            <!-- Summary Start -->
            <h2 class="small-title">Summary</h2>
            <div class="card mb-5 w-100 sw-lg-35">
                <div class="card-body mb-n5">
                    <div class="mb-4">
                        <div class="mb-2">
                            <p class="text-small text-muted mb-1">ITEMS</p>
                            <p>
                                <span class="text-alternate">5</span>
                            </p>
                        </div>
                        <div class="mb-2">
                            <p class="text-small text-muted mb-1">TOTAL</p>
                            <p>
                <span class="text-alternate">
                  <span class="text-small text-muted">$</span>
                  285.25
                </span>
                            </p>
                        </div>
                        <div class="mb-2">
                            <p class="text-small text-muted mb-1">SHIPPING</p>
                            <p>
                <span class="text-alternate">
                  <span class="text-small text-muted">$</span>
                  12.50
                </span>
                            </p>
                        </div>
                        <div class="mb-2">
                            <p class="text-small text-muted mb-1">SALE</p>
                            <p>
                <span class="text-alternate">
                  <span class="text-small text-muted">$</span>
                  -24.50
                </span>
                            </p>
                        </div>
                        <div class="mb-2">
                            <p class="text-small text-muted mb-1">GRAND TOTAL</p>
                            <div class="cta-2">
                <span>
                  <span class="text-small text-muted cta-2">$</span>
                  321.50
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column flex-sm-row justify-content-between mb-5 w-100">
                            <button class="btn btn-icon btn-icon-end btn-primary w-100" type="button">
                                <span>Checkout</span>
                                <i data-cs-icon="chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Summary End -->
        </div>
    </div>
    </div>
@endsection
