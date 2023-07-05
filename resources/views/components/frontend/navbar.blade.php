        <header class="header header-10 header-intro-clearance">
           <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                </div><!-- End .header-left -->
        
                <div class="header-right">
        
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">USD</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="#">Eur</a></li>
                                                <li><a href="#">Usd</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div><!-- End .header-dropdown -->
                                </li>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">Engligh</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Spanish</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div><!-- End .header-dropdown -->
                                </li>
                                <li class="login">
                                    <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{ route('frontend.index') }}" class="logo">
                            <img src="{{ asset('frontend/img/logo.jpg') }}" alt="JBMM" width="200"
                                height="35">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div
                            class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Departments</option>
                                            <option>CookWare</option>
                                            <option>- Source Pan</option>
                                            <option>Handcrafted Carpets</option>
                                            <option>Kitchen Tools</option>
                                            <option>- Camrack</option>
                                            <option>- Camtread Tray</option>
                                            <option>- Chafing Dishes</option>
                                            <option>- Cutleries</option>
                                            <option>- GN Containers</option>
                                            <option>- Ingredient Bin</option>
                                            <option>- Storage Containers</option>
                                            <option>- Trolley</option>
                                            <option>Moroccan Pottery</option>
                                            <option>- Moroccan Fruits Stand</option>
                                            <option>- Moroccan Plates</option>
                                            <option>- Moroccan Pots</option>
                                            <option>- Moroccan Tagins</option>
                                            <option>- Moroccan Tea Pot and Trays</option>
                                            <option>- Moroccan Tea Seats</option>
                                            <option>Oak Barrels</option>
                                            <option>Traditional Arabic Items</option>
                                            <option>- DALLAH Coffee Pots</option>
                                            <option>- Lanterns</option>
                                            <option>- Handcrafted Carpets</option>
                                            <option>Turkish Pottery</option>
                                            <option>- Turkish Coffee Cups</option>
                                            <option>- Turkish Tea Sets</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="header-dropdown-link">

                            {{-- <a href="{{ route('frontend.wishlist.index') }}" class="wishlist-link">
                                <i class="icon-user-o"></i>
                                <span class="wishlist-count">3</span>
                                <span class="wishlist-txt">Wishlist</span>
                            </a> --}}

                            <a href="{{ route('frontend.wishlist.index') }}" class="wishlist-link">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count">3</span>
                                <span class="wishlist-txt">Wishlist</span>
                            </a>

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                    <span class="cart-txt">Cart</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">MS-TH-10093</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $84.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{ asset('frontend/img/image-483.jpg') }}" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i
                                                    class="icon-close"></i></a>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">MS-TH-10092</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $76.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{ asset('frontend/img/image-482.jpg') }}"
                                                        alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i
                                                    class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$160.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ route('frontend.cart.index') }}" class="btn btn-primary">View
                                            Cart</a>
                                        <a href="{{ route('frontend.checkout.index') }}"
                                            class="btn btn-outline-primary-2"><span>Checkout</span><i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown show is-on" data-visible="true">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" data-display="static"
                                title="Browse Categories">
                                Browse Categories
                            </a>

                            <div class="dropdown-menu show">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">

                                      
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#">Cooking</a>

                                            <div class="megamenu">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="menu-title">Cookware</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Cookware Sets</a></li>
                                                                <li><a href="#">Pans, Griddles & Woks</a></li>
                                                                <li><a href="#">Pots</a></li>
                                                                <li><a href="#">Skillets & Grill Pans</a></li>
                                                                <li><a href="#">Kettles</a></li>
                                                                <li><a href="#">Soup & Stockpots</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="menu-title">Dinnerware & Tabletop</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Plates</a></li>
                                                                <li><a href="#">Cups & Mugs</a></li>
                                                                <li><a href="#">Trays & Platters</a></li>
                                                                <li><a href="#">Coffee & Tea Serving</a></li>
                                                                <li><a href="#">Salt & Pepper Shaker</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="menu-title">Cooking Appliances</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Microwaves</a></li>
                                                                <li><a href="#">Coffee Makers</a></li>
                                                                <li><a href="#">Mixers & Attachments</a></li>
                                                                <li><a href="#">Slow Cookers</a></li>
                                                                <li><a href="#">Air Fryers</a></li>
                                                                <li><a href="#">Toasters & Ovens</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->

                                                    <div class="row menu-banners">
                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    {{-- <img src="assets/images/demos/demo-13/menu/1.jpg"
                                                                        alt="image"> --}}
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    {{-- <img src="assets/images/demos/demo-13/menu/2.jpg"
                                                                        alt="image"> --}}
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    {{-- <img src="assets/images/demos/demo-13/menu/3.jpg"
                                                                        alt="image"> --}}
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .megamenu -->
                                        </li>                                        
                                        <li><a href="#">Home Appliances</a></li>
                                        <li><a href="#">Handcrafted Carpets</a></li>
                                        <li><a href="#">Kitchen Tools</a></li>
                                        <li><a href="#">Moroccan Pottery</a></li>
                                        <li><a href="#">Oak Barrels</a></li>
                                        <li><a href="#">Traditional Arabic Items</a></li>
                                        <li><a href="#">Turkish Pottery</a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .col-lg-3 -->
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li>
                                    <a href="{{ route('frontend.index') }}" class="">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.dashboard') }}" class="">Dashboard</a>
                                </li>
                            </ul>
                            <!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .col-lg-9 -->
                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i>
                        <p>Clearance Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
