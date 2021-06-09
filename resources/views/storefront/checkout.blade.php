@php
    $html_tag_data = [];
    $title = 'Checkout';
    $description= 'Ecommerce Checkout Page'
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/timepicker.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/storefront.checkout.js') }}"></script>
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
                <h2 class="small-title">Address</h2>

                <form id="addressForm" class="tooltip-label-end" novalidate>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input class="form-control" name="addressFirstName"/>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input class="form-control" name="addressLastName"/>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input class="form-control" name="addressPhone"/>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Company(Optional)</label>
                                    <input class="form-control" name="addressCompany"/>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4 mb-3">
                                    <div class="w-100">
                                        <label class="form-label">State</label>
                                        <select class="select-single-states" id="addressState"
                                                name="addressState"></select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="w-100">
                                        <label class="form-label">City</label>
                                        <select class="select-single-cities" id="addressCity"
                                                name="addressCity"></select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Zip Code</label>
                                    <input class="form-control" name="addressZipCode"/>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Detail</label>
                                    <textarea class="form-control" rows="3" name="addressDetail"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <h2 class="small-title">Shipment</h2>
                <form>
                    <div class="card mb-5">
                        <div class="card-body">
                            <label class="form-label">Zip Code</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="stackedRadio" id="stackedRadio1"/>
                                <label class="form-check-label" for="stackedRadio1">Free standard delivery</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="stackedRadio" id="stackedRadio2"/>
                                <label class="form-check-label" for="stackedRadio2">Same day delivery for $12.00</label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>

                <h2 class="small-title">Payment</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-auto mb-3">
                                    <label class="form-label">Card Number</label>
                                    <input class="form-control w-100 sw-sm-40"/>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-auto mb-3">
                                    <label class="form-label">Name on the Card</label>
                                    <input class="form-control w-100 sw-sm-40"/>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-auto mb-3">
                                    <label class="form-label">CCV</label>
                                    <input class="form-control sw-8"/>
                                </div>
                                <div class="col-auto mb-0">
                                    <div class="time-picker-container">
                                        <label class="form-label">Expiration Date</label>
                                        <input
                                            class="form-control time-picker"
                                            id="timePickerStandard"
                                            data-hours24="1,2,3,4,5,6,7,8,9,10,11,12"
                                            data-minutes="21,22,23,24,25,26,27,28,29,30"
                                        />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-auto order-0 order-lg-1">
                <!-- Summary Start -->
                <h2 class="small-title">Summary</h2>
                <div class="card mb-5 w-100 sw-lg-35">
                    <div class="card-body mb-n5">
                        <div class="mb-3">
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
                        <div class="form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="customCheck1"/>
                            <label class="form-check-label" for="customCheck1">
                                I have read and accept the
                                <a href="#" target="_blank">terms and conditions.</a>
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex flex-column flex-sm-row justify-content-between mb-5 w-100">
                                <button class="btn btn-icon btn-icon-end btn-primary w-100" type="button">
                                    <span>Purchase</span>
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
