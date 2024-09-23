<?php
include("config.php");

if(isset($_POST["action"]))
{
    $query = "SELECT * FROM products WHERE product_status = 'In Stock'";



    // if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	// {
	// 	$query .= "
	// 	 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
	// 	";
	// }
    
    if(isset($_POST["search_query"]))
    {
        $search_query = $_POST["search_query"];
        $query .= " AND `product_name` LIKE '%$search_query%'";
    }

    if(isset($_POST["category_main"]))
    {
        $cat_filter = implode("','", $_POST["category_main"]);
        $query .= " AND category_id IN('".$cat_filter."')";
    }

    if(isset($_POST["price_assending"]))
    {
        $assen_filter = implode("','", $_POST["price_assending"]);
        $query .= " ORDER BY product_discount_price ".$assen_filter;
    }

    if(isset($_POST["price_desending"]))
    {
        $desc_filter = implode("','", $_POST["price_desending"]);
        $query .= " ORDER BY product_discount_price ".$desc_filter;
    }

    if(isset($_POST["desc_alpha"]))
    {
        $ds_filter = implode("','", $_POST["desc_alpha"]);
        $query .= " ORDER BY product_name ".$ds_filter;
    }

    if(isset($_POST["asc_alpha"]))
    {
        $as_filter = implode("','", $_POST["asc_alpha"]);
        $query .= " ORDER BY product_name ".$as_filter;
    }

    if(isset($_POST["new_arrival"]))
    {
        $new_arr = implode("','", $_POST["new_arrival"]);
        $query .= " ORDER BY created_at ".$new_arr;
    }

    $result = mysqli_query($con, $query);
    $total_row = mysqli_num_rows($result);

    $output = '';
    if($total_row > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $output .= '
                <div class="col-md-12 col-sm-12 col-xxxl-6">
                    <div class="dz-shop-card style-2">
                        <div class="dz-media">
                            <img src="images/shop/product/'.$row['product_master_image'].'" alt="image" style="max-width: 406px; max-height: 279px;">
                            <div class="product-tag">
                                <span class="badge badge-secondary">Sale</span>
                            </div>
                        </div>
                        <div class="dz-content">
                            <div class="dz-header">
                                <div>
                                    <h4 class="title mb-0"><a href="shop-list.html">'.$row['product_name'].'</a></h4>
                                    <ul class="dz-tags">
                                        <li><a href="shop-filters-top-bar.html">Accessories,</a></li>
                                        <li><a href="shop-filters-top-bar.html">Clocks</a></li>
                                    </ul>
                                </div>
                                <div class="review-num">
                                    <ul class="dz-rating">
                                        <li><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#24262B" /></svg></li>
                                        <li><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#24262B" /></svg></li>
                                        <li><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#24262B" /></svg></li>
                                        <li><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F" /></svg></li>
                                        <li><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F" /></svg></li>
                                    </ul>
                                    <span><a href="javascript:void(0);"> 370 Review</a></span>
                                </div>
                            </div>
                            <div class="dz-body">
                                <div class="dz-rating-box">
                                    <div>
                                        <p class="dz-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has.</p>
                                    </div>
                                </div>
                                <div class="rate">
                                    <div class="d-flex align-items-center mb-xl-3 mb-2">
                                        <div class="meta-content">
                                            <span class="price-name">Price</span>
                                            <span class="price-num">Rs. '.$row['product_discount_price'].'</span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href=""# class="btn btn-secondary btn-md btn-icon addToCartBtn" data-product-id="'.$row['id'].'">
                                            <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                            <span class="d-md-block d-none">Add to cart</span>
                                        </a>
                                        <div class="bookmark-btn style-1">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault'. $row['id'].'" id="wishlist_check" value="'. $row['id'].'" onchange="toggleWishlist('. $row['id'].')">
                                            <label class="form-check-label" for="flexCheckDefault'.$row['id'].'">
                                                <svg width="23" height="23" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.64094 9.89964C1.74678 7.10798 2.79178 3.91714 5.72261 2.97298C7.26428 2.47548 8.96594 2.76881 10.2476 3.73298C11.4601 2.79548 13.2243 2.47881 14.7643 2.97298C17.6951 3.91714 18.7468 7.10798 17.8534 9.89964C16.4618 14.3246 10.2476 17.733 10.2476 17.733C10.2476 17.733 4.07928 14.3763 2.64094 9.89964Z" stroke="#5E626F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M13.5811 5.81787C14.4727 6.1062 15.1027 6.90204 15.1786 7.8362" stroke="#5E626F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                            </label>
                                           
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <span style="color:red;" id="wishlist_message_'. $row['id'].'"></span>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }
    else
    {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
<script>
$(document).ready(function() {
    $('.addToCartBtn').click(function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        $.ajax({
            url: 'addToCart.php',
            type: 'POST',
            dataType: 'json',
            data: {
                product_id: productId
            },
            success: function(response) {
                if (response.status === 'success') {
                    window.location.href = 'shop-with-category.php?show=show';
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error: ' + error);
            }
        });
    });

});

function toggleWishlist(productId) {
    var isChecked = $("#flexCheckDefault" + productId).is(":checked");
    console.log(isChecked);
    console.log(productId);

    var action = isChecked ? 'add' : 'remove';

    $.ajax({
        type: "POST",
        url: "wishlist_handler.php",
        data: {
            action: action,
            productId: productId
        },
        success: function(response) {
            console.log(response);
            $("#wishlist_message_" + productId).text(response);

        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);

        }
    });
}
</script>

<div class="row page mt-0">
    <div class="col-md-6">
        <p class="page-text">Showing 1–5 Of 50 Results</p>
    </div>
    <div class="col-md-6">
        <nav aria-label="Blog Pagination">
            <ul class="pagination style-1">
                <li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
                <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
            </ul>
        </nav>
    </div>
</div>