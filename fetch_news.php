<?php
include("config.php");

if(isset($_POST["action"]))
{
    $query = "SELECT * FROM news where status=1 ";


    
    if(isset($_POST["serch_news"]))
    {
        $search_query = $_POST["serch_news"];
        $query .= " AND `title` LIKE '%$search_query%' limit 8";
    }

  

   

    $result = mysqli_query($con, $query);
    $total_row = mysqli_num_rows($result);

    $output = '';
    if($total_row > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $timestamp = strtotime($row['created_at']);
                    $formatted_date = date('d M Y', $timestamp);
            $output .= '
            <div class="widget-post clearfix">
            <div class="dz-media">
                <a href="post-standard.php?slug='. urlencode($row['slug']).'"><img
                        src="https://www.ttbinternetsecurity.com/admin/uploads/news/'.$row['image'].'"
                        alt=""></a>
            </div>
            <div class="dz-info">
                <div class="dz-meta">
                    <ul>
                        <li class="post-date"> '.$formatted_date.' </li>
                    </ul>
                </div>
                <h6 class="title"><a
                        href="post-standard.php?slug='. urlencode($row['slug']).'">'. $row['title'].'</a>
                </h6>
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
</script>

