@php
    $html_tag_data = [];
    $title = 'Product Category';
    $description= 'Ecommerce Product Category Page'
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
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/storefront.categories.js') }}"></script>
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
                        <h1 class="mb-0 pb-0 display-4" id="title">Categories</h1>
                    </div>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Trending Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Trending</h2>
            <div class="mt-n1">
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                    <span>View All</span>
                    <i data-cs-icon="chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mb-5">
            <div class="col">
                <div class="card h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                    <img src="{{ asset('/img/product/small/baguette.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Plain Baguette</span>
                            </a>
                        </div>
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
                                <del>$ 12.25</del>
                            </div>
                            <div>$ 9.75</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Sandwitch Bread with Sesame Seeds</span>
                            </a>
                        </div>
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
                            <div>$ 6.75</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                    <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Basler Brot</span>
                            </a>
                        </div>
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
                                <del>$ 10.25</del>
                            </div>
                            <div>$ 8.00</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-3">
                        <h5 class="heading mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Pullman Loaf</span>
                            </a>
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
                            <div>$ 1.75</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending End -->

        <!-- Bestsellers Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Bestsellers</h2>
            <div class="mt-n1">
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                    <span>View All</span>
                    <i data-cs-icon="chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/zopf.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Zopf</span>
                            </a>
                        </div>
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
                            <div>$ 5.75</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Steirer Brot</span>
                            </a>
                        </div>
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
                            <div>$ 2.25</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-3">
                        <h5 class="heading mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Pain de Campagne</span>
                            </a>
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
                            <div>$ 4.50</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                    <img src="{{ asset('/img/product/small/cornbread.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Bucellato di Lucca</span>
                            </a>
                        </div>
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
                                <del>$ 6.75</del>
                            </div>
                            <div>$ 3.50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsellers End -->

        <!-- Newest Products Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Newest Products</h2>
            <div class="mt-n1">
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                    <span>View All</span>
                    <i data-cs-icon="chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mb-5">
            <div class="col">
                <div class="card h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                    <img src="{{ asset('/img/product/small/toast-bread.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Toast Bread</span>
                            </a>
                        </div>
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
                    <img src="{{ asset('/img/product/small/bauernbrot.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-3">
                        <h5 class="heading mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Michetta</span>
                            </a>
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
                            <div>$ 7.25</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                    <img src="{{ asset('/img/product/small/rugbraud.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Rugbraud</span>
                            </a>
                        </div>
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
                                <del>$ 12.50</del>
                            </div>
                            <div>$ 9.25</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/img/product/small/boule.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                    <div class="card-body pb-2">
                        <div class="h6 mb-0 d-flex">
                            <a href="/Storefront/Detail" class="body-link d-block stretched-link sh-4">
                                <span class="clamp-line" data-line="2">Guernsey Gache</span>
                            </a>
                        </div>
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
                            <div>$ 2.25</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newest Products End -->

        <!-- Discover Start -->
        <h2 class="small-title">Discover</h2>
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-3 mb-5">
            <div class="col">
                <div class="card">
                    <div class="row g-0 sh-16 sh-sm-17">
                        <div class="col-auto h-100 position-relative">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                            <img src="{{ asset('/img/product/small/baguette.jpg') }}" alt="user"
                                 class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22"/>
                        </div>
                        <div class="col p-0">
                            <div class="card-body d-flex align-items-center h-100 py-3">
                                <div class="mb-0 h6">
                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Plain Baguette</div>
                                    </a>
                                    <div class="card-text mb-2">
                                        <div class="text-muted text-overline text-small sh-2">
                                            <del>$ 12.25</del>
                                        </div>
                                        <div>$ 8.50</div>
                                    </div>
                                    <div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0 sh-16 sh-sm-17">
                        <div class="col-auto h-100">
                            <img src="{{ asset('/img/product/small/cornbread.jpg') }}" alt="user"
                                 class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22"/>
                        </div>
                        <div class="col p-0">
                            <div class="card-body d-flex align-items-center h-100 py-3">
                                <div class="mb-0 h6">
                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Bucellato di Lucca</div>
                                    </a>
                                    <div class="card-text mb-2">
                                        <div class="text-muted text-overline text-small sh-2"></div>
                                        <div>$ 7.50</div>
                                    </div>
                                    <div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0 sh-16 sh-sm-17">
                        <div class="col-auto h-100">
                            <img src="{{ asset('/img/product/small/rugbraud.jpg') }}" alt="user"
                                 class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22"/>
                        </div>
                        <div class="col p-0">
                            <div class="card-body d-flex align-items-center h-100 py-3">
                                <div class="mb-0 h6">
                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Steirer Brot</div>
                                    </a>
                                    <div class="card-text mb-2">
                                        <div class="text-muted text-overline text-small sh-2"></div>
                                        <div>$ 4.25</div>
                                    </div>
                                    <div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0 sh-16 sh-sm-17">
                        <div class="col-auto h-100">
                            <img src="{{ asset('/img/product/small/steirer-brot.jpg') }}" alt="user"
                                 class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22"/>
                        </div>
                        <div class="col p-0">
                            <div class="card-body d-flex align-items-center h-100 py-3">
                                <div class="mb-0 h6">
                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Michetta</div>
                                    </a>
                                    <div class="card-text mb-2">
                                        <div class="text-muted text-overline text-small sh-2"></div>
                                        <div>$ 12.25</div>
                                    </div>
                                    <div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0 sh-16 sh-sm-17">
                        <div class="col-auto h-100 position-relative">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                            <img src="{{ asset('/img/product/small/michetta.jpg') }}" alt="user"
                                 class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22"/>
                        </div>
                        <div class="col p-0">
                            <div class="card-body d-flex align-items-center h-100 py-3">
                                <div class="mb-0 h6">
                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Rugbraud</div>
                                    </a>
                                    <div class="card-text mb-2">
                                        <div class="text-muted text-overline text-small sh-2">
                                            <del>$ 3.25</del>
                                        </div>
                                        <div>$ 2.50</div>
                                    </div>
                                    <div>
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
                                        <div class="text-muted d-inline-block text-small align-text-top">(9)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0 sh-16 sh-sm-17">
                        <div class="col-auto h-100 position-relative">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                            <img src="{{ asset('/img/product/small/pain-de-campagne.jpg') }}" alt="user"
                                 class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22"/>
                        </div>
                        <div class="col p-0">
                            <div class="card-body d-flex align-items-center h-100 py-3">
                                <div class="mb-0 h6">
                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Zopf</div>
                                    </a>
                                    <div class="card-text mb-2">
                                        <div class="text-muted text-overline text-small sh-2">
                                            <del>$ 5.25</del>
                                        </div>
                                        <div>$ 2.85</div>
                                    </div>
                                    <div>
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
                                        <div class="text-muted d-inline-block text-small align-text-top">(3)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discover End -->

        <!-- Banners Start -->
        <h2 class="small-title">Worth Checking</h2>
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-square-1.jpg') }}" class="card-img h-100 scale" alt="card image"/>
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
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-square-2.jpg') }}" class="card-img h-100 scale" alt="card image"/>
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
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-square-3.jpg') }}" class="card-img h-100 scale" alt="card image"/>
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
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                    <img src="{{ asset('/img/banner/cta-square-4.jpg') }}" class="card-img h-100 scale" alt="card image"/>
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                            <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Berries, Nuts and Sugar</div>
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
@endsection
