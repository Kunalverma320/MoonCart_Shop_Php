<?php
$tittle="MoonCart Shop & eCommerce HTML Template";
include("config.php");
?>

<?php include("includes/links.php"); ?>

<body>
    <div class="page-wraper">
        <!-- <div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div> -->

        <?php include("includes/header.php"); ?>


        <div class="page-content">
            <!--banner-->
            <div class="dz-bnr-inr style-1" style="background-image:url(images/background/bg-shape.jpg);">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Shop With Category</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
                                <li class="breadcrumb-item">Shop Standard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <section class="content-inner-1 pt-3 z-index-unset">
                <div class="container-fluid">
                    <div class="row mt-xl-2 mt-0">


                        <div class="col-20 col-xl-3">
                            <div class="sticky-xl-top">
                                <a href="javascript:void(0);" class="panel-close-btn active">
                                    <svg width="35" height="35" viewBox="0 0 51 50" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.748 12.5L12.748 37.5" stroke="white" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.748 12.5L37.748 37.5" stroke="white" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="shop-filter">
                                    <aside>
                                        <div class="d-flex align-items-center justify-content-between m-b30">
                                            <h6 class="title mb-0 fw-normal">
                                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"
                                                    width="20" height="20">
                                                    <g id="Layer_30" data-name="Layer 30">
                                                        <path
                                                            d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                        </path>
                                                        <path
                                                            d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                                                        </path>
                                                        <path
                                                            d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                                Filter
                                            </h6>
                                        </div>
                                        <div class="widget widget_search">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <?php 
                                                    if(isset($_GET['search']))
                                                    {
                                                        $searchval=$_GET['search'];
                                                        ?>
                                                        <input name="dzSearch" required="required" type="search"
                                                        class="form-control" value="<?php echo $searchval; ?>" id="searchInput"
                                                        placeholder="Search Product">
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                        <input name="dzSearch" required="required" type="search"
                                                        class="form-control" id="searchInput"
                                                        placeholder="Search Product">
                                                        <?php
                                                    }
                                                    ?>
                                                    <input name="dzSearch" required="required" type="search"
                                                        class="form-control" id="searchInput"
                                                        placeholder="Search Product">
                                                    <div class="input-group-addon">
                                                        <button name="submit" value="Submit" type="submit" class="btn">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z"
                                                                    stroke="#0D775E" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M17.5 17.5L13.875 13.875" stroke="#0D775E"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget">
                                            <h6 class="widget-title">Price</h6>
                                            <div class="price-slide range-slider">
                                                <div class="price">
                                                    <div class="range-slider style-1">
                                                        <div id="slider-tooltips" class="mb-3"></div>

                                                        <span class="example-val" id="slider-margin-value-min"></span>
                                                        <span class="example-val" id="slider-margin-value-max"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="widget widget_categories">
                                            <h6 class="widget-title">Products</h6>
                                            <ul>
                                                <?php  
											
											$getcatdata=mysqli_query($con,"select * from categories where category_status='Active'");
											
											if ($getcatdata->num_rows > 0) {
											while($rowcat = $getcatdata->fetch_assoc())
											{
																					
											?>
                                                <div class="row">
                                                    <div class="list-group-item checkbox col-9 ">
                                                        <input type="checkbox" style="margin:0px 0px 0px 15px;"
                                                            class="cat-item cat-item-26 common_selector category_main"
                                                            value="<?php echo $rowcat['id']; ?>">
                                                        <span><?php echo $rowcat['category_name']; ?></span>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="robat"><?php 
											$catid=$rowcat['id'];
											$checkcat=mysqli_query($con,"SELECT COUNT(category_id) as categorycount FROM `products` WHERE category_id='$catid'");
											if($checkcat->num_rows >0)
											{
												while($rowcheck=$checkcat->fetch_assoc())
												{
													echo $rowcheck['categorycount'];
												}
											}
											?></span>
                                                    </div>
                                                </div>




                                                <?php } }?>
                                            </ul>
                                        </div>

                                        <div class="widget widget_tag_cloud">
                                            <h6 class="widget-title">Tags</h6>
                                            <div class="tagcloud">
                                                <?php  
											
											$getsubcatdata=mysqli_query($con,"select * from subcategories where subcategory_status='Active'");
											
											if ($getsubcatdata->num_rows > 0) {
											while($rowsubcat = $getsubcatdata->fetch_assoc())
											{
																					
											?>
                                                <a href="javascript:void(0);"><?php echo $rowsubcat['subcategory_name']; ?>
                                                </a>

                                                <?php }} ?>
                                            </div>
                                        </div>
										<a id="resetButton" href="javascript:void(0);" class="btn btn-sm font-14 btn-primary btn-sharp">RESET</a>
                                    </aside>
                                </div>
                            </div>
                        </div>

                        <!-- next div  -->
                        <div class="col-80 col-xl-9">
                            <h4 class="mb-3">Category</h4>
                            <div class="filter-wrapper border-top p-t20">
                                <div class="filter-left-area">
                                    <ul class="filter-tag">

                                    </ul>
                                    <span>Showing 1–5 Of 50 Results</span>
                                </div>
                                <div class="filter-right-area">
                                    <a href="javascript:void(0);" class="panel-btn">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"
                                            width="20" height="20">
                                            <g id="Layer_28" data-name="Layer 28">
                                                <path
                                                    d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                </path>
                                                <path
                                                    d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                                                </path>
                                                <path
                                                    d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                </path>
                                            </g>
                                        </svg>
                                        Filter
                                    </a>
                                    <style>
                                    

                                    .filterhover li:hover {

                                        border: 1px solid;
                                        background: black;
                                        color: #fff;

                                    }

                                    #loading {
                                        text-align: center;
                                        background: url('loader.gif') no-repeat center;
                                        height: 150px;
                                    }
                                    </style>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                Shot By
                                            </button>
                                            <ul class="dropdown-menu filterhover"
                                                style="text-align: center; line-height: 2.5;">
                                                <li>
                                                    <label>
                                                        <input type="radio" name="sort_option"
                                                            class="cat-item cat-item-26 visually-hidden common_selector price_assending"
                                                            value="asc">Price, low to high
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="sort_option"
                                                            class="cat-item cat-item-26 visually-hidden common_selector price_desending"
                                                            value="desc">Price, high to low
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="sort_option"
                                                            class="cat-item cat-item-26 visually-hidden common_selector desc_alpha"
                                                            value="desc">Alphabetically, Z-A
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="sort_option"
                                                            class="cat-item cat-item-26 visually-hidden common_selector asc_alpha"
                                                            value="asc">Alphabetically, A-Z
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="sort_option"
                                                            class="cat-item cat-item-26 visually-hidden common_selector new_arrival"
                                                            value="desc">New Arrivals
                                                    </label>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group Category">
                                        <select class="default-select">
                                            <option>Categories</option>
                                            <option>1 Day</option>
                                            <option>1 Week</option>
                                            <option>3 Weeks</option>
                                            <option>1 Month</option>
                                            <option>3 Months</option>
                                        </select>
                                    </div>
                                    <div class="shop-tab">
                                        <ul class="nav" role="tablist" id="dz-shop-tab">
                                            <li class="nav-item" role="presentation">
                                                <a href="#tab-list-list" class="nav-link active" id="tab-list-list-btn"
                                                    data-bs-toggle="pill" data-bs-target="#tab-list-list" role="tab"
                                                    aria-controls="tab-list-list" aria-selected="true">
                                                    <i class="flaticon flaticon-list"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 tab-content shop-" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="tab-list-list" role="tabpanel"
                                        aria-labelledby="tab-list-list-btn">
                                        <div class="row filter_data">


                                        </div>
                                    </div>
                                </div>
                            </div>

                           


                            <script>
                            $(document).ready(function() {

                                // var checkj = $('.dgf').val();
                                // console.log(checkj);
                                filter_data();
                                function filter_data() {
                                    $('.filter_data').html('<div id="loading" style="" ></div>');
                                    var action = 'fetch_data';
                                    var minimum_price = $('#slider-margin-value-min').text().replace(
                                        'Min Price: Rs.', '').trim();
                                    var maximum_price = $('#slider-margin-value-max').text().replace(
                                        'Max Price: Rs.', '').trim();
                                    // console.log(minimum_price);
                                    // console.log(maximum_price);
                                    var search_query = $('#searchInput').val();
                                    // console.log(search_query);
                                    var price_desending = get_filter('price_desending');
                                    var price_assending = get_filter('price_assending');
                                    var desc_alpha = get_filter('desc_alpha');
                                    var asc_alpha = get_filter('asc_alpha');
                                    var new_arrival = get_filter('new_arrival');
                                    var category_main = get_filter('category_main');
                                    $.ajax({
                                        url: "fetch_data.php",
                                        method: "POST",
                                        data: {
                                            action: action,
                                            // minimum_price: minimum_price,
                                            // maximum_price: maximum_price,
                                            price_desending: price_desending,
                                            price_assending: price_assending,
                                            asc_alpha: asc_alpha,
                                            desc_alpha: desc_alpha,
                                            new_arrival: new_arrival,
                                            search_query: search_query,
                                            category_main: category_main                                 
                                        },
                                        success: function(data) {
                                            $('.filter_data').html(data);
											
                                        }
                                    });
                                }

                                $('#resetButton').click(function() {
                                    // Reset values and filter data
                                    $('.common_selector').prop('checked',
                                    false); // Uncheck all checkboxes
                                    $('#searchInput').val(''); // Clear search input
                                   
                                });

                                $('#searchInput').on('input', function() {
                                    filter_data();
                                });


                                function get_filter(class_name) {
                                    var filter = [];
                                    $('.' + class_name + ':checked').each(function() {
                                        filter.push($(this).val());
                                    });
                                    return filter;
                                }
                                $('.common_selector').click(function() {
                                    filter_data();
                                });

                            
                            });
                            </script>


                        </div>
                    </div>
                </div>
            </section>

            <!-- Icon Box Start -->
            <section class="content-inner py-0">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2 bg-light">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/password-check.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Filter & Discover</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">01</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/cart.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Add to cart</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">02</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2 bg-light">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/discovery.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Fast Shipping</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">03</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="icon-bx-wraper style-2">
                                <div class="icon-bx">
                                    <img src="images/svg/icon-bx/box-tick.svg" alt="/">
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title">Enjoy The Product</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                <div class="data-text">04</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Icon Box End -->
        </div>



        <?php include("includes/footer.php"); ?>

        <button class="scroltop" type="button">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
    <?php include("includes/script.php"); ?>
</body>

</html>