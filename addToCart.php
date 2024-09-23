<?php
session_start();


if(isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
} elseif(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
} else {
   
    echo json_encode(array('status' => 'error', 'message' => 'Product ID not provided'));
    exit; 
}


if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


$found = false;
foreach ($_SESSION['cart'] as $key => $item) {
    if ($item['pro_id'] == $product_id) {
        $_SESSION['cart'][$key]['qty'] += 1;
        $found = true;
        break;
    }
}


if (!$found) {
    $item = array(
        'pro_id' => $product_id,
        'qty' => 1
    );
    $_SESSION['cart'][] = $item;
}


echo json_encode(array('status' => 'success'));
?>

