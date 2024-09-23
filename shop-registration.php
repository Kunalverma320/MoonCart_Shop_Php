<?php
$tittle="User Registration";
include("config.php");
require 'vendor/autoload.php';
require("smtp/PHPMailerAutoload.php");
if(isset($_POST['submit'])) {   
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $password = $_POST['password'];
    $activationcode = md5($email.time());
    $user_role = 1;
    $status = 0;

    $phone_check_query = "SELECT * FROM users WHERE phone='$phone' LIMIT 1";
    $email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $username_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";

    $phone_result = mysqli_query($con, $phone_check_query);
    $email_result = mysqli_query($con, $email_check_query);
    $username_result = mysqli_query($con, $username_check_query);

    if (mysqli_num_rows($email_result) > 0) {
     
        echo "<script>alert('Email already exists. Please use a different email.'); window.location.href = 'shop-registration.php';</script>";
    } elseif (mysqli_num_rows($username_result) > 0) {

        echo "<script>alert('Username already exists. Please choose a different username.'); window.location.href = 'shop-registration.php';</script>";
    }elseif (mysqli_num_rows($phone_result) > 0) {

        echo "<script>alert('Phone Number already exists'); window.location.href = 'shop-registration.php';</script>";
    } else {
  
        $sql = "INSERT INTO users (name, username, phone,email, password, user_role, status, activationcode) VALUES ('$name', '$username', '$phone','$email', '$password', '$user_role', '$status', '$activationcode')";
        
        if (mysqli_query($con, $sql)) {
			$ms="<html></body><div><div>Dear $name,</div></br></br>";
			$ms="<div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
			<div style='padding-top:10px;'><a href='http://localhost/ecom/email_verification.php?code=$activationcode'>Click Here</a></div>
			<div style='padding-top:4px;'>Powered by <a href='https://kunalvermademo.000webhostapp.com/'>https://kunalvermademo.000webhostapp.com/</a></div></div>
			</body></html>";
			$headers .= "MIME-Version: 1.0"."\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
			$headers .= 'From:KunalVerma | Ecom Web <kunalverma320@gmail.com>'."\r\n";
			$subject = 'Follow-Up Appointment Request';
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 587;
			$mail->IsHTML(true);
			$mail->Username = "smtktm098@gmail.com";
			$mail->Password = "vqexgkoydvcdcufg";
			$mail->AddAddress($email);
			$mail->AddAddress("kunalverma320@gmail.com");
			$mail->Subject = $subject;
			$mail->Body = $ms;
			if($mail->Send()) {
				echo "<script>alert('Data successfully submitted. Check your email to activate your account.'); window.location.href = 'shop-my-account.php';</script>";
			} else {
				echo "Data not submitted";
			}
           
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
}

?>


<?php include("includes/links.php"); ?>

<body>
    <div class="page-wraper">
        <?php include("includes/header.php"); ?>



        <div class="page-content">
            <section class="px-3">
                <div class="row align-center-center">
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
                            <img src="images/registration/pic1.png" alt="/">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content">
                        <div class="login-area">
                            <h2 class="text-secondary text-center">Registration Now</h2>
                            <p class="text-center m-b30">Welcome please registration to your account</p>
                            <form method="post">
                                <div class="m-b25">
                                    <label class="label-title">Name</label>
                                    <input name="name" required="" class="form-control" placeholder="Name" type="text">
                                </div>
                                <div class="m-b25">
                                    <label class="label-title">Username</label>
                                    <input name="username" required="" id="username" class="form-control"
                                        placeholder="Username" type="text">
                                    <span id="username-error" style="text-size=1px;" class="text-danger"></span>
                                </div>

                                <div class="m-b25">
                                    <label class="label-title">Phone Number</label>
                                    <input name="phone" required="" id="phone" class="form-control"
                                        placeholder="Phone Number" type="number">
                                    <span id="phone-error" class="text-danger"></span>
                                </div>

                                <div class="m-b25">
                                    <label class="label-title">Email Address</label>
                                    <input name="email" required="" id="email" class="form-control"
                                        placeholder="Email Address" type="email">
                                    <span id="email-error" class="text-danger"></span>
                                </div>
                                <div class="m-b40">
                                    <label class="label-title">Password</label>
                                    <input name="password" required="" class="form-control" placeholder="Password"
                                        type="password">
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit"
                                        class="btn btn-secondary btnhover text-uppercase me-2" value="Register">
                                    <a href="shop-my-account.php"
                                        class="btn btn-outline-secondary btnhover text-uppercase">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                $(document).ready(function() {
                    $('#username').blur(function() {
                        var username = $(this).val();
                        if (username !== '') {
                            $.ajax({
                                url: 'check_username.php', // Change this to your server-side script file
                                method: 'POST',
                                data: {
                                    username: username
                                },
                                success: function(response) {
                                    $('#username-error').html(response);
                                }
                            });
                        }
                    });
                    $('#phone').blur(function() {
                        var phone = $(this).val();
                        if (username !== '') {
                            $.ajax({
                                url: 'check_username.php', // Change this to your server-side script file
                                method: 'POST',
                                data: {
                                    phone: phone
                                },
                                success: function(response) {
                                    $('#phone-error').html(response);
                                }
                            });
                        }
                    });
                    $('#email').blur(function() {
                        var email = $(this).val();
                        if (email !== '') {
                            $.ajax({
                                url: 'check_username.php', // Change this to your server-side script file
                                method: 'POST',
                                data: {
                                    email: email
                                },
                                success: function(response) {
                                    $('#email-error').html(response);
                                }
                            });
                        }
                    });
                });
                </script>

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