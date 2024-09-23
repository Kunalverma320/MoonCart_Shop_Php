<?php
$tittle = "Login Page";
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit'])) {   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ret = mysqli_query($con, "SELECT * FROM users WHERE username='$username' and password='$password'");
    $num = mysqli_fetch_array($ret);
    if($_POST['captcha_code']==$_SESSION['captcha_code']){
    if($num > 0) {
        if($num['status'] == 1) {
            if($num['user_role'] == 1) {
                $extra = "index.php";
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['customer_id'] = $num['id'];
                $_SESSION['user_role'] = $num['user_role'];
                $_SESSION['customer_name']=$num['name'];
                echo "<script>window.location.href='".$extra."'</script>";
                exit();
            } else if($num['user_role'] == 2) {
                $extras = "admin/index.php";
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['customer_id'] = $num['id'];
                $_SESSION['user_role'] = $num['user_role'];
                $_SESSION['customer_name']=$num['name'];
                echo "<script>window.location.href='".$extras."'</script>";
                exit();
            }
        } else {
            $_SESSION['error'] = 'Account not activated.';
        }
    } 
    else {
        $_SESSION['error'] = 'Password Incorrect';
    }
}
else{
    $_SESSION['error'] = 'Incorrect Captcha Code';
    
}
}   
?>


<?php include("includes/links.php"); ?>

<body>
    <div class="page-wraper">
        <?php include("includes/header.php"); ?>



        <div class="page-content">
            <section class="px-3">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 start-side-content">
                        <div class="dz-bnr-inr-entry">
                            <h1>My Account</h1>
                            <nav aria-label="breadcrumb text-align-start" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
                                    <li class="breadcrumb-item">My Account</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="registration-media">
                            <img src="images/registration/pic2.png" alt="/">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content">
                        <div class="login-area">
                            <center><?php
                            $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
                            if (!empty($msg)) {
                                echo "<p style='color:green;''>$msg</p>";
                            }
                            ?></center>
                        
                            <h2 class="text-secondary text-center">Welcome Back</h2>
                            <p class="text-center m-b25">welcome please login to your account</p>

                            <!-- Display Error Messages -->
                            <?php if(isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error']; ?>
                            </div>
                            <?php unset($_SESSION['error']); } ?>

                            <?php  if (isset($_GET['id']) && $_GET['id'] == 'success') {
                                echo '<div class="alert alert-success" >Registration successful!</div>';
                            }
                            ?>
                           

                            <form method="post">
                                <div class="m-b30">
                                    <label class="label-title">Username</label>
                                    <input name="username" required="" class="form-control"
                                        placeholder="Enter Email/Mobile number" type="text">
                                </div>
                                <div class="m-b15">
                                    <label class="label-title">Password</label>
                                    <input name="password" required="" class="form-control" placeholder="Password"
                                        type="password">
                                </div>
                                <div class="form-group">
                                <i class="input-icon bi bi-camera"></i>
                                    <img src="captcha.php" style="height:50px;" class="input-icon-2 custom-icon-size" />
                                    <input type="text" name="captcha_code" required="" class="form-control"
                                        placeholder="Enter Captcha" type="password">
                                    <br>
                                    
                                </div>
                                <div class="form-row d-flex justify-content-between m-b30">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                            <label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <a class="text-primary" href="javascript:void(0);">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <!-- <a href="shop-my-account.php"
                                        class="btn btn-secondary btnhover text-uppercase me-2" >Sign In</a> -->
                                    <input type="submit" name="submit"
                                        class="btn btn-secondary btnhover text-uppercase me-2" value="Submit">
                                    <a href="shop-registration.php"
                                        class="btn btn-outline-secondary btnhover text-uppercase">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


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