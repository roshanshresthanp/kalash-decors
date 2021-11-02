<header class="shop_header_area carousel_menu_area">
    <div class="carousel_top_header black_top_header row m0">
        <div class="container">
            <div class="carousel_top_h_inner">
                <div class="float-md-left">
                    <div class="top_header_left">
                        <div class="selector">
                            <select class="language_drop" name="countries" id="countries" style="width:400px;">
                              <option value='yt' data-image="frontend/img/icon/flag-1.png" data-imagecss="flag yt">Aus</option>
                              {{-- <option value='yu' data-image="frontend/img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                              <option value='yt' data-image="frontend/img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                              <option value='yu' data-image="frontend/img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option> --}}
                            </select>
                        </div>
                        <select class="selectpicker usd_select">
                            <option>AUD</option>
                            <option>$</option>
                            <option>$</option>
                        </select>
                    </div>
                </div>
                <div class="float-md-right">
                    <ul class="account_list">
                        {{-- <li><a href="#">My Account</a></li> --}}
                        <li><a href="#">Wish List (0)</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                    @if (Route::has('login'))
                        @auth
                    <li><a href="{{ url('/home') }}" >Home</a></li>
                    <li> <a href="{{route('logout')}}"   onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">Sign Out</a></li>
                            <li><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                             @else
                        <li><a href="{{ route('login') }}" >Log in</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" >Register</a></li>
                            @endif
                        @endauth
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel_menu_inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                {{-- <a class="navbar-brand" href="#"><img src="frontend/img/logo.png" alt=""></a> --}}
                <div >
                    <h2>KalashDecors</h2>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown submenu {{request()->is('/')? 'active' :''}}">
                            <a class="nav-link " href="{{ url('/') }}" role="button" >
                            Home
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="index.html">Home Simple</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-carousel.html">Home Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-fullwidth.html">Home Full Width</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-parallax.html">Home Parallax</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-sidebar.html">Home Boxed</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-fixed-menu.html">Home Fixed</a></li>
                            </ul> --}}
                        </li>
                        {{-- <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages 
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
                                <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
                                <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
                                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item dropdown submenu {{request()->is('products')? 'active' :''}}">
                            <a class="nav-link dropdown-toggle" href="{{ route('products.index') }}" >
                            Shop 
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-2column.html">Prodcut No Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-3column.html">Prodcut Two Column</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-4column.html">Product Grid</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.html">Categories Left Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.html">Categories Right Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.html">Categories Grid Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="product-details.html">Prodcut Details 01</a></li>
                                <li class="nav-item"><a class="nav-link" href="product-details2.html">Prodcut Details 02</a></li>
                                <li class="nav-item"><a class="nav-link" href="product-details3.html">Prodcut Details 03</a></li>
                                <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Shopping Cart 01</a></li>
                                <li class="nav-item"><a class="nav-link" href="shopping-cart2.html">Shopping Cart 02</a></li>
                                <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
                            </ul> --}}
                        </li>
                        <li class="nav-item {{request()->is('about-us')? 'active' :''}}"><a class="nav-link" href="{{ route('about-us.index') }}">About Us</a></li> 
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('products.create') }}">View page</a></li>  --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li> --}}
                        <li class="nav-item {{request()->is('contact')? 'active' :''}}"><a class="nav-link" href="{{ route('contact.index') }}">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                        <li class="user_icon"><a href="#"><i class="icon-user icons"></i></a></li>
                        <li class="cart_cart"><a href="#"><i class="icon-handbag icons "></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>