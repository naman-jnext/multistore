@php
    $html_tag_data = [];
    $title = 'Product Filters';
    $description= 'Ecommerce Product Filters Page'
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/movecontent.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/cs/checkall.js') }}"></script>
    <script src="{{ asset('/js/pages/storefront.filters.js') }}"></script>
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
                        <h1 class="mb-0 pb-0 display-4" id="title">Filters</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-end justify-content-end">
                    <!-- Order Start -->
                    <div class="dropdown-as-select w-100 w-md-auto" data-childSelector="span">
                        <button
                            type="button"
                            class="btn btn-outline-primary dropdown-toggle w-100 w-md-auto"
                            data-bs-offset="0,3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-submenu
                        >
                            Order:
                            <span>Default</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Default</a>
                            <a class="dropdown-item" href="#">Price Asc</a>
                            <a class="dropdown-item" href="#">Price Desc</a>
                            <a class="dropdown-item" href="#">Rating</a>
                            <a class="dropdown-item" href="#">Newest</a>
                        </div>
                    </div>
                    <!-- Order End -->

                    <!-- Filter Button For Small Screens Start -->
                    <button
                        type="button"
                        class="btn btn-icon btn-icon-only btn-outline-primary d-inline-block d-lg-none ms-1"
                        data-bs-toggle="modal"
                        data-bs-target="#filterModal"
                    >
                        <i data-cs-icon="filter"></i>
                    </button>
                    <!-- Filter Button For Small Screens End -->

                    <!-- Check Button Start -->
                    <div class="btn-group ms-1 check-all-container-checkbox-click">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                             data-target="#productsCheckAll">
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
                            <button class="dropdown-item" type="button">Copy</button>
                            <button class="dropdown-item" type="button">Move</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                    <!-- Check Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-lg-4 col-xl-3 d-none d-lg-block">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body mb-n5" id="filterColumn">
                                <!-- Content of this will be moved from #filterMoveContent div based on the responsive breakpoint.  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-lg-8 col-xl-9">
                <!-- Product Thumbnails Start -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3 g-2 mb-5"
                     id="productsCheckAll">
                    <div class="col">
                        <div class="card h-100">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-2">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Plain
                                        Baguette</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(5)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2">
                                        <del>$ 14.25</del>
                                    </div>
                                    <div>$ 8.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-2">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Sandwitch
                                        Bread with Sesame Seeds</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(44)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 4.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-2">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Basler
                                        Brot</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(2)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2">
                                        <del>$ 12.25</del>
                                    </div>
                                    <div>$ 9.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Pullman
                                        Loaf</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(412)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 9.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/cornbread.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Bucellato
                                        di Lucca</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="4">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(5)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 6.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <span
                                class="badge rounded-pill bg-secondary me-1 position-absolute s-n2 t-2 z-index-1">NEW</span>
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/zopf.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Zopf</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(12)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 3.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Steirer
                                        Brot</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="4">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(4)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 2.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Pain
                                        de Campagne</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(92)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 7.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/rugbraud.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Rugbraud</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(2)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 6.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/buccellato-di-lucca.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Guernsey
                                        Gache</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(11)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 3.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/toast-bread.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Toast
                                        Bread</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(4)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 2.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <a href="/Storefront/Detail">
                                <img src="{{ asset('/img/product/small/bauernbrot.jpg') }}" class="card-img-top sh-22"
                                     alt="card image"/>
                            </a>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input d-block pe-none"/>
                                    </label>
                                    <a href="/Storefront/Detail" class="body-link lh-1-5 clamp-line" data-line="2">Michetta</a>
                                </h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                                data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(4)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small sh-2"></div>
                                    <div>$ 4.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Thumbnails End -->

                <!-- Pagination Start -->
                <div class="d-flex justify-content-center">
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
                                <a class="page-link" href="#">
                                    <i data-cs-icon="chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination End -->
            </div>
            <!-- Right Side End -->
        </div>
    </div>

    <!-- Filter Modal Start -->
    <div class="modal modal-left fade" id="filterModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filters</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content of below will be moved to #filterColumn or back in here based on the data-move-breakpoint attribute below -->
                    <!-- Content will be here if the screen size is smaller than lg -->
                    <div id="filterMoveContent" data-move-target="#filterColumn" data-move-breakpoint="lg">
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">BRAND</p>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="brand1"/>
                                <label class="form-check-label" for="brand1">Earth's Pride</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="brand2"/>
                                <label class="form-check-label" for="brand2">Elbrus Breads</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="brand3"/>
                                <label class="form-check-label" for="brand3">Fuji Mill</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="brand4"/>
                                <label class="form-check-label" for="brand4">Lil' Bits</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="brand5"/>
                                <label class="form-check-label" for="brand5">Street Bakery</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="brand6"/>
                                <label class="form-check-label" for="brand6">Thames Bagels</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="brand7"/>
                                <label class="form-check-label" for="brand7">Nile Mill</label>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">CATEGORY</p>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category1"/>
                                <label class="form-check-label" for="category1">Biscuit</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category2"/>
                                <label class="form-check-label" for="category2">Bun</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category3"/>
                                <label class="form-check-label" for="category3">Cornbread</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category4"/>
                                <label class="form-check-label" for="category4">Crispy Bread</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category5"/>
                                <label class="form-check-label" for="category5">Flatbread</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category6"/>
                                <label class="form-check-label" for="category6">Leavened</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category7"/>
                                <label class="form-check-label" for="category7">Sourdough</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category8"/>
                                <label class="form-check-label" for="category8">Rye</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category9"/>
                                <label class="form-check-label" for="category9">White Wheat</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category10"/>
                                <label class="form-check-label" for="category10">Whole Wheat</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="categories" id="category11"/>
                                <label class="form-check-label" for="category11">Yeast Bread</label>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">CONTENTS</p>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="content1"/>
                                <label class="form-check-label" for="content1">Dairy Free</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="content2"/>
                                <label class="form-check-label" for="content2">Gluten Free</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="content3"/>
                                <label class="form-check-label" for="content3">Nut Free</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="content4"/>
                                <label class="form-check-label" for="content4">Sugar Free</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="content5"/>
                                <label class="form-check-label" for="content5">Vegan</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="content6"/>
                                <label class="form-check-label" for="content6">Vegetarian</label>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">PRICE</p>
                            <div class="row g-1">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Min"/>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Max"/>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">SEARCH</p>
                            <div class="row g-1">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Keyword"/>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                        <i data-cs-icon="chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">RATING</p>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="ratings" id="rating5"/>
                                <div class="form-check-label">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                        <select class="rating-filter" name="rating" autocomplete="off"
                                                data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="ratings" id="rating4"/>
                                <div class="form-check-label">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                        <select class="rating-filter" name="rating" autocomplete="off"
                                                data-readonly="true" data-initial-rating="4">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="ratings" id="rating3"/>
                                <div class="form-check-label">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                        <select class="rating-filter" name="rating" autocomplete="off"
                                                data-readonly="true" data-initial-rating="3">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="ratings" id="rating2"/>
                                <div class="form-check-label">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                        <select class="rating-filter" name="rating" autocomplete="off"
                                                data-readonly="true" data-initial-rating="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="ratings" id="rating1"/>
                                <div class="form-check-label">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                        <select class="rating-filter" name="rating" autocomplete="off"
                                                data-readonly="true" data-initial-rating="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                                <button type="button" class="btn btn-outline-primary w-100 me-2">Clear</button>
                                <button type="button" class="btn btn-primary w-100">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter Modal End -->
@endsection
