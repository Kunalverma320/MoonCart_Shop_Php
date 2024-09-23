<?php
include("config.php");
// Check if productId and quantity are set in the POST request
if(isset($_POST['productId']) && isset($_POST['quantity'])) {
    // Sanitize input
    $productId = $con->real_escape_string($_POST['productId']);
    $quantity = $con->real_escape_string($_POST['quantity']);
    

    // Update the quantity in the database
    $sql = "UPDATE shopcarts SET quantity = '$quantity' WHERE id = '$productId'";
    if ($con->query($sql) === TRUE) {
        echo "Quantity updated successfully";
    } else {
        echo "Error updating quantity: " . $con->error;
    }
} else {
    echo "ProductId or quantity is not set.";
}

// Close database connection
$con->close();
?>
