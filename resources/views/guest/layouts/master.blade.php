<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>KalashDecors</title>

        <!-- Icon css link -->
        <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendors/line-icon/css/simple-line-icons.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendors/elegant-icon/style.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{asset('frontend/vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendors/bootstrap-selector/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="vendors/vertical-slider/css/jQuery.verticalCarousel.css')}}" rel="stylesheet">
        
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
         
               
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn1 {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #070606;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn1:hover {
  color: #0c0b0b;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active1 {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container1 {
  display: none;
  background-color: #f3ecec;
  padding-left: 8px;
  padding: 20px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
           </style>
        <![endif]-->
    </head>
      
    <body class="home_sidebar">
        
        <div class="container">
   
            @if (Route::has('login'))
                <div class="rel top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a><p style="float: left;"> </p>
                        <a href="{{route('logout')}}"   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
       
        </div>
            <!--================Menu Area =================-->
           
            
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
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Wish List (0)</a></li>
                                    <li><a href="#">Shopping Cart</a></li>
                                    <li><a href="#">Checkout</a></li>
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
                                <h1>KalashDecors</h1>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>

                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown submenu active">
                                        <a class="nav-link dropdown-toggle" href="{{ url('/') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <li class="nav-item dropdown submenu">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li> 
                                    {{-- <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li> --}}
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Contact</a></li>
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
            <div>
                @yield('content')
            </div>
            <footer class="footer_area border_none">
                <div class="container">
                    <div class="footer_widgets">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-6">
                                <aside class="f_widget f_about_widget">
                                    {{-- <img src="frontend/img/logo.png" alt=""> --}}
                                    <div>
                                        <h3>KalashDecors</h3>
                                    </div><br>
                                   
                                    <h6>Social:</h6>
                                    <ul>
                                        <li><a href="#"><i class="social_facebook"></i></a></li>
                                        <li><a href="#"><i class="social_twitter"></i></a></li>
                                        <li><a href="#"><i class="social_pinterest"></i></a></li>
                                        <li><a href="#"><i class="social_instagram"></i></a></li>
                                        <li><a href="#"><i class="social_youtube"></i></a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_info_widget">
                                    <div class="f_w_title">
                                        <h3>Information</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery information</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Returns & Refunds</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_service_widget">
                                    <div class="f_w_title">
                                        <h3>Customer Service</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">My account</a></li>
                                        <li><a href="#">Ordr History</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_extra_widget">
                                    <div class="f_w_title">
                                        <h3>Extras</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Specials</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_account_widget">
                                    <div class="f_w_title">
                                        <h3>My Account</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">My account</a></li>
                                        <li><a href="#">Ordr History</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </footer>
            <!--================End Footer Area =================-->
           
          
    </body>
         
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{asset('frontend/js/popper.min.js')}}"></script>
            <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
            <!-- Rev slider js -->
            <script src="{{asset('frontend/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
            <!-- Extra plugin css -->
            <script src="{{asset('frontend/vendors/counterup/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/counterup/jquery.counterup.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/bootstrap-selector/js/bootstrap-select.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/image-dropdown/jquery.dd.min.js')}}"></script>
            <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>
            <script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/isotope/isotope.pkgd.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('frontend/vendors/vertical-slider/js/jQuery.verticalCarousel.js')}}"></script>
            <script src="{{asset('frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
            <script src="{{asset('frontend/js/theme.js')}}"></script>
            <script>
                /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                var dropdown = document.getElementsByClassName("dropdown-btn1");
                var i;
                
                for (i = 0; i < dropdown.length; i++) {
                  dropdown[i].addEventListener("click", function() {
                  this.classList.toggle("active");
                  var dropdownContent = this.nextElementSibling;
                  if (dropdownContent.style.display === "block") {
                  dropdownContent.style.display = "none";
                  } else {
                  dropdownContent.style.display = "block";
                  }
                  });
                }
                </script>
        </html>