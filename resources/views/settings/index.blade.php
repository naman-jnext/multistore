@php
    $html_tag_data = [];
    $title = 'Settings';
    $description= 'Ecommerce Settings Page'
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
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Settings List Start -->
        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="gear" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">General</div>
                                </div>
                                <div class="text-alternate">
                                    Lollipop apple pie lollipop toffee croissant. Sugar plum fruitcake cotton candy
                                    lemon drops. Carrot cake fruitcake dragée pie cotton
                                    candy sesame snaps lollipop croissant.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="building" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">Company</div>
                                </div>
                                <div class="text-alternate">
                                    Cheesecake bonbon chocolate bar. Tart sugar plum candy canes toffee sweet roll
                                    muffin oat cake. Chupa chups cookie icing tart tiramisu
                                    chocolate cake.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="folders" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">Categories</div>
                                </div>
                                <div class="text-alternate">
                                    Marshmallow donut sweet roll. Wafer tootsie roll gingerbread croissant ice cream.
                                    Sweet roll ice cream marzipan croissant soufflé
                                    fruitcake.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="pin" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">Localisation</div>
                                </div>
                                <div class="text-alternate">
                                    Chocolate bar sesame snaps tootsie roll donut apple pie. Tart chocolate cake pastry
                                    cupcake croissant chocolate. Gingerbread danish
                                    tiramisu.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="coin" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">Currencies</div>
                                </div>
                                <div class="text-alternate">
                                    Halvah jujubes bonbon gummies caramels. Carrot cake pie caramels caramels. Wafer
                                    tootsie roll gingerbread croissant ice cream.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="wallet" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">Payment</div>
                                </div>
                                <div class="text-alternate">
                                    Dessert sweet roll cake lollipop. Jelly-o danish donut tiramisu biscuit toffee tart
                                    tootsie roll lemon drops. Lemon drops powder.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="document-full" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">Billing</div>
                                </div>
                                <div class="text-alternate">
                                    Macaroon candy ice cream candy canes chocolate bar sesame snaps jelly pudding
                                    caramels. Dragée macaroon lemon drops icing cupcake
                                    gingerbread.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('/Settings/General') }}" class="card hover-border-primary h-100">
                    <div class="card-body row g-0">
                        <div class="col-auto">
                            <div
                                class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <i data-cs-icon="content" class="text-primary"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-card justify-content-start">
                                <div class="d-flex flex-column justify-content-center mb-2">
                                    <div class="heading text-primary mb-0">Taxes</div>
                                </div>
                                <div class="text-alternate">
                                    Dragée macaroon lemon drops icing cupcake gingerbread. Apple pie caramels tart.
                                    Caramels brownie gummies.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Settings List End -->
    </div>
@endsection
