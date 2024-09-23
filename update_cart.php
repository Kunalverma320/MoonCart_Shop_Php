<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the AJAX request
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Update the quantity of the product in the cart
    $sql = "UPDATE shopcarts SET quantity = $quantity WHERE id = $productId";
    if ($con->query($sql) === TRUE) {
        // If the update is successful, return success response
        echo json_encode(array("success" => true));
    } else {
        // If there's an error, return error response
        echo json_encode(array("success" => false));
    }
} else {
    // If it's not a POST request, return error response
    echo json_encode(array("success" => false, "message" => "Invalid request method"));
}
?>
