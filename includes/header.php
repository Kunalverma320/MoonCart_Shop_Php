<?php   
session_start() ;
error_reporting(0);
include("config.php");
if(isset($_SESSION['customer_name'])) {
    $fullName = $_SESSION['customer_name'];
    $firstName = explode(' ', $fullName)[0];
}

?>


<header class="site-header mo-left header header-transparent">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg" id="condition-nav">
        <div class="main-bar clearfix">
            <div class="container-fluid clearfix">
                <!-- Website Logo -->
                <div class="logo-header logo-dark me-md-5">
                    <a href="index.php"><img src="images/logo.svg" alt="logo" /></a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>



                <!-- EXTRA NAV -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <ul class="header-right">


                            <ul>

                                <!-- <li class="nav-item login-link">
                                <a class="nav-link" href="shop-my-account.php">
                                    LOGIN / REGISTER
                                </a>
                            </li> -->


                                <li class="nav-item search-link">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10.0535" cy="10.55" r="7.49047" stroke="var(--white)"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.2632 16.1487L18.1999 19.0778" stroke="var(--white)"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item wishlist-link">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.64119 10.4097C1.74702 7.61808 2.79202 4.42724 5.72285 3.48308C7.26452 2.98558 8.96619 3.27891 10.2479 4.24308C11.4604 3.30558 13.2245 2.98891 14.7645 3.48308C17.6954 4.42724 18.747 7.61808 17.8537 10.4097C16.462 14.8347 10.2479 18.2431 10.2479 18.2431C10.2479 18.2431 4.07952 14.8864 2.64119 10.4097Z"
                                                stroke="var(--white)" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.5813 6.32781C14.473 6.61614 15.103 7.41197 15.1788 8.34614"
                                                stroke="var(--white)" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item cart-link">
                                    <a href="javascript:void(0);" class="nav-link cart-btn" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.08374 2.61947C1.08374 2.27429 1.36356 1.99447 1.70874 1.99447H3.29314C3.91727 1.99447 4.4722 2.39163 4.67352 2.98239L5.06379 4.1276H15.4584C17.6446 4.1276 19.4168 5.89981 19.4168 8.08593V11.5379C19.4168 13.7241 17.6446 15.4963 15.4584 15.4963H9.22182C7.30561 15.4963 5.66457 14.1237 5.32583 12.2377L4.00967 4.90953L3.49034 3.3856C3.46158 3.30121 3.3823 3.24447 3.29314 3.24447H1.70874C1.36356 3.24447 1.08374 2.96465 1.08374 2.61947ZM5.36374 5.3776L6.55614 12.0167C6.78791 13.3072 7.91073 14.2463 9.22182 14.2463H15.4584C16.9542 14.2463 18.1668 13.0337 18.1668 11.5379V8.08593C18.1668 6.59016 16.9542 5.3776 15.4584 5.3776H5.36374Z"
                                                fill="var(--white)" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.16479 17.8278C8.16479 17.1374 8.72444 16.5778 9.4148 16.5778H9.42313C10.1135 16.5778 10.6731 17.1374 10.6731 17.8278C10.6731 18.5182 10.1135 19.0778 9.42313 19.0778H9.4148C8.72444 19.0778 8.16479 18.5182 8.16479 17.8278Z"
                                                fill="var(--white)" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.8315 17.8278C14.8315 17.1374 15.3912 16.5778 16.0815 16.5778H16.0899C16.7802 16.5778 17.3399 17.1374 17.3399 17.8278C17.3399 18.5182 16.7802 19.0778 16.0899 19.0778H16.0815C15.3912 19.0778 14.8315 18.5182 14.8315 17.8278Z"
                                                fill="var(--white)" />
                                        </svg>
                                        <span
                                            class="badge badge-circle"><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></span>

                                    </a>
                                </li>


                            </ul>
                    </div>
                </div>

                <!-- Main Nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <div class="logo-header">
                        <a href="index.php"><img src="images/logo.svg" alt="" /></a>
                    </div>
                    <ul class="nav navbar-nav dark-nav">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li class="has-mega-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>Home</span></a>
                            <div class="mega-menu demo-menu">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <a href="index.php"><img src="images/demo/demo-1.png" alt="/" />
                                            <span class="menu-title">Home Page</span></a>
                                    </div>

                                </div>
                            </div>
                        </li> -->
                        <li class="has-mega-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>Shop</span></a>
                            <div class="mega-menu shop-menu">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-6">
                                                <a href="javascript:;" class="menu-title">Shop Structure</a>
                                                <ul>

                                                    <li>
                                                        <a href="shop-with-category.php">Shop With Category</a>
                                                    </li>

                                                </ul>
                                                <a href="javascript:;" class="menu-title">Product Structure</a>
                                                <ul>
                                                    <li>
                                                        <a href="product-default.php">Default</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-thumbnail.php">Thumbnail</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <a href="javascript:;" class="menu-title">Shop Pages</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop-wishlist.php">Wishlist</a>
                                                    </li>
                                                    <li><a href="shop-cart.php">Cart</a></li>
                                                    <li>
                                                        <a href="shop-checkout.php">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-order-tracking.php">Order Tracking</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-my-account.php">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-registration.php">Registration</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5 col-sm-4 col-6 d-none d-md-block">
                                                <div class="adv-media">
                                                    <img src="images/adv-1.png" alt="/" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="month-deal">
                                                    <div>
                                                        <h3>Deal of the month</h3>
                                                        <p class="mb-0">
                                                            Yes! Send me exclusive offers, personalised,
                                                            and unique gift ideas, tips for shopping on
                                                            MoonCart
                                                            <a href="shop-standard.php" class="dz-link-2">View
                                                                All Products</a>
                                                        </p>
                                                    </div>
                                                    <div class="sale-countdown">
                                                        <div class="countdown text-center">
                                                            <div class="date">
                                                                <span class="time days text-primary"></span>
                                                                <span class="work-time">Days</span>
                                                            </div>
                                                            <div class="date">
                                                                <span class="time hours text-primary"></span>
                                                                <span class="work-time">Hours</span>
                                                            </div>
                                                            <div class="date">
                                                                <span class="time mins text-primary"></span>
                                                                <span class="work-time">Minutess</span>
                                                            </div>
                                                            <div class="date">
                                                                <span class="time secs text-primary"></span>
                                                                <span class="work-time">Second</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <!-- <li class="has-mega-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>Blog</span></a>
                            <div class="mega-menu blog-menu">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <a href="javascript:;" class="menu-title">Blog Dark Style</a>
                                        <ul>
                                            <li>
                                                <a href="blog-dark-2-column.php">Blog 2 Column</a>
                                            </li>
                                            <li>
                                                <a href="blog-dark-2-column-sidebar.php">Blog 2 Column
                                                    Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-dark-3-column.php">Blog 3 Column</a>
                                            </li>
                                            <li>
                                                <a href="blog-dark-half-image.php">Blog Half Image</a>
                                            </li>
                                        </ul>
                                        <a href="javascript:;" class="menu-title">Blog Light Style</a>
                                        <ul>
                                            <li>
                                                <a href="blog-light-2-column.php">Blog 2 Column</a>
                                            </li>
                                            <li>
                                                <a href="blog-light-2-column-sidebar.php">Blog 2 Column
                                                    Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-light-3-column.php">Blog 3 Column</a>
                                            </li>
                                            <li>
                                                <a href="blog-light-half-image.php">Blog Half Image</a>
                                            </li>
                                        </ul>
                                        <a href="javascript:;" class="menu-title">Blog Details</a>
                                        <ul>
                                            <li>
                                                <a href="post-standard.php">Post Standard</a>
                                            </li>
                                            <li>
                                                <a href="post-header-image.php">Post Header Image</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <a href="javascript:;" class="menu-title">Recent Posts</a>
                                        <div class="widget widget_post pt-2">
                                            <ul>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="images/shop/product/small/1.png" alt="" />
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name">
                                                            <a href="post-standard.php">Wooden Water
                                                                Bottles</a>
                                                        </h6>
                                                        <span class="time">July 23, 2023</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="images/shop/product/small/2.png" alt="" />
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name">
                                                            <a href="post-standard.php">Eco friendly bags</a>
                                                        </h6>
                                                        <span class="time">July 23, 2023</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="images/shop/product/small/3.png" alt="" />
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name">
                                                            <a href="post-standard.php">Bamboo toothbrushes</a>
                                                        </h6>
                                                        <span class="time">July 23, 2023</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="images/shop/product/small/2.png" alt="" />
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name">
                                                            <a href="post-standard.php">Eco friendly bags</a>
                                                        </h6>
                                                        <span class="time">July 23, 2023</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="images/shop/product/small/1.png" alt="" />
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name">
                                                            <a href="post-standard.php">Wooden Water
                                                                Bottles</a>
                                                        </h6>
                                                        <span class="time">July 23, 2023</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="sub-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>More</span></a>
                            <ul class="sub-menu">
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="about-me.php">About Me</a></li>
                                <li><a href="pricing-table.php">Pricing Table</a></li>
                                <li>
                                    <a href="our-gift-vouchers.php">Our Gift Vouchers</a>
                                </li>
                                <li><a href="what-we-do.php">What We Do</a></li>
                                <li><a href="faqs-1.php">Faqs</a></li>
                                <li><a href="our-team.php">Our Team</a></li>

                                <!-- <li><a href="error-1.php">Error 404</a></li> -->
                                <!-- <li>
											<a href="under-construction.php">Under Construction</a>
										</li> -->
                                <li><a href="coming-soon.php">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="post-standard.php">Blog</a></li>

                        <li><a href="contact.php">Contact Us</a></li>
                        <?php if(isset($_SESSION['user_role'])){ ?>
                        <li class="sub-menu sub-menu-down">
                            <a href="javascript:void(0);"><span><i
                                        class="fa-solid fa-user mx-2"></i><?php echo $firstName; ?></span></a>
                            <ul class="sub-menu">

                                <li>
                                    <a href="myprofile.php">My Account</a>
                                </li>
                                <li><a href="shop-cart.php">Cart</a></li>
                                <li>
                                    <a href="shop-wishlist.php">Wishlist</a>
                                </li>

                                <!-- <li>
                                    <a href="shop-checkout.php">Checkout</a>
                                </li> -->
                                <li>
                                    <a href="shop-order-tracking.php">Order Tracking</a>
                                </li>

                                <li><a href="Logout.php">Logout</a></li>
                                <li>
                            </ul>
                        </li>
                        <?php } ?>
                        <?php if(!isset($_SESSION['user_role'])){ ?>
                        <li class="sub-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>Login/Register</span></a>
                            <ul class="sub-menu">

                                <li><a href="shop-my-account.php">Login</a></li>
                                <li><a href="shop-registration.php">Register</a></li>

                            </ul>
                        </li>
                        <?php } ?>

                    </ul>

                    <div class="dz-social-icon">
                        <ul>
                            <li>
                                <a class="fab fa-facebook-f" target="_blank" href="javascript:void(0);"></a>
                            </li>
                            <li>
                                <a class="fab fa-twitter" target="_blank" href="javascript:void(0);"></a>
                            </li>
                            <li>
                                <a class="fab fa-linkedin-in" target="_blank"
                                    href="https://www.linkedin.com/showcase/3686700/admin/"></a>
                            </li>
                            <li>
                                <a class="fab fa-instagram" target="_blank" href="javascript:void(0);"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->

    <!-- SearchBar -->
    <div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            &times;
        </button>
        <div class="container">
            <form class="header-item-search">
                <div class="input-group search-input">
                    <select class="default-select">
                        <option>All Categories</option>
                        <option>Wooden Bottles</option>
                        <option>Wooden Furniture</option>
                        <option>Metal Utensils</option>
                        <option>Wooden Utensils</option>
                        <option>Baby Products</option>
                        <option>Yoga Mats</option>
                        <option>Eco-Friendly</option>
                        <option>Childern's Strollers</option>
                        <option>Bamboo products</option>
                        <option>Healthy Products</option>
                        <option>Luxury Couch</option>
                        <option>Video Instructors</option>
                    </select>
                    <input type="text" class="form-control" id="search_main"
                        aria-label="Text input with dropdown button" placeholder="Search Product" />
                    <button class="btn" id="search_button" type="button">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10.0535" cy="10.5399" r="7.49047" stroke="#0D775E" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.2632 16.1387L18.1999 19.0677" stroke="#0D775E" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <ul class="recent-tag">
                    <li class="pe-0"><span>Quick Search :</span></li>
                    <li><a href="shop-list.php">Wooden Products</a></li>
                    <li><a href="shop-list.php">Metal Products</a></li>
                    <li><a href="shop-list.php">Baby Products</a></li>
                    <li><a href="shop-list.php">Yoga Mats</a></li>
                </ul>
            </form>
            <div class="row">
                <div class="col-xl-12">
                    <h5 class="mb-3">You May Also Like</h5>
                    <div class="swiper category-swiper2">
                        <!-- <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/1.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Wooden Water Bottles</a>
                                        </h6>
                                        <h6 class="price">$40.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/3.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Bamboo toothbrushes</a>
                                        </h6>
                                        <h6 class="price">$30.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/4.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Eco friendly bags</a>
                                        </h6>
                                        <h6 class="price">$35.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/2.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Wooden Cup</a>
                                        </h6>
                                        <h6 class="price">$20.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/5.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Bamboo toothbrushes</a>
                                        </h6>
                                        <h6 class="price">$70.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/6.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Eco friendly bags</a>
                                        </h6>
                                        <h6 class="price">$45.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/7.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Wooden Bottles</a>
                                        </h6>
                                        <h6 class="price">$40.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="images/shop/product/4.png" alt="image" />
                                    </div>
                                    <div class="dz-content">
                                        <h6 class="title">
                                            <a href="shop-list.php">Paper Bags</a>
                                        </h6>
                                        <h6 class="price">$60.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SearchBar -->



    <script>
