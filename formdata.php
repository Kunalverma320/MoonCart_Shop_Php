<?php
include("config.php");
session_start();

if(isset($_SESSION['customer_id'])) {
    $customer_id = $_SESSION['customer_id'];

    if(isset($_POST['product_id'])) {
        $createdtime = date('Y-m-d H:i:s');
        $product_ids = explode(',', $_POST['product_id']);
        
        foreach($product_ids as $product_id) {
            // Validate product_id (if needed)
            
            // Check if the product is already in the cart
            $check_query = mysqli_query($con, "SELECT * FROM shopcarts WHERE customer_id='$customer_id' AND product_id='$product_id'");
            if(mysqli_num_rows($check_query) == 0) {
                // Product is not in the cart, so insert it
                $savecart = mysqli_query($con, "INSERT INTO shopcarts (customer_id, product_id, created_at) VALUES ('$customer_id', '$product_id', '$createdtime')");
                if(!$savecart) {
                    echo json_encode(array('status' => 'error', 'message' => 'Failed to insert product into cart.'));
                    exit;
                }
            }
        }

        echo json_encode(array('status' => 'success'));
    }
    else if (isset($_POST["shopcartId"])) {
        $shopcartId = $_POST["shopcartId"];

        // Prepare and execute SQL statement to delete the item from the shopcarts table
        $sql = "DELETE FROM shopcarts WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $shopcartId);

        if ($stmt->execute()) {
            echo "Item deleted successfully.";
        } else {
            http_response_code(500);
            echo "Error: Unable to delete item.";
        }

        $stmt->close();
    }
    else if(isset($_POST['dzaddsave'])) {
        $AdName = $_POST['AdName'];
        $dzPhone = $_POST['dzPhone'];
        $dzPincode = $_POST['dzPincode'];
        $dzLocality = $_POST['dzLocality'];
        $dzAddress = $_POST['dzAddress'];   
        $dzstate = $_POST['dzstate'];
        $dzdistrict = $_POST['dzdistrict'];
        $dzLandmark = $_POST['dzLandmark'];
        $dzAltphone = $_POST['dzAltphone'];
        $dzhomeorwork = $_POST['dzhomeorwork'];

        $sql = "INSERT INTO customers_address (customer_id, AdName, dzPhone, dzPincode, dzLocality, dzAddress, dzstate,dzdistrict, dzLandmark, dzAltphone, dzhomeorwork) 
                VALUES ('$customer_id', '$AdName', '$dzPhone', '$dzPincode', '$dzLocality', '$dzAddress', '$dzstate','$dzdistrict', '$dzLandmark', '$dzAltphone', '$dzhomeorwork')";

        if ($con->query($sql) === TRUE) {
            echo "Data saved successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    else if (isset($_POST['addressId']) && is_numeric($_POST['addressId'])) {
        // Sanitize the input to prevent SQL injection
        $addressId = $_POST['addressId'];
        $sql = "DELETE FROM `customers_address` WHERE id = ?";

        if ($stmt = $con->prepare($sql)) {
            $stmt->bind_param("i", $addressId);

            
            if ($stmt->execute()) {
                echo "Address deleted successfully.";
            } else {
                echo "Error deleting address: " . $con->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $con->error;
        }
    }else if(isset($_POST['address_id']) && !empty($_POST['address_id'])) {
        // Retrieve the address ID from the POST data
        $address_id = $_POST['address_id'];
        
        // You can perform any further processing here, such as saving the address ID to a session variable, updating a database, etc.
        
        // For demonstration purposes, let's just echo the address ID back as a response
        echo $address_id;
    } else {
        echo "Invalid address ID.";
    }
}else if (isset($_POST['msid'])) {
    $id = $_POST['msid'];
    $id = mysqli_real_escape_string($con, $id);
    
    $sql = "SELECT category_name FROM categories WHERE id = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['category_name'];
    } else {
        echo "Category not found";
    }
}

else {
    echo "Error: User not logged in.";
    // You might want to handle this case more gracefully, such as redirecting the user to the login page.
}
?>