@php
    $html_tag_data = [];
    $title = 'Product Home';
    $description= 'Ecommerce Product Home Page'
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
    <script src="{{ asset('/js/pages/storefront.home.js') }}"></script>
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
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">Storefront</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-center justify-content-end">
                    <!-- Categories Button For Small Screens Start -->
                    <button
                        type="button"
                        class="btn btn-icon btn-outline-primary d-inline-block d-xl-none w-100 w-md-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#menuModal"
                    >
                        <span>Categories</span>
                        <i data-cs-icon="more-horizontal"></i>
                    </button>
                    <!-- Categories Button For Small Screens End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-3 d-none d-xl-block mb-5">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between" id="menuColumn">
                        <!-- Content of this will be moved from #categoryMenuMoveContent div based on the responsive breakpoint.  -->
                    </div>
                </div>
            </div>
            <!-- Left Side End -->

            <!-- Right Side Cta Banners Start -->
            <div class="col-12 col-xl-9 mb-5">
                <div class="row g-2 mb-2">
                    <div class="col-12 col-sm-6 col-md-8">
                        <div class="card sh-30 sh-sm-45 hover-img-scale-up">
                            <img src="{{ asset('/img/banner/cta-standard-1.jpg') }}" class="card-img h-100 scale" alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div>
                                    <div class="cta-1 mb-3 text-black w-md-100 w-75">Healthy and Sweet Treats with
                                        Fruits
                                    </div>
                                    <div class="w-50 text-black d-none d-md-block">
                                        Lollipop chocolate marzipan marshmallow gummi bears. Tootsie roll liquorice cake
                                        jelly beans.
                                    </div>
                                </div>
                                <div>
                                    <a href="/Storefront/Filters"
                                       class="btn btn-icon btn-icon-start btn-outline-primary mt-3 stretched-link">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card sh-30 sh-sm-45 hover-img-scale-up">
                            <img src="{{ asset('/img/banner/cta-vertical-3.jpg') }}" class="card-img h-100 scale" alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div>
                                    <div class="cta-1 mb-5 text-black w-md-100 w-75">Vegetable and Fruit Flavored
                                        Breads
                                    </div>
                                </div>
                                <div>
                                    <a href="/Storefront/Filters"
                                       class="btn btn-icon btn-icon-start btn-outline-primary mt-3 stretched-link">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-12 col-sm-6">
                        <div class="card sh-19 hover-img-scale-up">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute e-2 t-2 z-index-1">SALE</span>
                            <img src="{{ asset('/img/banner/cta-horizontal-short-1.jpg') }}" class="card-img h-100 scale"
                                 alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div>
                                    <div class="cta-3 mb-3 text-black w-75 w-md-50">10% Discount for Canned Products
                                    </div>
                                </div>
                                <div>
                                    <a href="/Storefront/Filters"
                                       class="btn btn-icon btn-icon-start btn-outline-primary stretched-link">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>Buy Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="card sh-19 hover-img-scale-up">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute e-2 t-2 z-index-1">SALE</span>
                            <img src="{{ asset('/img/banner/cta-horizontal-short-2.jpg') }}" class="card-img h-100 scale"
                                 alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div>
                                    <div class="cta-3 mb-3 text-black w-75 w-md-50">20% Discount for Bagged Products
                                    </div>
                                </div>
                                <div>
                                    <a href="/Storefront/Filters"
                                       class="btn btn-icon btn-icon-start btn-outline-primary stretched-link">
                                        <i data-cs-icon="chevron-right"></i>
                                        <span>Buy Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side Cta Banners End -->
        </div>

        <!-- Trending Start -->
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="small-title">Trending</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-2">
                    <div class="col">
                        <div class="card h-100">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                            <img src="{{ asset('/img/product/small/barmbrack.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                            <div class="card-body pb-2">
                                <div class="h6 mb-0 d-flex">
                                    <a href="/Storefront/Detail" class="body-link d-block lh-1-25 stretched-link">
                                        <span class="clamp-line sh-4" data-line="2">Plain Baguette</span>
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
                                        <del>$ 14.25</del>
                                    </div>
                                    <div>$ 8.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('/img/product/small/sandwich-bread.jpg') }}" class="card-img-top sh-22"
                                 alt="card image"/>
                            <div class="card-body pb-2">
                                <div class="h6 mb-0 d-flex">
                                    <a href="/Storefront/Detail" class="body-link d-block lh-1-25 stretched-link">
                                        <span class="clamp-line sh-4"
                                              data-line="2">Sandwitch Bread with Sesame Seeds</span>
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
                                    <div>$ 4.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <span
                                class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                            <img src="{{ asset('/img/product/small/michetta.jpg') }}" class="card-img-top sh-22" alt="card image"/>
                            <div class="card-body pb-2">
                                <div class="h6 mb-0 d-flex">
                                    <a href="/Storefront/Detail" class="body-link d-block lh-1-25 stretched-link">
                                        <span class="clamp-line sh-4" data-line="2">Basler Brot</span>
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
                            <img src="{{ asset('/img/product/small/pullman-loaf.jpg') }}" class="card-img-top sh-22"
                                 alt="card image"/>
                            <div class="card-body pb-3">
                                <h5 class="heading mb-0 d-flex">
                                    <a href="/Storefront/Detail" class="body-link d-block lh-1-5 stretched-link">
                                        <span class="clamp-line sh-4" data-line="2">Pullman Loaf</span>
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
                                    <div>$ 9.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending End -->

        <!-- Popular Categories Start -->
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="small-title">Popular Categories</h2>
                <div class="d-flex row g-2 justify-content-between flex-wrap">
                    <div class="flex-grow-1 col-6 col-md-4 col-xl-2 sh-19">
                        <div class="card h-100 hover-border-primary">
                            <a class="card-body text-center" href="/Storefront/Categories">
                                <i data-cs-icon="pepper" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Pepper</p>
                                <div class="text-extra-small fw-medium text-muted">14 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1 col-6 col-md-4 col-xl-2 sh-19">
                        <div class="card h-100 hover-border-primary">
                            <a class="card-body text-center" href="/Storefront/Categories">
                                <i data-cs-icon="radish" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Radish</p>
                                <div class="text-extra-small fw-medium text-muted">3 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1 col-6 col-md-4 col-xl-2 sh-19">
                        <div class="card h-100 hover-border-primary">
                            <a class="card-body text-center" href="/Storefront/Categories">
                                <i data-cs-icon="loaf" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Bread</p>
                                <div class="text-extra-small fw-medium text-muted">8 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1 col-6 col-md-4 col-xl-2 sh-19">
                        <div class="card h-100 hover-border-primary">
                            <a class="card-body text-center" href="/Storefront/Categories">
                                <i data-cs-icon="pear" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Pear</p>
                                <div class="text-extra-small fw-medium text-muted">9 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1 col-6 col-md-4 col-xl-2 sh-19">
                        <div class="card h-100 hover-border-primary">
                            <a class="card-body text-center" href="/Storefront/Categories">
                                <i data-cs-icon="banana" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Banana</p>
                                <div class="text-extra-small fw-medium text-muted">3 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1 col-6 col-md-4 col-xl-2 sh-19">
                        <div class="card h-100 hover-border-primary">
                            <a class="card-body text-center" href="/Storefront/Categories">
                                <i data-cs-icon="mushrooms" class="text-primary"></i>
                                <p class="heading mt-3 text-body">Mushrooms</p>
                                <div class="text-extra-small fw-medium text-muted">4 PRODUCTS</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Categories Start -->

        <!-- Discover Start -->
        <div class="row">
            <div class="col-12">
                <h2 class="small-title">Discover</h2>
                <div class="row g-2 row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-3 mb-5">
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
                                                    <select class="rating" name="rating" autocomplete="off"
                                                            data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="text-muted d-inline-block text-small align-text-top">(5)
                                                </div>
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
                                                <div class="clamp-line sh-3 lh-1-5" data-line="1">Bucellato di Lucca
                                                </div>
                                            </a>
                                            <div class="card-text mb-2">
                                                <div class="text-muted text-overline text-small sh-2"></div>
                                                <div>$ 7.50</div>
                                            </div>
                                            <div>
                                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                    <select class="rating" name="rating" autocomplete="off"
                                                            data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="text-muted d-inline-block text-small align-text-top">(2)
                                                </div>
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
                                                    <select class="rating" name="rating" autocomplete="off"
                                                            data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="text-muted d-inline-block text-small align-text-top">(4)
                                                </div>
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
                                                    <select class="rating" name="rating" autocomplete="off"
                                                            data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="text-muted d-inline-block text-small align-text-top">(12)
                                                </div>
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
                                                    <select class="rating" name="rating" autocomplete="off"
                                                            data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="text-muted d-inline-block text-small align-text-top">(9)
                                                </div>
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
                                                    <select class="rating" name="rating" autocomplete="off"
                                                            data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="text-muted d-inline-block text-small align-text-top">(3)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discover End -->
    </div>

    <!-- Category Modal Start -->
    <div class="modal modal-right fade" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Categories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content of below will be moved to #menuColumn or back in here based on the data-move-breakpoint attribute below -->
                    <div id="categoryMenuMoveContent" data-move-target="#menuColumn" data-move-breakpoint="xl">
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Biscuit</span>
                            <span class="align-middle">(4)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Bagels</span>
                            <span class="align-middle">(6)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Bun</span>
                            <span class="align-middle">(3)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Cornbread</span>
                            <span class="align-middle">(2)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Crispy Bread</span>
                            <span class="align-middle">(5)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Flatbread</span>
                            <span class="align-middle">(2)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Grissini</span>
                            <span class="align-middle">(3)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Muffin</span>
                            <span class="align-middle">(5)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Sourdough</span>
                            <span class="align-middle">(6)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Rye</span>
                            <span class="align-middle">(4)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Toast Bread</span>
                            <span class="align-middle">(2)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">White Wheat</span>
                            <span class="align-middle">(17)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Whole Wheat</span>
                            <span class="align-middle">(9)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                        <a class="nav-link body-link px-0 py-2" href="/Storefront/Categories">
                            <span class="align-middle">Yeast Bread</span>
                            <span class="align-middle">(4)</span>
                            <i data-cs-icon="chevron-right" class="align-middle float-end mb-1" data-cs-size="13"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Modal End -->
@endsection
