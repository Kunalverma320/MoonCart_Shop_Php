<?php
session_start();

if(isset($_POST['productId'])) {
    $productId = $_POST['productId'];


    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $key => $cartItem) {
            if($cartItem['pro_id'] == $productId) {
            
                unset($_SESSION['cart'][$key]);
                break; 
            }
        }
    }

 
    echo json_encode(['success' => true]);
} else {
    
    echo json_encode(['success' => false, 'message' => 'Product ID not provided']);
}
?>