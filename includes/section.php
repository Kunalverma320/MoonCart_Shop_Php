<?php 


include("config.php");





?>
<script>
const conditionNav = document.getElementById('condition-nav');

// Create a new Intersection Observer
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // If the observed element is in view
        if (entry.intersectionRatio > 0) {
            // Add the 'is-fixed' class
            conditionNav.classList.add('is-fixed');
        } else {
            // Remove the 'is-fixed' class
            conditionNav.classList.remove('is-fixed');
        }
    });
});

// Start observing the target element
observer.observe(conditionNav);
</script>

<div class="page-content bg-white">

    <!--Swiper Banner Start -->
    <div class="main-slider style-1">
        <div class="main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-light">
                    <div class="container-fluid">
                        <div class="banner-content">
                            <div class="row gx-0">
                                <div class="col-md-6 col-sm-6 align-self-center">
                                    <div class="swiper-content">
                                        <div class="content-info">
                                            <h1 class="title mb-2" data-swiper-parallax="-20">Natural Wooden
                                                Products</h1>
                                            <p class="text mb-0" data-swiper-parallax="-40">Sell globally in
                                                minutes with localized currencies, languages, and experiences in
                                                every market.</p>

                                            <div class="swiper-meta-items" data-swiper-parallax="-50">
                                                <div class="meta-content">
                                                    <span class="price-name">Price</span>
                                                    <span class="price-num">$125.75</span>
                                                </div>
                                                <div class="meta-content">
                                                    <span class="color-name">Color</span>
                                                    <div class="d-flex align-items-center color-filter">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="radioNoLabel" id="radioNoLabel1" value="#24262B"
                                                                aria-label="..." checked>
                                                            <span></span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="radioNoLabel" id="radioNoLabel2" value="#0D775E"
                                                                aria-label="...">
                                                            <span></span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="radioNoLabel" id="radioNoLabel3" value="#C7D1CF"
                                                                aria-label="...">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-btn" data-swiper-parallax="-60">
                                                <a class="btn btn-secondary  me-xl-3 me-2 btnhover20"
                                                    href="shop-cart.php">ADD TO CART</a>
                                                <a class="btn btn-outline-secondary btnhover20"
                                                    href="product-default.php">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="banner-media">
                                        <div class="img-preview" data-swiper-parallax="-100">
                                            <img src="images/banner/banner-media.png" alt="banner-media">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-light">
                    <div class="container-fluid">
                        <div class="banner-content">
                            <div class="row gx-0">
                                <div class="col-md-6 col-sm-6 align-self-center">
                                    <div class="swiper-content">
                                        <div class="content-info">
                                            <h1 class="title mb-2" data-swiper-parallax="-20">Explore Wooden
                                                Products</h1>
                                            <p class="text mb-0" data-swiper-parallax="-40">Sell globally in
                                                minutes with localized currencies, languages, and experiences in
                                                every market.</p>

                                            <div class="swiper-meta-items" data-swiper-parallax="-50">
                                                <div class="meta-content">
                                                    <span class="price-name">Price</span>
                                                    <span class="price-num">$120.80</span>
                                                </div>
                                                <div class="meta-content">
                                                    <span class="color-name">Color</span>
                                                    <div class="d-flex align-items-center color-filter">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="radioNoLabel" id="radioNoLabel4" value="#24262B"
                                                                aria-label="..." checked>
                                                            <span></span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="radioNoLabel" id="radioNoLabel5" value="#0D775E"
                                                                aria-label="...">
                                                            <span></span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="radioNoLabel" id="radioNoLabel6" value="#C7D1CF"
                                                                aria-label="...">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-btn" data-swiper-parallax="-60">
                                                <a class="btn btn-secondary  me-xl-3 me-2 btnhover20"
                                                    href="shop-cart.php">ADD TO CART</a>
                                                <a class="btn btn-outline-secondary btnhover20"
                                                    href="product-default.php">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="banner-media">
                                        <div class="img-preview" data-swiper-parallax="-100">
                                            <img src="images/banner/banner-media-2.png" alt="banner-media">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination-wrapper">
                <div class="swiper-pagination-five"></div>
            </div>
            <div class="pagination-align style-1">
                <div class="swiper-button-prev">
                    <i class="flaticon flaticon-left-chevron-1"></i>
                </div>
                <div class="swiper-button-next">
                    <i class="flaticon flaticon-right-arrow"></i>
                </div>
            </div>
            <div class="banner-social-media">
                <ul>
                    <li>
                        <a target="_blank" href="javascript:void(0);">Instagram</a>
                    </li>
                    <li>
                        <a target="_blank" href="javascript:void(0);">Facebook</a>
                    </li>
                    <li>
                        <a target="_blank" href="javascript:void(0);">twitter</a>
                    </li>
                </ul>

            </div>
            <div class="left-text-bar justify-content-center">
                <a href="contact.php" class="service-btn btn-light">Let’s talk</a>
            </div>
        </div>
    </div>
    <!--Swiper Banner End-->

    <!-- Product Start-->
    <section class="content-inner overlay-white-middle">
        <div class="container">
            <div class="row product-style1">
                <div class="col-lg-6 p-b30 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-box style-1" style="background-image: url('images/shop/product1.png');">
                        <div class="product-content">
                            <div class="main-content">
                                <h2 class="product-name">Wooden <br> Water Bottles</h2>
                                <span class="offer">UP TO 60% OFF</span>
                            </div>
                            <a href="shop-standard.php" class="btn btn-outline-secondary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row product-style-1">
                        <div class="col-lg-12 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-box style-2" style="background-image: url('images/shop/product2.png');">
                                <div class="product-content">
                                    <div class="main-content">
                                        <h2 class="product-name">Bamboo toothbrushes</h2>
                                        <span class="offer">UP TO 60% OFF</span>
                                    </div>
                                    <a href="shop-standard.php" class="btn btn-outline-secondary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-box style-3" style="background-image: url('images/shop/product3.png');">
                                <div class="product-content">
                                    <div class="main-content">
                                        <h2 class="product-name">Reusable <br> Eco friendly bags</h2>
                                        <span class="offer">UP TO 25% OFF</span>
                                    </div>
                                    <a href="shop-standard.php" class="btn btn-outline-secondary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product End-->

    <!--Recommend Section Start-->
    <section class="content-inner-1 bg-light">
        <div class="container">
            <h3 class="title">Home Decor products</h3>
            <div class="site-filters clearfix d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <ul class="filters" data-bs-toggle="buttons">
							<li class="btn active">
								<input type="radio">
								<a href="javascript:void(0);">All Products <span>(20)</span></a> 
							</li>
							<li data-filter=".Bottle" class="btn">
								<input type="radio">
								<a href="javascript:void(0);">Bottle <span>(10)</span></a> 
							</li>
							<li data-filter=".Begs" class="btn">
								<input type="radio">
								<a href="javascript:void(0);">Begs <span>(02)</span></a> 
							</li>
							<li data-filter=".Toothbrushes" class="btn">
								<input type="radio">
								<a href="javascript:void(0);">Toothbrushes <span>(08)</span></a> 
							</li>
						</ul> -->
                <a href="shop-with-category.php"
                    class="product-link text-secondary font-14 d-flex align-items-center gap-1 text-nowrap">See all
                    products
                    <i class="icon feather icon-chevron-right font-18"></i>
                </a>
            </div>
            <div class="clearfix">

                <ul id="masonry" class="row g-xl-4 g-3">
                    <?php 
						$ret=mysqli_query($con,"SELECT * FROM products WHERE category_id=1 AND subcategory_id=1");
						while($row=mysqli_fetch_array($ret))
						{					
						?>
                    <li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp"
                        data-wow-delay="0.1s">
                        <div class="shop-card">
                            <div class="dz-media">
                                <img src="images/shop/product/<?php echo $row['product_master_image']; ?>" alt="image">
                                <div class="shop-meta">
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']; ?>">
                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                        <span class="d-md-block d-none">Quick View</span>
                                    </a>
                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                        <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                fill="white" />
                                        </svg>
                                        <svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                        </svg>
                                    </div>
                                    <a href="#" class="addToCartBtn" data-product-id="<?php echo $row['id']; ?>">
                                        <div class="btn btn-primary meta-icon dz-carticon">

                                            <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                    fill="white" />
                                                <path
                                                    d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                    fill="white" />
                                            </svg>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dz-content">
                                <h5 class="title"><a
                                        href="product-thumbnail.php?pid=<?php echo $row['id']; ?>"><?php echo $row['product_name']; ?></a>
                                </h5>
                                <ul class="star-rating">
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                fill="#FF8A00" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                fill="#FF8A00" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                fill="#FF8A00" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                fill="#E4E5E8" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                fill="#E4E5E8" />
                                        </svg>
                                    </li>
                                </ul>
                                <h6 class="price">
                                    <del>Rs.<?php echo $row['product_price']; ?></del>
                                    Rs.<?php echo $row['product_discount_price']; ?>
                                </h6>
                            </div>
                            <div class="product-tag">
                                <span class="badge badge-secondary">Sale</span>
                            </div>
                        </div>
                    </li>

                    <!-- Quick Modal Start -->
                    <div class="modal quick-view-modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="icon feather icon-x"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="dz-product-detail mb-0">
                                                <div class="swiper-btn-center-lr">
                                                    <div class="swiper quick-modal-swiper2">
                                                        <div class="swiper-wrapper" id="lightgallery">
                                                            <div class="swiper-slide">
                                                                <div class="dz-media DZoomImage">
                                                                    <a class="mfp-link lg-item"
                                                                        href="images/shop/product/<?php echo $row['product_master_image']; ?>"
                                                                        data-src="images/shop/product/<?php echo $row['product_master_image']; ?>">
                                                                        <i
                                                                            class="feather icon-maximize dz-maximize top-right"></i>
                                                                    </a>
                                                                    <img src="images/shop/product/<?php echo $row['product_master_image']; ?>"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="dz-media DZoomImage">
                                                                    <a class="mfp-link lg-item"
                                                                        href="images/shop/product/<?php echo $row['products_image_one']; ?>"
                                                                        data-src="images/shop/product/<?php echo $row['products_image_one']; ?>">
                                                                        <i
                                                                            class="feather icon-maximize dz-maximize top-right"></i>
                                                                    </a>
                                                                    <img src="images/shop/product/<?php echo $row['products_image_one']; ?>"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="dz-media DZoomImage">
                                                                    <a class="mfp-link lg-item"
                                                                        href="images/shop/product/<?php echo $row['products_image_two']; ?>"
                                                                        data-src="images/shop/product/<?php echo $row['products_image_two']; ?>">
                                                                        <i
                                                                            class="feather icon-maximize dz-maximize top-right"></i>
                                                                    </a>
                                                                    <img src="images/shop/product/<?php echo $row['products_image_two']; ?>"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="dz-media DZoomImage">
                                                                    <a class="mfp-link lg-item"
                                                                        href="images/shop/product/<?php echo $row['products_image_three']; ?>"
                                                                        data-src="images/shop/product/<?php echo $row['products_image_three']; ?>">
                                                                        <i
                                                                            class="feather icon-maximize dz-maximize top-right"></i>
                                                                    </a>
                                                                    <img src="images/shop/product/<?php echo $row['products_image_three']; ?>"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="images/shop/product/<?php echo $row['product_master_image']; ?>"
                                                                    alt="image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="images/shop/product/<?php echo $row['products_image_one']; ?>"
                                                                    alt="image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="images/shop/product/<?php echo $row['products_image_two']; ?>"
                                                                    alt="image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="images/shop/product/<?php echo $row['products_image_three']; ?>"
                                                                    alt="image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="dz-product-detail style-2 ps-xl-3 ps-0 pt-2 mb-0">
                                                <div class="dz-content">
                                                    <div class="dz-content-footer">
                                                        <div class="dz-content-start">
                                                            <span class="badge bg-purple mb-2">SALE 20% Off</span>
                                                            <h4 class="title mb-1"><a
                                                                    href="shop-with-category.php"><?php echo $row['product_name']; ?></a>
                                                            </h4>
                                                            <div class="review-num">
                                                                <ul class="dz-rating me-2">
                                                                    <li>
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                                fill="#FF8A00"></path>
                                                                        </svg>
                                                                    </li>
                                                                    <li>
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                                fill="#FF8A00"></path>
                                                                        </svg>
                                                                    </li>
                                                                    <li>
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                                fill="#FF8A00"></path>
                                                                        </svg>
                                                                    </li>
                                                                    <li>
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.2"
                                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                                fill="#5E626F"></path>
                                                                        </svg>

                                                                    </li>
                                                                    <li>
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.2"
                                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                                fill="#5E626F"></path>
                                                                        </svg>
                                                                    </li>
                                                                </ul>
                                                                <span class="text-secondary me-2">4.7 Rating</span>
                                                                <a href="javascript:void(0);">(5 customer reviews)</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="para-text">
                                                        <?php echo $row['product_summary']; ?>
                                                    </p>
                                                    <div class="meta-content m-b20 d-flex align-items-end">
                                                        <div class="me-3">
                                                            <span class="form-label">Price</span>
                                                            <span
                                                                class="price-num">Rs.<?php echo $row['product_discount_price']; ?>
                                                                <del>Rs.<?php echo $row['product_price']; ?></del></span>
                                                        </div>
                                                        <!-- <div class="btn-quantity light me-0">
                                                            <label class="form-label">Quantity</label>
                                                            <input type="text" value="1" id="quantity_pro" name="demo_vertical2">
                                                        </div> -->
                                                    </div>
                                                    <div class="btn-group cart-btn">

                                                        <?php  
                                                    $pro_id=$row['id'];
                                                    if(isset($_SESSION['customer_id'])) {
                                                    $customer_id = $_SESSION['customer_id'];

                                                    $check_query = mysqli_query($con, "SELECT * FROM shopcarts WHERE customer_id='$customer_id' AND product_id='$pro_id'");
                                                    if(mysqli_num_rows($check_query) == 1) {
                                                        ?>

                                                        <a href="shop-cart.php"
                                                            class="btn btn-md btn-secondary text-uppercase">Go To
                                                            Cart</a>

                                                        <?php

                                                    }else{
                                                        ?>

                                                        <a href="#"
                                                            class="btn btn-md btn-secondary text-uppercase addToCartBtn"
                                                            data-product-id="<?php echo $row['id']; ?>">Add To Cart</a>


                                                        <?php

                                                    }
                                                        
                                                    }else{
                                                        ?>

                                                        <a href="#"
                                                            class="btn btn-md btn-secondary text-uppercase addToCartBtn"
                                                            data-product-id="<?php echo $row['id']; ?>">Add To Cart</a>


                                                        <?php

                                                    }
                                                    ?>


                                                        <a href="shop-wishlist.php"
                                                            class="btn btn-md btn-light btn-icon">
                                                            <svg width="19" height="17" viewBox="0 0 19 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                            Add To Wishlist
                                                        </a>
                                                    </div>


                                                    <script>
                                                    $(document).ready(function() {
                                                        $('.addToCartBtn').click(function(e) {
                                                            e.preventDefault();

                                                            // Get the product ID from the button's data attribute
                                                            var productId = $(this).data('product-id');


                                                            // Send AJAX request to addToCart.php
                                                            $.ajax({
                                                                url: 'addToCart.php',
                                                                type: 'POST',
                                                                dataType: 'json',
                                                                data: {
                                                                    product_id: productId

                                                                },
                                                                success: function(response) {
                                                                    if (response.status ===
                                                                        'success') {

                                                                        // $('#offcanvasRight')
                                                                        //     .addClass(
                                                                        //         'show');
                                                                        // $('#exampleModal2')
                                                                        //     .removeClass(
                                                                        //         'show');

                                                                        // $('#exampleModal2')
                                                                        //     .addClass(
                                                                        //         'hide');



                                                                        window.location
                                                                            .href =
                                                                            'index.php?show=show';



                                                                    } else {

                                                                        alert('Error: ' +
                                                                            response
                                                                            .message);
                                                                    }
                                                                },
                                                                error: function(xhr, status,
                                                                    error) {
                                                                    // Handle AJAX error
                                                                    console.error(
                                                                        'AJAX error: ' +
                                                                        error);
                                                                }
                                                            });
                                                        });
                                                    });
                                                    </script>


                                                    <div class="dz-info mb-0">
                                                        <ul>
                                                            <li>
                                                                <strong>SKU:</strong>
                                                                <span>PRT584E63A</span>
                                                            </li>
                                                            <li>
                                                                <strong>Category:</strong>
                                                                <span><?php 

                                                $id_pro=$row['subcategory_id'];
                                                
                                                $cat = mysqli_query($con, "SELECT subcategory_name,id FROM `subcategories` WHERE category_id='$id_pro'");
                                                while ($vsd = mysqli_fetch_assoc($cat)) {
                                                    $productNames = $vsd['subcategory_name'];
                                                    $productsubid = $vsd['id'];

                                                    $explodedNames = explode(",", $productNames);
                                                    foreach ($explodedNames as $name) {
                                                        ?>

                                                                    <a href="sub-id.php?id=<?php echo $productsubid; ?>"
                                                                        style="font-size:14px; color:#517ae3;">
                                                                        <?php echo $name; ?></a>
                                                                    <?php
                                                    }
                                                }

                                                
                                                
                                                
                                                ?></span>
                                                            </li>
                                                            <li>
                                                                <strong>Tags:</strong>
                                                                <span><?php echo $row['product_tags']; ?></span>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Modal End -->
                    <?php } ?>
                </ul>

            </div>
        </div>
    </section>
    <!--Recommend Section End-->




    <!-- icon-box1 -->
    <section class="content-inner overlay-white-middle">
        <div class="container">
            <div class="row justify-content-center gx-sm-1">
                <div class="col-lg-4 col-md-4 col-sm-4 p-b30 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-bx-wraper style-1 text-center">
                        <div class="icon-bx">
                            <i class="flaticon flaticon-fast-delivery"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="dz-title m-b0">FREE SHIPPING</h3>
                            <div class="square"></div>
                            <p class="font-20">Enjoy free shipping on all orders - no minimum purchase required.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 p-b30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper style-1 text-center">
                        <div class="icon-bx">
                            <i class="flaticon flaticon-message"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="dz-title m-b0">24/7 SUPPORT</h3>
                            <div class="square"></div>
                            <p class="font-20">Our team is available 24/7 to help with any questions or
                                concerns.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 p-b30 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-bx-wraper style-1 text-center">
                        <div class="icon-bx">
                            <i class="flaticon flaticon-money-back-guarantee"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="dz-title m-b0">MONEY BACK</h3>
                            <div class="square"></div>
                            <p class="font-20">We offer a 100% money-back guarantee for your satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- icon-box1 End-->

    <!-- Newsletter -->
    <section class="newsletter-wrapper style-1">
        <div class="container">
            <div class="subscride-inner">
                <div
                    class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                    <div class="col-xl-6 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="d-flex align-items-center justify-content-center justify-content-xl-start mb-3 mb-xl-0 flex-column flex-xl-row">
                            <img class="me-4" src="images/svg/chat.svg" alt="">
                            <div class="section-head mb-0">
                                <h3 class="title text-white">SUBSCRIBE TO OUR NEWSLETTER</h3>
                                <p class="sub-title text-white">Get latest news, offers and discounts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                        <form class="dzSubscribe" action="https://mooncart.dexignzone.com/xhtml/script/mailchamp.php"
                            method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group mb-0">
                                    <input name="dzEmail" required="required" type="email" class="form-control"
                                        placeholder="Your Email Address">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit" class="btn">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                <path d="M4.20972 10.7344H15.8717" stroke="#0D775E" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.0408 4.90112L15.8718 10.7345L10.0408 16.5678"
                                                    stroke="#0D775E" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->

    <!-- Feature Product -->
    <section class="content-inner-2 adv-area">
        <div class="container-fluid px-0">
            <div class="row product-style2 g-0">
                <div class="col-lg-6 col-md-6 p-b30 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-box style-4" style="background-image: url('images/shop/large/product1.png');">
                        <div class="product-content">
                            <div class="main-content">
                                <div class="badge style-1 mb-3">From $29.05</div>
                                <h2 class="product-name">Organic Skincare for Glowing Complexion.</h2>
                                <p class="para-text">
                                    Lorem Ipsum is simply dummy text of It’s easy to get lost in the world of
                                    lovely valley vapour around and the meridian sun strikes the upper surface.
                                </p>
                            </div>
                            <a href="shop-list.php" class="btn btn-outline-secondary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 p-t30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="product-box style-4" style="background-image: url('images/shop/large/product2.png');">
                        <div class="product-content">
                            <div class="main-content">
                                <div class="badge style-1 mb-3">free shipping on all orders over $59</div>
                                <h2 class="product-name">Shop & shipment acrossthe whole North America.</h2>
                                <p class="para-text">
                                    Lorem Ipsum is simply dummy text of It’s easy to get lost in the world of
                                    lovely valley vapour around and the meridian sun strikes the upper surface.
                                </p>
                            </div>
                            <a href="shop-list.php" class="btn btn-outline-secondary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Product End -->

    <!-- Tranding Start-->
    <!-- <section class="content-inner-1">
        <div class="container">
            <div class="section-head style-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="left-content">
                    <h2 class="title">What's trending now</h2>
                    <p>Discover the most trending products in Ciseco.</p>
                </div>
                <a href="shop-list.php" class="text-secondary font-14 d-flex align-items-center gap-1">See all
                    products
                    <i class="icon feather icon-chevron-right font-18"></i>
                </a>
            </div>
            <div class="swiper-btn-center-lr">
                <div class="swiper swiper-four">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="shop-card wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <img src="images/shop/product/5.png" alt="image">
                                    <div class="shop-meta">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-eye d-md-none d-block"></i>
                                            <span class="d-md-block d-none">Quick View</span>
                                        </a>
                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                            <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                    fill="white" />
                                            </svg>
                                            <svg class="dz-heart feather feather-heart"
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>

                                        </div>
                                        <div class="btn btn-primary meta-icon dz-carticon">
                                            <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                    fill="white" />
                                                <path
                                                    d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                    fill="white" />
                                                <clipPath id="clip0_502_39063">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="shop-list.php">Wooden Toothbrushes</a></h5>
                                    <ul class="star-rating">
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                    <h6 class="price">
                                        <del>$25.00</del>
                                        $15.00
                                    </h6>
                                </div>
                                <div class="product-tag">
                                    <span class="badge badge-secondary">-5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop-card wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <img src="images/shop/product/6.png" alt="image">
                                    <div class="shop-meta">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-eye d-md-none d-block"></i>
                                            <span class="d-md-block d-none">Quick View</span>
                                        </a>
                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                            <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                    fill="white" />
                                            </svg>
                                            <svg class="dz-heart feather feather-heart"
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>

                                        </div>
                                        <div class="btn btn-primary meta-icon dz-carticon">
                                            <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                    fill="white" />
                                                <path
                                                    d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                    fill="white" />
                                                <clipPath id="clip0_502_39064">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="shop-list.php">Paper Bags</a></h5>
                                    <ul class="star-rating">
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                    <h6 class="price">
                                        <del>$25.00</del>
                                        $5.00
                                    </h6>
                                </div>
                                <div class="product-tag">
                                    <span class="badge badge-secondary">-15%</span>
                                    <span class="badge badge-primary">Featured</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop-card wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <img src="images/shop/product/7.png" alt="image">
                                    <div class="shop-meta">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-eye d-md-none d-block"></i>
                                            <span class="d-md-block d-none">Quick View</span>
                                        </a>
                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                            <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                    fill="white" />
                                            </svg>
                                            <svg class="dz-heart feather feather-heart"
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>

                                        </div>
                                        <div class="btn btn-primary meta-icon dz-carticon">
                                            <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                    fill="white" />
                                                <path
                                                    d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                    fill="white" />
                                                <clipPath id="clip0_502_39056">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="shop-list.php">Wooden Coated Bottles</a></h5>
                                    <ul class="star-rating">
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                    <h6 class="price">
                                        <del>$45.00</del>
                                        $40.00
                                    </h6>
                                </div>
                                <div class="product-tag">
                                    <span class="badge badge-secondary">Sale</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop-card wow fadeInUp" data-wow-delay="0.5s">
                                <div class="dz-media">
                                    <img src="images/shop/product/8.png" alt="image">
                                    <div class="shop-meta">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-eye d-md-none d-block"></i>
                                            <span class="d-md-block d-none">Quick View</span>
                                        </a>
                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                            <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                    fill="white" />
                                            </svg>
                                            <svg class="dz-heart feather feather-heart"
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>

                                        </div>
                                        <div class="btn btn-primary meta-icon dz-carticon">
                                            <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                    fill="white" />
                                                <path
                                                    d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                    fill="white" />
                                                <clipPath id="clip0_502_39068">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="shop-list.php">Wooden Cups</a></h5>
                                    <ul class="star-rating">
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                    <h6 class="price">
                                        <del>$75.00</del>
                                        $40.00
                                    </h6>
                                </div>
                                <div class="product-tag">
                                    <span class="badge badge-secondary">-30%</span>
                                    <span class="badge badge-primary">Featured</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop-card wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <img src="images/shop/product/8.png" alt="image">
                                    <div class="shop-meta">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-eye d-md-none d-block"></i>
                                            <span class="d-md-block d-none">Quick View</span>
                                        </a>
                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                            <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                    fill="white" />
                                            </svg>
                                            <svg class="dz-heart feather feather-heart"
                                                xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>

                                        </div>
                                        <div class="btn btn-primary meta-icon dz-carticon">
                                            <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                    fill="white" />
                                                <path
                                                    d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                    fill="white" />
                                                <clipPath id="clip0_502_36">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="shop-list.php">Wooden Tumbler</a></h5>
                                    <ul class="star-rating">
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#FF8A00"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                    fill="#E4E5E8"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                    <h6 class="price">
                                        <del>$85.00</del>
                                        $40.00
                                    </h6>
                                </div>
                                <div class="product-tag">
                                    <span class="badge badge-secondary">-20%</span>
                                    <span class="badge badge-primary">Featured</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-align">
                    <div class="tranding-button-prev btn-prev">
                        <i class="flaticon flaticon-left-chevron"></i>
                    </div>
                    <div class="tranding-button-next btn-next">
                        <i class="flaticon flaticon-chevron"></i>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Tranding Stop -->

    <!-- About Start-->
    <section class="content-inner overlay-white-dark overflow-hidden"
        style="background-image: url('images/background/bg1.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row about-style1 align-items-center">
                <div class="col-lg-6 m-b30">
                    <div class="position-relative">
                        <div class="about-thumb wow fadeInUp" data-wow-delay="0.1s">
                            <img src="images/girl.png" alt="">
                        </div>
                        <div class="our-customer wow fadeInUp" data-wow-delay="0.2s">
                            <h6>Our Satisfied User</h6>
                            <ul>
                                <li class="customer-image">
                                    <img src="images/testimonial/pic1.png" alt="">
                                </li>
                                <li class="customer-image">
                                    <img src="images/testimonial/pic2.png" alt="">
                                </li>
                                <li class="total-customer">
                                    <span class="font-14">+12K</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="px-lg-4">
                        <div class="section-head">
                            <h2 class="title">What our clients say <br> about us</h2>
                        </div>
                        <div class="swiper swiper-five">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="about-content">
                                        <p class="para-text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less
                                            normal distribution of letters, as opposed to using 'Content here,
                                            content here', making it look like readable English.</p>
                                        <div class="about-bx-detail">
                                            <div class="about-bx-pic radius">
                                                <img src="images/testimonial/testimonial4.jpg" alt="">
                                            </div>
                                            <div>
                                                <h6 class="name">Kenneth Fong</h6>
                                                <span class="position">Postgraduate Student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-content">
                                        <p class="para-text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its
                                            layout. The point of using Lorem Ipsum is that it has a more-or-less
                                            normal distribution of letters, as opposed to using 'Content here,
                                            content here', making it look like readable English.</p>
                                        <div class="about-bx-detail">
                                            <div class="about-bx-pic radius">
                                                <img src="images/testimonial/testimonial4.jpg" alt="">
                                            </div>
                                            <div>
                                                <h6 class="name">Joe Do</h6>
                                                <span class="position">Undergraduate Student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-align">
                                <div class="about-button-prev btn-prev">
                                    <i class="flaticon flaticon-left-chevron"></i>
                                </div>
                                <div class="about-button-next btn-next">
                                    <i class="flaticon flaticon-chevron"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Blog Start -->
    <section class="content-inner overlay-white-middle">
        <div class="container">
            <div class="section-head style-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="left-content">
                    <h2 class="title">Blog Post</h2>
                    <p>Discover the most trending post.</p>
                </div>
                <a href="blog-dark-2-column-sidebar.php"
                    class="text-secondary font-14 d-flex align-items-center gap-1 text-nowrap">See all Post
                    <i class="icon feather icon-chevron-right font-18"></i>
                </a>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 order-lg-1 order-2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="dz-card style-1 d-lg-block d-md-flex d-sm-flex d-block">
                        <div class="dz-media w-100">
                            <img src="images/blog/blog1.png" alt="">
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date">10 Mar 2023</li>
                                </ul>
                            </div>
                            <h3 class="dz-title mb-md-3 mb-sm-5 m-b10">
                                <a href="blog-dark-2-column.php">Uncovering The Benefits of Wooden Based
                                    Furniture</a>
                            </h3>
                            <a href="blog-dark-2-column.php" class="font-14 mt-auto read-btn">Read More
                                <i class="icon feather icon-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="dz-card blog-half style-5 m-b30">
                                <div class="dz-media">
                                    <img src="images/blog/blog2.png" alt="">
                                </div>
                                <div class="dz-info">
                                    <div class="dz-meta">
                                        <ul>
                                            <li class="post-date">17 April 2023</li>
                                        </ul>
                                    </div>
                                    <h4 class="dz-title">
                                        <a href="blog-dark-half-image.php">Explore The Benefits of Wooden
                                            Utensils In DailyLife</a>
                                    </h4>
                                    <a href="blog-dark-half-image.php" class="font-14 read-btn">Read More
                                        <i class="icon feather icon-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="dz-card blog-half style-5 m-b30">
                                <div class="dz-media">
                                    <img src="images/blog/blog3.png" alt="">
                                </div>
                                <div class="dz-info">
                                    <div class="dz-meta">
                                        <ul>
                                            <li class="post-date">20 Jan 2023</li>
                                        </ul>
                                    </div>
                                    <h4 class="dz-title">
                                        <a href="blog-dark-half-image.php">With Wooden Comb Makes Your Hairs
                                            More Beautiful and Clean</a>
                                    </h4>
                                    <a href="blog-dark-half-image.php" class="font-14 read-btn">Read More
                                        <i class="icon feather icon-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Feature Box -->
    <div class="content-inner py-0 overlay-white-middle">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="javascript:void(0);">
                            <img src="images/feature/1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.2s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="javascript:void(0);">
                            <img src="images/feature/2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="javascript:void(0);">
                            <img src="images/feature/3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.4s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="javascript:void(0);">
                            <img src="images/feature/4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="javascript:void(0);">
                            <img src="images/feature/5.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="javascript:void(0);">
                            <img src="images/feature/6.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Box End -->

    <!-- Icon Box Start -->
    <section class="content-inner py-0">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2 bg-light wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx">
                            <img src="images/svg/icon-bx/password-check.svg" alt="">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Filter & Discover</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">01</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx">
                            <img src="images/svg/icon-bx/cart.svg" alt="">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Add to cart</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">02</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2 bg-light wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx">
                            <img src="images/svg/icon-bx/discovery.svg" alt="">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Fast Shipping</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">03</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx">
                            <img src="images/svg/icon-bx/box-tick.svg" alt="">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Enjoy The Product</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Icon Box End -->




</div>