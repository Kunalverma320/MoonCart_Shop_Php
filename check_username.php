<?php
include("config.php");
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) > 0) {
        echo '<span class="text-danger">Username already exists.</span>';
    } else {
        echo '<span class="text-success">Username is available.</span>';
    }
}
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    
    // Perform a query to check if the email already exists
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) > 0) {
        echo '<span class="text-danger">Email address already exists. .</span>';
    } else {
        echo '<span class="text-success">Email address is available.</span>';
    }
}
if(isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    
    // Perform a query to check if the email already exists
    $query = "SELECT * FROM users WHERE phone='$phone'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) > 0) {
        echo '<span class="text-danger">Phone Number already exists.</span>';
    } else {
        echo '<span class="text-success">Phone Number is available.</span>';
    }
}
?>
