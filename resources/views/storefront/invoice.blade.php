@php
    $html_tag_data = [];
    $custom_main_class= 'print-restricted';
    $title = 'Product Invoice';
    $description= 'Ecommerce Product Invoice Page'
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'custom_main_class'=> $custom_main_class,
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
            <div class="row">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                            <span class="text-small align-middle">Storefront</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">Invoice</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-center justify-content-end">
                    <a onclick="window.print(); return false;"
                       class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto" href="#">
                        <i data-cs-icon="print"></i>
                        <span>Print</span>
                    </a>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Standard Start -->
        <!-- card-print: removes shadow, margin and padding  -->
        <!-- print-me: removes everyting from main .container except the element with the class -->
        <h2 class="small-title">Standard</h2>
        <div class="card mb-5 card-print print-me">
            <div class="card-body">
                <div class="row d-flex flex-row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="{{ asset('/img/logo/logo-blue-light.svg') }}" class="sw-17" alt="logo"/>
                    </div>
                    <div class="col-12 col-md-6 text-end">
                        <div class="mb-2">ColoredStrategies Inc</div>
                        <div class="text-small text-muted">4 Glamis Avenue, Strathmore Park, Wellington 6022, New
                            Zealand
                        </div>
                        <div class="text-small text-muted">+6443884455</div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="separator separator-light"></div>
                    </div>
                </div>
                <div class="row g-1 mb-5">
                    <div class="col-12 col-md-8">
                        <div class="py-3">
                            <div>Blaine Cottrell</div>
                            <div>55 Esk Street, Invercargill 9810, New Zealand</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="py-3 text-md-end">
                            <div>Invoice #: 741</div>
                            <div>02.02.2019</div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row mb-4 d-none d-sm-flex">
                        <div class="col-6">
                            <p class="mb-0 text-small text-muted">ITEM NAME</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-small text-muted">COUNT</p>
                        </div>
                        <div class="col-3 text-end">
                            <p class="mb-0 text-small text-muted">PRICE</p>
                        </div>
                    </div>

                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Spelt Bread</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">3 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 14.82</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Naan</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 8.97</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Cozonac</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 18.24</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Michetta</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 4.24</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Arepa</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">3 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 6.27</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Pita</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 10.97</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Zopf</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 21.24</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Kommissbrot</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">3 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 42.15</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Ruisreikäleipä</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">1 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 11.15</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Cornbread</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 35.25</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Yeast Karavai</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">5 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 63.75</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Bammy</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 13.25</p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-2">
                        <div class="col-12 col-sm-6">
                            <h6 class="mb-0">Buccellato di Lucca</h6>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="mb-0 text-alternate">2 pcs</p>
                        </div>
                        <div class="col-12 col-sm-3 text-sm-end">
                            <p class="mb-0 text-alternate">$ 19.50</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="separator separator-light"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-sm-end text-muted">
                        <div>Subtotal :</div>
                        <div>Tax :</div>
                        <div>Shipping :</div>
                        <div>Total :</div>
                    </div>
                    <div class="col-auto text-end">
                        <div>$ 61.82</div>
                        <div>$ 2.18</div>
                        <div>$ 3.21</div>
                        <div>$ 68.14</div>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="separator separator-light"></div>
                    </div>
                </div>

                <div class="text-small text-muted text-center">Invoice was created on a computer and is valid without
                    the signature and seal.
                </div>
            </div>
        </div>
        <!-- Standard End -->

        <!-- Inline Start -->
        <h2 class="small-title">Inline Styled</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div
                            style="width: 100%; font-family: Helvetica, Arial, sans-serif !important; position: relative">
                            <table
                                style="width: 100%; border-collapse: separate !important; border-spacing: 0; color: #242128; margin: 0">
                                <tbody>
                                <tr>
                                    <td style="padding-bottom: 35px; border-top: 0; width: 100% !important; text-align: left; vertical-align: center">
                                        <img src="{{ asset('/img/logo/logo-blue-light.svg') }}" style="width: 140px" alt="logo"/>
                                    </td>
                                    <td style="padding-bottom: 35px; padding-top: 5px; border-top: 0; width: 100% !important; text-align: right; vertical-align: center">
                                        <p style="color: #4e4e4e; font-weight: normal; line-height: 1.2; font-size: 14px; white-space: nowrap">
                                            ColoredStrategies Inc</p>
                                        <p style="color: #afafaf; font-weight: normal; line-height: 1.2; font-size: 11px; white-space: nowrap; margin-bottom: 0">
                                            4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand
                                        </p>
                                        <p style="color: #afafaf; font-weight: normal; line-height: 1.2; font-size: 11px; white-space: nowrap; margin-bottom: 0">
                                            +6443884455
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding-top: 30px; border-top: 1px solid #f1f1f1">
                                        <table style="width: 100%">
                                            <tbody>
                                            <tr>
                                                <td style="vertical-align: middle; padding-top: 20px; padding-bottom: 20px">
                                                    <p style="color: #4e4e4e; font-size: 14px; line-height: 1.6; margin: 0; padding: 0">
                                                        Blaine Cottrell
                                                        <br/>
                                                        55 Esk Street, Invercargill 9810, New Zealand
                                                    </p>
                                                </td>

                                                <td
                                                    style="
                              text-align: right;
                              padding-top: 0px;
                              padding-bottom: 0;
                              vertical-align: middle;
                              padding-bottom: 20px;
                              padding-top: 20px;
                            "
                                                >
                                                    <p style="color: #4e4e4e; font-size: 14px; padding: 0; line-height: 1.6; margin: 0">
                                                        Invoice #: 741
                                                        <br/>
                                                        02.02.2019
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table style="width: 100%; margin-top: 40px">
                                            <thead>
                                            <tr>
                                                <th style="text-align: left; font-weight: 400; font-size: 11px; color: #afafaf; padding-bottom: 15px">
                                                    ITEM NAME
                                                </th>
                                                <th style="text-align: left; font-weight: 400; font-size: 11px; color: #afafaf; padding-bottom: 15px">
                                                    COUNT
                                                </th>
                                                <th style="text-align: right; font-weight: 400; font-size: 11px; color: #afafaf; padding-bottom: 15px">
                                                    PRICE
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Spelt Bread
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        3 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 14.82
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Naan</h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        2 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 8.97
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Cozonac
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        2 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 18.24
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Michetta
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        2 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 4.24
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Arepa</h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        3 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 6.27
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Pita</h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        2 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 10.97
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Zopf</h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        2 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 21.24
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Cholermüs
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        4 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 14.50
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Ruisreikäleipä
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        4 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 11.90
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Cholermüs
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        1 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 1.45
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Barmbrack
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        2 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 15.00
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Bagel</h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        3 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 42.15
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 0px; padding-bottom: 5px">
                                                    <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                                        Buccellato di Lucca
                                                    </h6>
                                                </td>
                                                <td>
                                                    <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">
                                                        5 pcs
                                                    </p>
                                                </td>
                                                <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                                    <p
                                                        style="
                                font-size: 14px;
                                line-height: 1;
                                color: #4e4e4e;
                                margin-bottom: 0;
                                margin-top: 0;
                                vertical-align: top;
                                white-space: nowrap;
                              "
                                                    >
                                                        $ 84.75
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table
                                style="width: 100%; border-collapse: separate !important; border-spacing: 0; color: #242128; margin: 0; padding-top: 20px">
                                <tr>
                                    <td colspan="2" style="border-top: 1px solid #f1f1f1">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        <p
                                            style="
                      font-size: 13px;
                      text-decoration: none;
                      line-height: 1.6;
                      color: #afafaf;
                      margin-top: 0px;
                      margin-bottom: 0;
                      text-align: right;
                    "
                                        >
                                            Subtotal :
                                        </p>
                                    </td>
                                    <td style="padding-top: 0px; text-align: right">
                                        <p
                                            style="
                      font-size: 13px;
                      line-height: 1.6;
                      color: #4e4e4e;
                      margin-bottom: 0;
                      margin-top: 0;
                      vertical-align: top;
                      white-space: nowrap;
                      margin-left: 15px;
                    "
                                        >
                                            $ 61.82
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        <p
                                            style="
                      font-size: 13px;
                      text-decoration: none;
                      line-height: 1.6;
                      color: #afafaf;
                      margin-top: 0px;
                      margin-bottom: 0;
                      text-align: right;
                    "
                                        >
                                            Tax :
                                        </p>
                                    </td>
                                    <td style="padding-top: 0px; text-align: right">
                                        <p
                                            style="
                      font-size: 13px;
                      line-height: 1.6;
                      color: #4e4e4e;
                      margin-bottom: 0;
                      margin-top: 0;
                      vertical-align: top;
                      white-space: nowrap;
                      margin-left: 15px;
                    "
                                        >
                                            $ 2.18
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        <p
                                            style="
                      font-size: 13px;
                      text-decoration: none;
                      line-height: 1.6;
                      color: #afafaf;
                      margin-top: 0px;
                      margin-bottom: 0;
                      text-align: right;
                    "
                                        >
                                            Shipping :
                                        </p>
                                    </td>
                                    <td style="padding-top: 0px; text-align: right">
                                        <p
                                            style="
                      font-size: 13px;
                      line-height: 1.6;
                      color: #4e4e4e;
                      margin-bottom: 0;
                      margin-top: 0;
                      vertical-align: top;
                      white-space: nowrap;
                      margin-left: 15px;
                    "
                                        >
                                            $ 3.21
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100%; padding-bottom: 15px">
                                        <p
                                            style="
                      font-size: 13px;
                      text-decoration: none;
                      line-height: 1.6;
                      color: #afafaf;
                      margin-top: 0px;
                      margin-bottom: 0;
                      text-align: right;
                    "
                                        >
                                            Total :
                                        </p>
                                    </td>
                                    <td style="padding-top: 0px; text-align: right; padding-bottom: 15px">
                                        <p
                                            style="
                      font-size: 13px;
                      line-height: 1.6;
                      color: #4e4e4e;
                      margin-bottom: 0;
                      margin-top: 0;
                      vertical-align: top;
                      white-space: nowrap;
                      margin-left: 15px;
                    "
                                        >
                                            $ 68.14
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="border-top: 1px solid #f1f1f1">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <p style="color: #afafaf; font-size: 11px; text-align: center">
                                            Invoice was created on a computer and is valid without the signature and
                                            seal.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inline End -->
    </div>
@endsection
