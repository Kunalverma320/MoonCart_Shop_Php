<?php
$tittle="MoonCart Shop & eCommerce HTML Template";
error_reporting(0);
include("config.php");
session_start();

if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == '1') {
	
	$custommer_id=$_SESSION['customer_id']; 

    $mydata=mysqli_query($con,"select * from users where id='$custommer_id'");

    $getdata=mysqli_fetch_assoc($mydata);


?>



<?php include("includes/links.php"); ?>

<body>
<style>
        .user_profile_top_bg {
            background: rgba(91, 147, 255, 0.3);
            border-radius: 8px;
            height: 170px;
        }

        .user_profile_top_des {
            display: flex;
            align-items: end;
            padding-left: 27px;
            margin-top: -87px;
        }

        .product_card_bottom_wrapper {
            padding-top: 40px;
        }

        img,
        svg {
            vertical-align: middle;
        }

        p {
            font-family: var(--font-family-base);
        }

        .user_profile_wrapper_top {
            margin-bottom: 30px;
            padding: 30px 30px;
        }

        .card {
            border-radius: 15px;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.03);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.03);
        }

        .user_profile_text_top {
            padding-left: 30px;
        }

        element.style {}

        .card {
            border-radius: 15px;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.03);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.03);
        }

        .bg-white {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #ffffff;
            background-clip: border-box;
            border: 1px solid #f3f3f3;
            border-radius: 0.25rem;
        }

        .product_card_bottom_wrapper {
            /* padding-top: 40px; */
        }

        .card_bottom_items {
            background: rgba(91, 147, 255, 0.05);
            border-radius: 6px;
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 20px;
        }

        .card_bottom_item_text {
            padding-left: 15px;
        }

        .text-dark {
            color: #56606e !important;
        }

        .contact_info_sidebar_item h3 {
            font-size: 16px;
            font-weight: 600;
            padding-top: 15px;
        }

        .pt-4,
        .py-4 {
            padding-top: 30px !important;
        }

        hr:not([size]) {
            height: 1px;
        }

        .user_profile_top_heading {
            border-bottom: 1px solid #d4d4d4;
            padding-bottom: 9px;
            margin-bottom: 30px;
        }

        .card-wrapper .card-container .card-top .card-image {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            width: 100%;
        }

        .card-wrapper .card-container .card-bottom h3 a {
            color: #000;
        }

        .card-wrapper .card-container .card-bottom p {
            margin: 0;
            padding: 0;
            font-weight: 500;
            font-size: 14px;
            color: #868686;
        }

        .card-wrapper {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
            background: #FFFFFF;
            border: 1px solid #DDDDDD;
            border-radius: 4px;
            -webkit-box-shadow: 0;
            box-shadow: 0;
        }

        .breadcrumb-wrapper .breadcrumbs {
            margin-top: 5px;
        }

        .breadcrumb-wrapper.breadcrumb-contacts {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .breadcrumb-wrapper h1,
        .breadcrumb-wrapper .h1 {
            color: #56606e;
            font-size: 25px;
            font-weight: 500;
        }

        .breadcrumb-wrapper .breadcrumbs span i {
            margin: 0 5px;
            font-size: 18px;
        }

        .card-wrapper .card-container .card-bottom {
            padding: 12px 10px 10px 13px;
            width: 100%;
            background: #ffffff;
        }

        .profile-content .profile-left-spacing {
            padding: 24px 0 24px 24px;
        }
</style>
    <div class="page-wraper">
     

        <?php include("includes/header.php"); ?>


        <div class="page-content">
            <section class="content-inner-1 bg-img-fix">
                <div class="container">

                    <div class="ec-content-wrapper">
                        <div class="content">
                            <div class="breadcrumb-wrapper breadcrumb-contacts">
                                <div>
                                    <h1>My profile</h1>
                                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                        <span><i class="mdi mdi-chevron-right"></i></span>Profile
                                    </p>
                                </div>
                                <div>
                                    <a href="user-list.html" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                            <div class="user_profile_wrapper_top card">
                                <div class="user_profile_top_bg"></div>
                                <div class="user_profile_top_des">
                                    <div class="user_profile_img">
                                        <img src="images/profile2.jpg" style="width: 188px;height: 177px;" alt="">
                                    </div>
                                    <div class="user_profile_text_top">
                                        <h3><?php echo $getdata['name']; ?></h3>
                                        <p><?php echo $getdata['address']; ?></p>
                                    </div>
                                </div>

                            </div>
                            <div class="card bg-white profile-content">
                                <div class="row">
                                    <div class="col-lg-4 col-xl-3">
                                        <div class="profile-content-left profile-left-spacing">
                                            <div class="product_card_bottom_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card_bottom_items">
                                                            <div class="card_bottom_item_icon">
                                                                <img src="assets/img/icons/shoping.png" alt="">
                                                            </div>
                                                            <div class="card_bottom_item_text">
                                                                <p>Purchased</p>
                                                                <h3>5782</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card_bottom_items">
                                                            <div class="card_bottom_item_icon">
                                                                <img src="assets/img/icons/cart.png" alt="">
                                                            </div>
                                                            <div class="card_bottom_item_text">
                                                                <p>In order</p>
                                                                <h3>1245</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card_bottom_items">
                                                            <div class="card_bottom_item_icon">
                                                                <img src="assets/img/icons/doller.png" alt="">
                                                            </div>
                                                            <div class="card_bottom_item_text">
                                                                <p>Amount</p>
                                                                <h3>$82,950</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card_bottom_items">
                                                            <div class="card_bottom_item_icon">
                                                                <img src="assets/img/icons/chart.png" alt="">
                                                            </div>
                                                            <div class="card_bottom_item_text">
                                                                <p>In stock</p>
                                                                <h3>7325</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="w-100">

                                            <div class="contact-info pt-4">
                                                <h5 class="text-dark">Contact Information</h5>
                                                <div class="contact_info_sidebar_item">
                                                    <h3>Address</h3>
                                                    <p><?php echo $getdata['address']; ?></p>
                                                </div>

                                                <div class="contact_info_sidebar_item">
                                                    <h3>Email</h3>
                                                    <p><?php echo $getdata['email']; ?></p>
                                                </div>
                                                <div class="contact_info_sidebar_item">
                                                    <h3>Phone number</h3>
                                                    <p><?php echo $getdata['phone']; ?></p>
                                                </div>

                                                <div class="contact_info_sidebar_item">
                                                    <h3>Social Profile</h3>

                                                    <ul>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                                                <i class="mdi mdi-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-skype rounded-circle">
                                                                <i class="mdi mdi-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-xl-9">
                                        <div class="profile-content-right profile-right-spacing py-5">
                                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab"
                                                role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="purchased-tab"
                                                        data-bs-toggle="tab" data-bs-target="#purchased" type="button"
                                                        role="tab" aria-controls="purchased"
                                                        aria-selected="true">Purchased</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                                        data-bs-target="#r-orders" type="button" role="tab"
                                                        aria-controls="orders" aria-selected="false">Recent
                                                        orders</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                                        data-bs-target="#settings" type="button" role="tab"
                                                        aria-controls="settings" aria-selected="false">Settings</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                                <div class="tab-pane fade show active" id="purchased" role="tabpanel"
                                                    aria-labelledby="purchased-tab">
                                                    <div class="tab-widget mt-5">
                                                        <div class="user_profile_top_heading">
                                                            <h3>All purchased products</h3>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="images/shop/product/1.png" alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual
                                                                                    shirt for men</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="images/shop/product/2.png" alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual
                                                                                    shirt for boys</a>
                                                                            </h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="images/shop/product/1.png" alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual
                                                                                    shirt for boys</a>
                                                                            </h3>
                                                                            <p>$155.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="images/shop/product/3.png" alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Pink inner
                                                                                    for women</a></h3>
                                                                            <p>$145.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="r-orders" role="tabpanel"
                                                    aria-labelledby="orders-tab">
                                                    <div class="tab-widget mt-5">
                                                        <div class="user_profile_top_heading">
                                                            <h3>Recent orders</h3>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card card-default">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <table id="responsive-data-table"
                                                                                class="table" style="width:100%">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>ID</th>
                                                                                        <th>Product name</th>
                                                                                        <th>Unit</th>
                                                                                        <th>Price</th>
                                                                                        <th>Order date</th>
                                                                                        <th>Status</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="settings" role="tabpanel"
                                                    aria-labelledby="settings-tab">
                                                    <div class="tab-widget mt-5">
                                                        <div class="user_profile_top_heading">
                                                            <h3>Customer settings</h3>
                                                        </div>
                                                        <div class="tab-pane-content mt-5">
                                                            <form>

                                                                <div class="row mb-2">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="firstName">First name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="firstName" value="First name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="lastName">Last name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="lastName" value="Last name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="userName">User name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="userName" value="User name">
                                                                            <span class="d-block mt-1">Accusamus nobis
                                                                                at omnis
                                                                                consequuntur
                                                                                culpa tempore saepe animi.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" class="form-control"
                                                                                id="email"
                                                                                value="andshop.example@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="number">Mobile</label>
                                                                            <input type="number" class="form-control"
                                                                                id="number" value="01XXXX...">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="oldPassword">Old
                                                                                password</label>
                                                                            <input type="password" class="form-control"
                                                                                id="oldPassword">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="newPassword">New
                                                                                password</label>
                                                                            <input type="password" class="form-control"
                                                                                id="newPassword">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="conPassword">Confirm
                                                                                password</label>
                                                                            <input type="password" class="form-control"
                                                                                id="conPassword">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form_customer_profilr_img">
                                                                            <h6 class="mb-3">Customer profile image:
                                                                            </h6>
                                                                            <img src="assets/img/user/profile.png"
                                                                                alt="img">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex justify-content-end mt-5">
                                                                    <button type="submit"
                                                                        class="btn btn-primary mb-2 btn-pill">Update
                                                                        Profile</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- End Content -->
                    </div>

                </div>
            </section>

        </div>



        <?php include("includes/footer.php"); ?>

        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
        <!-- Quick Modal Start -->
        <div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
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
                                                        <a class="mfp-link lg-item" href="images/products/baby-seat.png"
                                                            data-src="images/products/baby-seat.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item"
                                                            href="images/products/baby-seat2.png"
                                                            data-src="images/products/baby-seat2.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat2.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item"
                                                            href="images/products/baby-seat3.png"
                                                            data-src="images/products/baby-seat3.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat3.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item" href="images/products/baby-seat.png"
                                                            data-src="images/products/baby-seat.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat.png" alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat1.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat2.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat3.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat1.png" alt="image">
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
                                                <h4 class="title mb-1"><a href="shop-list.html">Baby Strollers</a></h4>
                                                <div class="review-num">
                                                    <ul class="dz-rating me-2">
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#FF8A00"></path>
                                                            </svg>
                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#FF8A00"></path>
                                                            </svg>
                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#FF8A00"></path>
                                                            </svg>
                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.2"
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#5E626F"></path>
                                                            </svg>

                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
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
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has.
                                        </p>
                                        <div class="meta-content m-b20 d-flex align-items-end">
                                            <div class="me-3">
                                                <span class="form-label">Price</span>
                                                <span class="price-num">$125.75 <del>$132.17</del></span>
                                            </div>
                                            <div class="btn-quantity light me-0">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" value="1" name="demo_vertical2">
                                            </div>
                                        </div>
                                        <div class="btn-group cart-btn">
                                            <a href="shop-cart.html" class="btn btn-md btn-secondary text-uppercase">Add
                                                To Cart</a>
                                            <a href="shop-wishlist.html" class="btn btn-md btn-light btn-icon">
                                                <svg width="19" height="17" viewBox="0 0 19 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z"
                                                        fill="black"></path>
                                                </svg>
                                                Add To Wishlist
                                            </a>
                                        </div>
                                        <div class="dz-info mb-0">
                                            <ul>
                                                <li>
                                                    <strong>SKU:</strong>
                                                    <span>PRT584E63A</span>
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    <span>Bottles,</span>
                                                    <span>Accessories,</span>
                                                    <span>Mats,</span>
                                                    <span>Bottles,</span>
                                                    <span>Trackers</span>
                                                </li>
                                                <li>
                                                    <strong>Tags:</strong>
                                                    <span>Trackers,</span>
                                                    <span>Bags,</span>
                                                    <span>Cup,</span>
                                                    <span>Toothbrushes</span>
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
    </div>
    <?php include("includes/script.php"); ?>
</body>

</html>


<?php
} else {
    
    header("Location: shop-my-account.php?msg=Please login first");
    exit;
}

?>