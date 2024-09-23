<?php
$tittle="MoonCart Shop & eCommerce HTML Template";
error_reporting(0);
include("config.php");
session_start();

$custommer_id=$_SESSION['customer_id'];

if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == '1') {
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
                        <h1>Cart</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                                <li class="breadcrumb-item">Cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


            <!-- contact area -->
            <section class="content-inner shop-account">
                <!-- Product -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="table-responsive">
                                <table class="table check-tbl">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Product</th>
                                            <th></th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$sql = "SELECT shopcarts.id, products.product_name, shopcarts.quantity, products.product_quantity, products.product_master_image, product_discount_price 
        FROM shopcarts 
        JOIN `products` ON shopcarts.product_id = `products`.id
        WHERE shopcarts.customer_id = '$custommer_id'";
$result = $con->query($sql);

$totalPrice = 0; // Initialize total price variable
$totalItemPrice = 0; // Initialize total item price variable

if ($result->num_rows > 0) {
    $cnt = 1;
    while ($row = $result->fetch_assoc()) {
        // Calculate total price for current item
        $totalItemPrice = $row['product_discount_price'] * $row['quantity'];
        ?>
                                        <tr>
                                            <td><?php echo $cnt ?></td>
                                            <td class="product-item-img"><img
                                                    src="images/shop/product/<?php echo $row['product_master_image']; ?>"
                                                    alt="/"></td>
                                            <td class="product-item-name"><?php echo $row['product_name']; ?></td>
                                            <td class="product-item-price">
                                                Rs.<?php echo $row['product_discount_price']; ?>
                                            </td>
                                            <td class="product-item-quantity">
                                                <div class="quantity btn-quantity number style-1 me-3">
                                                    <span class="minus"><button
                                                            class="btn btn-default bootstrap-touchspin-down" style="
                            background: black;
                            padding: 8px;
                        " type="button"><i class="fa-solid fa-minus" style="color:white;"></i></button></span>
                                                    <input type="text"
                                                        value="<?php echo isset($row['quantity']) ? $row['quantity'] : 1; ?>"
                                                        min="1" id="quantity_val"
                                                        max="<?php echo $row['product_quantity']; ?>"
                                                        onchange="updateTotal(this, <?php echo $row['product_discount_price']; ?>, <?php echo $row['id']; ?>)" />
                                                    <span class="plus"><button
                                                            class="btn btn-default bootstrap-touchspin-down" style="
                            background: black;
                            padding: 8px;
                        " type="button"><i class="fa-solid fa-plus" style="color:white;"></i></button></span>
                                                </div>
                                            </td>
                                            <td class="product-item-total">Rs.<span
                                                    class="total-price"><?php echo $totalItemPrice; ?></span>
                                            </td>
                                            <td class="product-item-close"><a href="javascript:void(0);"
                                                    onclick="deleteCartItem(<?php echo $row['id']; ?>)"><i
                                                        class="ti-close"></i></a></td>
                                        </tr>
                                        <?php
        $cnt = $cnt + 1;
        $totalPrice += $totalItemPrice; // Add current item's total price to overall total
    }
} else {
    echo "0 results";
}
?>


                                        <script>
                                        function updateQuantity(productId, newQuantity) {
                                            $.ajax({
                                                url: 'update_quantity.php',
                                                method: 'POST',
                                                data: {
                                                    productId: productId,
                                                    quantity: newQuantity
                                                },
                                                success: function(response) {
                                                    location
                                                                .reload();
                                                    console.log(response);
                                                },
                                                error: function(xhr, status, error) {
                                                    console.error(xhr.responseText);
                                                }
                                            });
                                        }
                                        </script>

                                        <script>
                                        function updateTotal(input, price, productId) {
                                            var quantity = parseInt(input.value);
                                            var total = quantity * price;
                                            var parentRow = input.parentNode.parentNode.parentNode;
                                            var totalPriceElement = parentRow.querySelector('.total-price');
                                            totalPriceElement.textContent = total;
                                            updateQuantity(productId, quantity);
                                        }
                                        </script>
                                        <script>
                                        $(document).ready(function() {
                                            $('.minus').click(function() {
                                                var $input = $(this).parent().find('input');
                                                var count = parseInt($input.val()) - 1;
                                                count = count < 1 ? 1 : count;
                                                $input.val(count);
                                                $input.change();
                                                return false;
                                            });

                                            $('.plus').click(function() {
                                                var $input = $(this).parent().find('input');
                                                var maxValue = parseInt($input.attr(
                                                    'max'
                                                )); // Get the maximum value from input attribute
                                                var count = parseInt($input.val()) + 1;
                                                count = count > maxValue ? maxValue :
                                                    count; // Check if count exceeds max value
                                                $input.val(count);
                                                $input.change();
                                                return false;
                                            });
                                        });
                                        </script>
                                        <script>
                                        function deleteCartItem(shopcartId) {
                                            if (confirm("Are you sure you want to delete this item?")) {

                                                var xhr = new XMLHttpRequest();
                                                xhr.open("POST", "formdata.php", true);
                                                xhr.setRequestHeader("Content-Type",
                                                    "application/x-www-form-urlencoded");
                                                xhr.onreadystatechange = function() {
                                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                                        if (xhr.status === 200) {

                                                            location
                                                                .reload();
                                                        } else {
                                                            alert("Error: Unable to delete item.");
                                                        }
                                                    }
                                                };
                                                xhr.send("shopcartId=" + shopcartId);
                                            }
                                        }
                                        </script>



                                    </tbody>
                                </table>
                            </div>
                            <div class="row shop-form m-t30">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-0">
                                            <input name="dzEmail" required="required" type="text" class="form-control"
                                                placeholder="Coupon Code">
                                            <div class="input-group-addon">
                                                <button name="submit" value="Submit" type="submit" class="btn coupon">
                                                    Apply Coupon
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 text-end">
                                    <a href="shop-cart.html" class="btn btn-grey">UPDATE CART</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h4 class="title mb15">Cart Total</h4>
                            <div class="cart-detail">
                                <a href="javascript:void(0);" class="btn btn-outline-primary w-100 m-b20">Bank Offer 5%
                                    Cashback</a>
                                <div class="icon-bx-wraper style-4 m-b15">
                                    <div class="icon-bx">
                                        <i class="flaticon flaticon-ship"></i>
                                    </div>
                                    <div class="icon-content">
                                        <span class="text-primary font-14">FREE</span>
                                        <h6 class="dz-title">Enjoy The Product</h6>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper style-4 m-b30">
                                    <div class="icon-bx">
                                        <img src="images/shop/shop-cart/icon-box/pic2.png" alt="/">
                                    </div>
                                    <div class="icon-content">
                                        <h6 class="dz-title">Enjoy The Product</h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                                <div class="save-text">
                                    <i class="icon feather icon-check-circle"></i>
                                    <span class="m-l10">You will save ₹504 on this order</span>
                                </div>
                                <table>
                                    <tbody>
                                        <tr class="total">
                                            <td>
                                                <h6 class="mb-0">Total</h6>
                                            </td>
                                            <td class="price">
                                                <p>Rs.<span id="overall-total-price"><?php echo $totalPrice; ?></span>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="shop-checkout.php" class="btn btn-secondary w-100">PLACE ORDER</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product END -->
            </section>
            <!-- contact area End-->

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