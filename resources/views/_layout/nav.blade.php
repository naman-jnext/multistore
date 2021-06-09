<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/">
            <!-- Logo can be added directly -->
            <!-- <img src="{{ asset('/img/logo/logo-white.svg') }}" alt="logo" /> -->

            <!-- Or added via css to provide different ones for different color themes -->
            <div class="img"></div>
        </a>
    </div>
    <!-- Logo End -->

    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('/img/profile/profile-8.jpg') }}" />
            <div class="name">Zayn Hartley</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">User Info</a>
                        </li>
                        <li>
                            <a href="#">Preferences</a>
                        </li>
                        <li>
                            <a href="#">Calendar</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Security</a>
                        </li>
                        <li>
                            <a href="#">Billing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-2 pt-2">
                    <div class="text-extra-small text-primary">APPLICATION</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Themes</a>
                        </li>
                        <li>
                            <a href="#">Language</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Devices</a>
                        </li>
                        <li>
                            <a href="#">Storage</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-cs-icon="document-full" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Docs</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- User Menu End -->

    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-cs-icon="search" data-cs-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="pinButton" class="pin-button">
                <i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
                <i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                <div class="position-relative d-inline-flex">
                    <i data-cs-icon="bell" data-cs-size="18"></i>
                    <span class="position-absolute notification-dot rounded-xl"></span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                <div class="scroll">
                    <ul class="list-unstyled border-last-none">
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-1.jpg') }}" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">Joisse Kaycee just sent a new comment!</a>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-2.jpg') }}" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">New order received! It is total $147,20.</a>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-3.jpg') }}" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">3 items just added to wish list by a user!</a>
                            </div>
                        </li>
                        <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="{{ asset('/img/profile/profile-6.jpg') }}" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">Kirby Peters just sent a new message!</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <li>
                <a href="{{ url('/Dashboard') }}">
                    <i data-cs-icon="shop" class="icon" data-cs-size="18"></i>
                    <span class="label">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#products" data-href="/Products/List">
                    <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                    <span class="label">Products</span>
                </a>
                <ul id="products">
                    <li>
                        <a href="{{ url('/Products/List') }}">
                            <span class="label">List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Products/Detail') }}">
                            <span class="label">Detail</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#orders" data-href="/Orders/List">
                    <i data-cs-icon="cart" class="icon" data-cs-size="18"></i>
                    <span class="label">Orders</span>
                </a>
                <ul id="orders">
                    <li>
                        <a href="{{ url('/Orders/List') }}">
                            <span class="label">List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Orders/Detail') }}">
                            <span class="label">Detail</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#customers" data-href="/Customers/List">
                    <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                    <span class="label">Customers</span>
                </a>
                <ul id="customers">
                    <li>
                        <a href="{{ url('/Customers/Lis') }}t">
                            <span class="label">List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Customers/Detail') }}">
                            <span class="label">Detail</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#storefront" data-href="/Storefront/Home">
                    <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                    <span class="label">Storefront</span>
                </a>
                <ul id="storefront">
                    <li>
                        <a href="{{ url('/Storefront/Home') }}">
                            <span class="label">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Storefront/Filters') }}">
                            <span class="label">Filters</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Storefront/Categories') }}">
                            <span class="label">Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Storefront/Detail') }}">
                            <span class="label">Detail</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Storefront/Cart') }}">
                            <span class="label">Cart</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Storefront/Checkout') }}">
                            <span class="label">Checkout</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/Storefront/Invoice') }}">
                            <span class="label">Invoice</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/Shipping') }}">
                    <i data-cs-icon="shipping" class="icon" data-cs-size="18"></i>
                    <span class="label">Shipping</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/Discount') }}">
                    <i data-cs-icon="tag" class="icon" data-cs-size="18"></i>
                    <span class="label">Discount</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/Settings') }}">
                    <i data-cs-icon="gear" class="icon" data-cs-size="18"></i>
                    <span class="label">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-cs-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>
