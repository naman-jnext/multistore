@php
    $html_tag_data = [];
    $title = 'Product List';
    $description= 'Ecommerce Product List Page'
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
    <script src="{{ asset('/js/cs/checkall.js') }}"></script>
    <script src="{{ asset('/js/pages/products.list.js') }}"></script>
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

                <!-- Top Buttons Start -->
                <div class="w-100 d-md-none"></div>
                <div
                    class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                    <button type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
                        <i data-cs-icon="plus"></i>
                        <span>Add Product</span>
                    </button>
                    <div class="dropdown d-inline-block d-lg-none">
                        <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-only ms-1"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i data-cs-icon="sort"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end custom-sort">
                            <a class="dropdown-item sort" data-sort="name" href="#">Title</a>
                            <a class="dropdown-item sort" data-sort="email" href="#">Stock</a>
                            <a class="dropdown-item sort" data-sort="phone" href="#">Price</a>
                            <a class="dropdown-item sort" data-sort="group" href="#">Status</a>
                        </div>
                    </div>
                    <div class="btn-group ms-1 check-all-container-checkbox-click">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                             data-target="#checkboxTable">
                    <span class="form-check float-end">
                      <input type="checkbox" class="form-check-input" id="checkAll"/>
                    </span>
                        </div>
                        <button
                            type="button"
                            class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-offset="0,3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        ></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" id="deleteChecked" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search"/>
                    <span class="search-magnifier-icon">
                  <i data-cs-icon="search"></i>
                </span>
                    <span class="search-delete-icon d-none">
                  <i data-cs-icon="close"></i>
                </span>
                </div>
            </div>
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                <div class="d-inline-block">
                    <!-- Print Button Start -->
                    <button
                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-delay="0"
                        title="Print"
                        type="button"
                    >
                        <i data-cs-icon="print"></i>
                    </button>
                    <!-- Print Button End -->

                    <!-- Export Dropdown Start -->
                    <div class="d-inline-block">
                        <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                    <span
                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                        data-bs-delay="0"
                        data-bs-placement="top"
                        data-bs-toggle="tooltip"
                        title="Export"
                    >
                      <i data-cs-icon="download"></i>
                    </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <button class="dropdown-item export-copy" type="button">Copy</button>
                            <button class="dropdown-item export-excel" type="button">Excel</button>
                            <button class="dropdown-item export-cvs" type="button">Cvs</button>
                        </div>
                    </div>
                    <!-- Export Dropdown End -->

                    <!-- Length Start -->
                    <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                        <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-bs-offset="0,3">
                    <span
                        class="btn btn-foreground-alternate dropdown-toggle"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-delay="0"
                        title="Item Count"
                    >
                      10 Items
                    </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <a class="dropdown-item" href="#">5 Items</a>
                            <a class="dropdown-item active" href="#">10 Items</a>
                            <a class="dropdown-item" href="#">20 Items</a>
                        </div>
                    </div>
                    <!-- Length End -->
                </div>
            </div>
        </div>
        <!-- Controls End -->

        <div class="row g-0">
            <div class="col-12 mb-5">
                <!-- List Items Start -->
                <div id="checkboxTable">
                    <div class="mb-4 mb-lg-3 bg-transparent no-shadow d-none d-lg-block">
                        <div class="row g-0">
                            <div class="col-auto sw-11 d-none d-lg-flex"></div>
                            <div class="col">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center custom-sort">
                                        <div class="col-3 col-lg-3 d-flex flex-column mb-lg-0 pe-3 d-flex">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="name">
                                                TITLE
                                            </div>
                                        </div>
                                        <div class="col-2 col-lg-3 d-flex flex-column pe-1 justify-content-center">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="email">
                                                STOCK
                                            </div>
                                        </div>
                                        <div class="col-2 col-lg-3 d-flex flex-column pe-1 justify-content-center">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="phone">
                                                PRICE
                                            </div>
                                        </div>
                                        <div class="col-3 col-lg-2 d-flex flex-column pe-1 justify-content-center">
                                            <div class="text-muted text-small cursor-pointer sort" data-sort="group">
                                                STATUS
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Items Container Start -->

                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/cornbread.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Anpan
                                            <div class="text-small text-muted text-truncate position">#2342</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">2.511</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 62.20</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                            <span class="badge bg-outline-primary group">SALE</span>
                                        </div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Bagel
                                            <div class="text-small text-muted text-truncate position">#2567</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">352</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 41.15</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                            <span class="badge bg-outline-primary group">SALE</span>
                                        </div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/bauernbrot.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Bannock
                                            <div class="text-small text-muted text-truncate position">#1831</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">1.531</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 7.50</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5"></div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/boule.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Cholermüs
                                            <div class="text-small text-muted text-truncate position">#1558</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">729</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 18.00</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5"></div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Fougasse
                                            <div class="text-small text-muted text-truncate position">917</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">16</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 21.75</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                            <span class="badge bg-outline-quaternary group">LOW STOCK</span>
                                        </div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/pane-sciocco.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Kulcha
                                            <div class="text-small text-muted text-truncate position">#5622</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">592</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 52.50</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5"></div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Mohnflesserl
                                            <div class="text-small text-muted text-truncate position">#3457</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">2.849</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 14.10</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5"></div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Pistolet
                                            <div class="text-small text-muted text-truncate position">#4832</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">902</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 32.60</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                            <span class="badge bg-outline-secondary group">NEW</span>
                                        </div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Rieska
                                            <div class="text-small text-muted text-truncate position">#2611</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">614</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 19.15</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                            <span class="badge bg-outline-secondary group">NEW</span>
                                        </div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 h-100 sh-lg-9 position-relative">
                            <a href="{{ url('/Products/Detail') }}" class="col-auto position-relative">
                                <img src="{{ asset('/img/product/small/rugbraud.jpg') }}" alt="product"
                                     class="card-img card-img-horizontal sw-11 h-100"/>
                            </a>
                            <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a
                                            href="{{ url('/Products/Detail') }}"
                                            class="col-11 col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center"
                                        >
                                            Zopf
                                            <div class="text-small text-muted text-truncate position">#3470</div>
                                        </a>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                            <div class="lh-1 text-alternate">1.852</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                            <div class="lh-1 text-alternate">$ 68.00</div>
                                        </div>
                                        <div
                                            class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5"></div>
                                        <div
                                            class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                            <label class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input pe-none"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Items Container Start -->

                    <!-- List Items End -->
                </div>
            </div>
            <!-- Items Pagination Start -->
            <div class="w-100 d-flex justify-content-center">
                <nav>
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link shadow" href="#" tabindex="-1" aria-disabled="true">
                                <i data-cs-icon="chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link shadow" href="#">1</a></li>
                        <li class="page-item"><a class="page-link shadow" href="#">2</a></li>
                        <li class="page-item"><a class="page-link shadow" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link shadow" href="#">
                                <i data-cs-icon="chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Items Pagination End -->
        </div>
    </div>
@endsection
