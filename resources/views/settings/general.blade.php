@php
    $html_tag_data = [];
    $title = 'General Settings';
    $description= 'Ecommerce General Settings Page'
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
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/settings.general.js') }}"></script>
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
                            <span class="text-small align-middle">Settings</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="w-100 d-md-none"></div>
                <div class="col-auto d-flex align-items-end justify-content-end">
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start">
                        <i data-cs-icon="save"></i>
                        <span>Save</span>
                    </button>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row mb-n5">
            <div class="col-xl-4">
                <div class="mb-5">
                    <h2 class="small-title">Details</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Store Name</label>
                                    <input type="text" class="form-control" value="My Awesome Store"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" value="info@myawesomestore.com" disabled/>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Store Description</label>
                                    <textarea class="form-control" rows="5">
Dessert gummies soufflé toffee cake. Sesame snaps marzipan sesame snaps gummies oat cake sesame snaps. Cheesecake bonbon chocolate bar candy.
              </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="mb-5">
                    <h2 class="small-title">Location</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3 w-100">
                                    <label class="form-label">Store Location</label>
                                    <select class="select-single-no-search">
                                        <option label="&nbsp;"></option>
                                        <option value="BR">BR</option>
                                        <option value="DE">DE</option>
                                        <option value="FR">FR</option>
                                        <option value="JP" selected>JP</option>
                                        <option value="US">US</option>
                                        <option value="UK">UK</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <div class="mb-3 w-100">
                                    <label class="form-label">Selling Location</label>
                                    <select class="select-single-no-search">
                                        <option label="&nbsp;"></option>
                                        <option value="BR">BR</option>
                                        <option value="DE">DE</option>
                                        <option value="FR">FR</option>
                                        <option value="JP" selected>JP</option>
                                        <option value="US">US</option>
                                        <option value="UK">UK</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <div class="w-100 mb-0">
                                    <label class="form-label">Shipping Location</label>
                                    <select class="select-single-no-search">
                                        <option label="&nbsp;"></option>
                                        <option value="BR">BR</option>
                                        <option value="DE">DE</option>
                                        <option value="FR">FR</option>
                                        <option value="JP" selected>JP</option>
                                        <option value="US">US</option>
                                        <option value="UK">UK</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="small-title">Business</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Business Name</label>
                                    <input type="text" class="form-control" value="My Awesome Corp."/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+643451134"/>
                                </div>
                                <div class="mb-3 w-100">
                                    <label class="form-label">Country</label>
                                    <select class="select-single-no-search">
                                        <option label="&nbsp;"></option>
                                        <option value="BR">Brazil</option>
                                        <option value="DE">Deutschland</option>
                                        <option value="FR">France</option>
                                        <option value="JP" selected>Japan</option>
                                        <option value="US">United States of America</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <div class="mb-3 w-100">
                                    <label class="form-label">City</label>
                                    <select class="select-single-no-search">
                                        <option label="&nbsp;"></option>
                                        <option value="Tokyo" selected>Tokyo</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" value="160-0023"/>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control"
                                           value="4 Chome-38-5 Nishishinjuku, Shinjuku City"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="small-title">Currency Options</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3 w-100">
                                    <label class="form-label">Currency</label>
                                    <select class="select-single-no-search">
                                        <option label="&nbsp;"></option>
                                        <option value="R$">R$</option>
                                        <option value="€">€</option>
                                        <option value="¥" selected>¥</option>
                                        <option value="$">$</option>
                                        <option value="£">£</option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Thousand Separator</label>
                                    <input type="text" class="form-control" value=","/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Decimal Separator</label>
                                    <input type="text" class="form-control" value="."/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Number of Decimals</label>
                                    <input type="text" class="form-control" value="2"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
