<?php
session_start();
include('config.php');

// Function to sanitize user input
function sanitize($con, $data) {
    return mysqli_real_escape_string($con, htmlspecialchars($data));
}

// Check if customer is logged in
if (!isset($_SESSION['customer_id'])) {
    // Redirect or handle unauthorized access
    exit("Unauthorized access");
}

$customer_id = $_SESSION['customer_id'];

if(isset($_POST['amt']) && isset($_POST['address'])){
   
    $amt = sanitize($con, $_POST['amt']);
    $address_id = sanitize($con, $_POST['address']);
    $payment_status = "pending";
    $added_on = date('Y-m-d H:i:s');


    $insert_payment_query = "INSERT INTO payment_details (customer_id, address_id, totalamount, payment_status, added_on) 
                             VALUES ('$customer_id', '$address_id', '$amt', '$payment_status', '$added_on')";
    if(mysqli_query($con, $insert_payment_query)) {
        $_SESSION['OID'] = mysqli_insert_id($con);
    } else {
        // Handle database error
        exit("Error: " . mysqli_error($con));
    }
}

if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    
    $payment_id = sanitize($con, $_POST['payment_id']);

   
    $insert_order_query = "INSERT INTO order_items (order_id, customer_id, payment_id, product_id, product_price, prod_quantity, created_at, updated_at)
                           SELECT id, '$customer_id', '$payment_id', product_id, 
                           (SELECT products.product_discount_price FROM products WHERE products.id = shopcarts.product_id), 
                           quantity, created_at, updated_at
                           FROM shopcarts
                           WHERE customer_id = '$customer_id'";

    if(mysqli_query($con, $insert_order_query)) {

    $delete_shopcarts_query = "DELETE FROM shopcarts WHERE customer_id = '$customer_id' and product_id in (SELECT product_id FROM order_items WHERE customer_id ='$customer_id')";
    if(!mysqli_query($con, $delete_shopcarts_query)) {
        exit("Error deleting data from shopcarts: " . mysqli_error($con));
    }
        
        $update_payment_query = "UPDATE payment_details 
                                 SET payment_status='complete', payment_id='$payment_id' 
                                 WHERE id='".$_SESSION['OID']."'";
        if(!mysqli_query($con, $update_payment_query)) {
            
            exit("Error updating payment status: " . mysqli_error($con));
        }
    } else {
      
        exit("Error inserting order items: " . mysqli_error($con));
    }
}
?>
