<?php
$tittle="MoonCart Shop & eCommerce HTML Template";
error_reporting(0);
include("config.php");
session_start();

if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == '1') {
	
	$custommer_id=$_SESSION['customer_id']; 


?>

<?php include("includes/links.php"); ?>

<body>
    <div class="page-wraper">
        <!-- <div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div> -->

        <?php include("includes/header.php"); ?>


        <div class="page-content">
            <!--banner-->
            <div class="dz-bnr-inr" style="background-image:url(images/background/bg-shape.jpg);">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Wishlist</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
                                <li class="breadcrumb-item">Wishlist</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- inner page banner End-->
            <div class="content-inner-1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="table-responsive">
                                <table class="table check-tbl style-1">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th></th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
									$wishlist=mysqli_query($con,"SELECT * FROM wishlist JOIN products ON products.id=wishlist.product_id where status='Active' and customer_id='$custommer_id'");
									$total_row = mysqli_num_rows($wishlist);
									if($total_row>0)
									{
									while($row=mysqli_fetch_assoc($wishlist))
									{								
									
									?>
                                        <tr>

                                            <td class="product-item-close"><a href="javascript:void(0);"><i
                                                        class="ti-close"></i></a></td>
                                            <td class="product-item-img"><img src="images/shop/shop-cart/pic1.jpg"
                                                    alt="/"></td>
                                            <td class="product-item-name"><?php echo $row['product_name']; ?> </td>
                                            <td class="product-item-price"><span>Rs.
                                                    <?php echo $row['product_price']; ?></span><strong>Rs.<?php echo $row['product_discount_price']; ?></strong>
                                            </td>
                                            <td class="product-item-stock text-primary">
                                                <?php echo $row['product_status']; ?></td>
                                            <td class="product-item-totle"><a href="shop-cart.html"
                                                    class="btn btn-gray btnhover text-nowrap">Add To Cart</a></td>
                                        </tr>
                                        <?php 
									}
								}else{
										echo "<h1 style='
										text-align: center;margin-bottom: 68px;'> No wishlist Found </h1>";
									}
									
									
									?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Icon Box Start -->
            <section class="content-inner py-0">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2 bg-light">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/password-check.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Filter & Discover</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">01</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/cart.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Add to cart</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">02</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2 bg-light">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/discovery.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Fast Shipping</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">03</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/box-tick.svg" alt="/">
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



        <?php include("includes/footer.php"); ?>

        <button class="scroltop" type="button">
            <i class="fas fa-arrow-up"></i>
        </button>
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