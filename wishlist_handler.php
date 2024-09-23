<?php
include("config.php");
session_start();

if(isset($_SESSION['customer_id'])) {
    $customer_id = $_SESSION['customer_id'];
    if(isset($_POST['action']) && isset($_POST['productId'])) {
        $action = $_POST['action'];
        $productId = $_POST['productId'];
        $status = "Active";

        if($action === 'add') {
            // Check if the product already exists in the wishlist
            $check_sql = "SELECT * FROM wishlist WHERE product_id = $productId AND customer_id = $customer_id";
            $result = mysqli_query($con, $check_sql);
            if(mysqli_num_rows($result) > 0) {
                echo "Product already exists in the wishlist.";
                exit;
            } else {
                $sql = "INSERT INTO wishlist (product_id, customer_id, status) VALUES ($productId, $customer_id, '$status')";
            }
        } elseif($action === 'remove') {
            $sql = "DELETE FROM wishlist WHERE product_id = $productId AND customer_id = $customer_id";
        } else {
            echo "Invalid action";
            exit;
        }

        mysqli_query($con, $sql);
        // You can echo a success message here if needed
    } else {
        echo "Invalid request"; // Handle invalid request
    }
} else {
    echo "Error: User not logged in.";
    // You might want to handle this case more gracefully, such as redirecting the user to the login page.
}
?>