$(document).ready(function(){
    $("#search_button").click(function(){
        var searchValue = $("#search_main").val();
        window.location.href = "shop-with-category.php?search=" + searchValue;
    });
});
var input = document.getElementById("search_main");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("search_button").click();
  }
});
</script>






    <?php 
    
    $show=$_GET['show'];
    
    ?>
    <!-- Sidebar cart -->
    <div class="offcanvas dz-offcanvas offcanvas offcanvas-end <?php echo $show;  ?>" tabindex="-1" id="offcanvasRight">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            &times;
        </button>
        <div class="offcanvas-body">
            <div class="product-description">
                <div class="dz-tabs">
                    <ul class="nav nav-tabs center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="shopping-cart" data-bs-toggle="tab"
                                data-bs-target="#shopping-cart-pane" type="button" role="tab"
                                aria-controls="shopping-cart-pane" aria-selected="true">
                                Shopping Cart
                                <span class="badge badge-light"><?php if (isset($_SESSION['cart'])) : ?>
                                    <?php echo count($_SESSION['cart']);; ?>
                                    <?php endif; ?></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="wishlist" data-bs-toggle="tab" data-bs-target="#wishlist-pane"
                                type="button" role="tab" aria-controls="wishlist-pane" aria-selected="false">
                                Wishlist
                                <span class="badge badge-light">2</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content pt-4" id="dz-shopcart-sidebar">
                        <div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel"
                            aria-labelledby="shopping-cart" tabindex="0">
                            <div class="shop-sidebar-cart">
                                <ul class="sidebar-cart-list">
                                    <?php
                                    $mainprce = 0;
                                    if (isset($_SESSION['cart'])) { 
                                        $quan=  $_SESSION['cart'];                                                               
                                        foreach ($_SESSION['cart'] as $cart) {
                                            $idm = $cart['pro_id'];                                          
                                            $vbm .= $cart['pro_id'] . ',';
                                            $queryret = mysqli_query($con, "SELECT * FROM products WHERE id='$idm'");
                                            while ($mum = mysqli_fetch_array($queryret)) {
                                                $product_discount_price = $mum['product_discount_price'];
                                                $mainprce += $product_discount_price;
                                ?>
                                    <li>
                                        <div class="cart-widget">
                                            <div class="dz-media me-3">
                                                <img src="images/shop/product/<?php echo $mum['product_master_image'] ?>"
                                                    alt="" />
                                            </div>
                                            <div class="cart-content">
                                                <h6 class="title">
                                                    <a
                                                        href="product-thumbnail.php"><?php echo $mum['product_name'] ?></a>
                                                </h6>
                                                <div class="d-flex align-items-center">
                                                    <!-- <div class="btn-quantity light quantity-sm me-3">
                                                        <input type="text" value="1" id="quantity_pro" name="demo_vertical2" />
                                                    </div> -->
                                                    <h6 class="dz-price text-primary mb-0">
                                                        Rs.<?php echo $product_discount_price ?>
                                                    </h6>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="dz-close"
                                                onclick="unsetSession('<?php echo $idm; ?>')">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <?php
                                            }
                                        }
                                        $vbm = rtrim($vbm, ',');
                                    }
                                ?>

                                    <script>
                                    function unsetSession(productId) {

                                        $.ajax({
                                            type: 'POST',
                                            url: 'unset_session.php',
                                            data: {
                                                productId: productId
                                            },
                                            success: function(response) {
                                                // Session unset successfully
                                                // Optionally, you can remove the item from the cart on the client-side here
                                            },
                                            error: function(xhr, status, error) {
                                                // Handle errors here
                                            }
                                        });
                                    }
                                    </script>


                                </ul>
                                <input type="hidden" name="product_id" id="product_id" value="<?php echo $vbm; ?>"
                                    id="product_id">

                                <div class="cart-total">
                                    <h5 class="mb-0">Subtotal:</h5>
                                    <h5 class="mb-0">Rs. <?php echo $mainprce;  ?></h5>
                                </div>
                                <center>
                                    <div class="mt-auto">
                                        <div class="shipping-time">
                                            <!-- <div class="dz-icon">
                                            <i class="flaticon flaticon-ship"></i>
                                        </div> -->
                                            <!-- <div class="shipping-content">
                                            <h6 class="title pe-4">
                                                Congratulations , you've got free shipping!
                                            </h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-animated border-0" style="width: 75%"
                                                    role="progressbar">
                                                    <span class="sr-only">75% Complete</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        </div>
                                        <!-- <button class="btn btn-light btn-block m-b20" id="checkout"
                                        name="checkout">Checkout</button> -->
                                        <button> <a href="shop-cart.php" id="checkcart"
                                                class="btn btn-secondary btn-block">View Cart</a></button>
                                    </div>
                                </center>

                            </div>
                        </div>

                        <script>
                        $(document).ready(function() {
                            $('#checkcart').click(function(e) {

                                e.preventDefault();
                                var productId = $('#product_id').val();

                                console.log(productId);
                                $.ajax({
                                    url: 'formdata.php',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {
                                        product_id: productId
                                    },
                                    success: function(response) {
                                        if (response.status ===
                                            'success') {

                                            window.location
                                                .href =
                                                'shop-cart.php';


                                        } else {

                                            alert('Error: ' +
                                                response
                                                .message);
                                        }
                                    },
                                    error: function(xhr, status,
                                        error) {
                                        window.location
                                            .href =
                                            'shop-cart.php';
                                    }
                                });
                            });
                        });
                        </script>


                        <div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist"
                            tabindex="0">
                            <div class="shop-sidebar-cart">
                                <ul class="sidebar-cart-list">
                                    <li>
                                        <div class="cart-widget">
                                            <div class="dz-media me-3">
                                                <img src="images/shop/shop-cart/pic1.jpg" alt="" />
                                            </div>
                                            <div class="cart-content">
                                                <h6 class="title">
                                                    <a href="product-thumbnail.php">Wooden Water Bottles</a>
                                                </h6>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="dz-price text-primary mb-0">
                                                        $50.00
                                                    </h6>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="dz-close">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-widget">
                                            <div class="dz-media me-3">
                                                <img src="images/shop/shop-cart/pic2.jpg" alt="" />
                                            </div>
                                            <div class="cart-content">
                                                <h6 class="title">
                                                    <a href="product-thumbnail.php">Wooden Cup</a>
                                                </h6>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="dz-price text-primary mb-0">
                                                        $40.00
                                                    </h6>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="dz-close">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-widget">
                                            <div class="dz-media me-3">
                                                <img src="images/shop/shop-cart/pic3.jpg" alt="" />
                                            </div>
                                            <div class="cart-content">
                                                <h6 class="title">
                                                    <a href="product-thumbnail.php">Bamboo toothbrushes</a>
                                                </h6>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="dz-price text-primary mb-0">
                                                        $65.00
                                                    </h6>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="dz-close">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-auto">
                                    <a href="shop-wishlist.php" class="btn btn-secondary btn-block">Check Your
                                        Favourite</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar cart -->
</header>

<!-- <header class="header">
        <h1>Sticky Header</h1>
        <nav class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="php.php">php</a></li>
                <?php if(isset($_SESSION['user_role'])){ ?>
                <li><a href="php.php">My Profile</a></li>
                <?php } ?>
                <?php if(!isset($_SESSION['user_role'])){ ?>

                <li><a href="login.php">Login</a></li>
                <?php } ?>
                <?php if(isset($_SESSION['user_role'])){ ?>
                <li><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header> -->