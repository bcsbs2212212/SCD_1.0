<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="submenu">
                       <a href="javascript:;">Categories</a>
                       <ul>
                                <li><a href="{{ route('categories.men') }}">Men</a></li>
                                <li><a href="{{ route('categories.women') }}">Women</a></li>
                                <li><a href="{{ route('categories.kids') }}">Kids</a></li>
                                <li><a href="{{ route('categories.accessories') }}">Accessories</a></li>
                        </ul>
                        </li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('products') }}">Products</a></li>
                                <li><a href="{{ route('single-product') }}">Single Product</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </li>
                           
                            <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>