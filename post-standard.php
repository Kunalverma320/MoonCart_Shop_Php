<?php
$tittle="MoonCart Shop & eCommerce HTML Template";
include("config.php");

$total_pages = mysqli_query($con,'SELECT * FROM news')->num_rows;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$num_results_on_page = 7;
$calc_page = ($page - 1) * $num_results_on_page;
$sql = mysqli_query($con, "select * from news order by created_at desc limit $calc_page, $num_results_on_page ");


if(isset($_GET['slug']))
{
	$slugid=$_GET['slug'];
	$slidma=str_replace('+', '', $_GET['slug']); 
	$sql = mysqli_query($con, "select * from news where slug='$slidma'");
}
else{
$sql = mysqli_query($con, "select * from news order by created_at desc limit $calc_page, $num_results_on_page ");

}
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
            <!-- Blog Large -->
            <section class="content-inner-1 bg-img-fix">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <!-- blog start -->


                            <?php  
                while($row=mysqli_fetch_assoc($sql))
                {
                    $timestamp = strtotime($row['created_at']);
                    $formatted_date = date('d M Y', $timestamp);
					?>
                            <style>
                            .blog-single .dz-media img,
                            .blog-single .dz-post-media img {
                                width: 100%;
                            }

                            .pagination {
                                list-style-type: none;
                                padding: 10px 0;
                                display: inline-flex;
                                justify-content: space-between;
                                box-sizing: border-box;
                            }

                            .pagination li {
                                box-sizing: border-box;
                                padding-right: 10px;
                            }

                            .pagination li a {
                                box-sizing: border-box;
                                background-color: #e2e6e6;
                                padding: 8px;
                                text-decoration: none;
                                font-size: 12px;
                                font-weight: bold;
                                color: #616872;
                                border-radius: 4px;
                            }

                            .pagination li a:hover {
                                background-color: #d4dada;
                            }

                            .pagination .next a,
                            .pagination .prev a {
                                text-transform: uppercase;
                                font-size: 12px;
                            }

                            .pagination .currentpage a {
                                background-color: #518acb;
                                color: #fff;
                            }

                            .pagination .currentpage a:hover {
                                background-color: #518acb;
                            }
                            </style>
                            <div class="dz-blog blog-single style-1 sidebar">
                                <h2 class="dz-title"><a
                                        href="post-standard.php?slug=<?php echo urlencode($row['slug']); ?>"><?php echo $row['title']; ?></a>
                                </h2>


                                <div class="dz-meta">
                                    <ul>
                                        <li class="post-date"><?php echo $formatted_date; ?></li>
                                        <li class="dz-user">
                                            <i class="fa-solid fa-user"></i>
                                            By <a href="javascript:void(0);">TTB Admin</a>
                                        </li>
                                        <!-- <li class="dz-comment">
										<i class="fa-solid fa-message"></i>
										<a href="javascript:void(0);">24 Comments</a>
									</li> -->

                                    </ul>
                                </div>
                                <div class="dz-media">
                                    <img src="https://www.ttbinternetsecurity.com/admin/uploads/news/<?php echo $row['image'] ?>"
                                        alt="/">
                                </div>
                                <div class="dz-info">
                                    <div class="dz-post-text">
                                        <?php

										if(isset($_GET['slug']))
										{
											echo  $row['description'];
										}

										?>
                                    </div>
                                    <div class="dz-share-post meta-bottom">
                                        <div class="post-tags">
                                            <?php 
										if(!isset($_GET['slug']))
										{
											?>
                                            <a href="post-standard.php?slug=<?php echo urlencode($row['slug']); ?>"
                                                style="color:red;" class="font-14 read-btn">Read More
                                                <i class="icon feather icon-chevron-right"></i>
                                            </a>
                                            <?php 
												}


												?>

                                            <!-- <strong>Tags:</strong>
										<a href="javascript:void(0);">Mats</a>
										<a href="javascript:void(0);">Accessories</a>
										<a href="javascript:void(0);">Bottles</a>
										<a href="javascript:void(0);">Trackers</a>
										<a href="javascript:void(0);">Bags</a> -->
                                        </div>
                                        <div class="dz-social-icon primary-light">
                                            <ul>
                                                <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                                <li><a class="fab fa-instagram" href="javascript:void(0);"></a></li>
                                                <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa-brands fa-linkedin-in"
                                                        href="https://www.linkedin.com/showcase/3686700/admin/"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <?php } ?>


                            <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
                            <ul class="pagination">
                                <?php if ($page > 1): ?>
                                <li class="prev"><a href="post-standard.php?page=<?php echo $page-1 ?>">Prev</a></li>
                                <?php endif; ?>

                                <?php if ($page > 3): ?>
                                <li class="start"><a href="post-standard.php?page=1">1</a></li>
                                <li class="dots">...</li>
                                <?php endif; ?>

                                <?php if ($page-2 > 0): ?><li class="pages"><a
                                        href="post-standard.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if ($page-1 > 0): ?><li class="pages"><a
                                        href="post-standard.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a>
                                </li>
                                <?php endif; ?>

                                <li class="currentpage"><a
                                        href="post-standard.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

                                <?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="pages"><a
                                        href="post-standard.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="pages"><a
                                        href="post-standard.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a>
                                </li>
                                <?php endif; ?>

                                <?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
                                <li class="dots">...</li>
                                <li class="end"><a
                                        href="post-standard.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
                                </li>
                                <?php endif; ?>

                                <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
                                <li class="next"><a href="post-standard.php?page=<?php echo $page+1 ?>">Next</a></li>
                                <?php endif; ?>
                            </ul>
                            <?php endif; ?>




                            <!-- <div class="author-box style-1">
							<div class="author-profile-info">
								<div class="author-profile-pic">
									<img src="images/blog/profile.jpg" alt="/">
								</div>
								<div class="author-profile-content">
									<h6 class="title">I am John Doe</h6>
									<p>We were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs.</p>
									<ul class="social-icon m-b0">
										<li>
											<a href="javascript:void(0);" target="_blank">
												<i class="fa-brands fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" target="_blank">
												<i class="fa-brands fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" target="_blank">
												<i class="fa-brands fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="https://www.behance.net/HugeBinary" target="_blank">
												<i class="fa-brands fa-behance"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div> -->
                            <div class="dz-related-post">
                                <h4 class="widget-title">Related Blogs</h4>
                                <div class="row">

                                    <?php   

								$related_post=mysqli_query($con,"SELECT * FROM news ORDER BY RAND() LIMIT 2");
								while($row_related=mysqli_fetch_assoc($related_post))
								{
                                    
                                    $timestamp = strtotime($row_related['created_at']);
                                    $formatted_date = date('d M Y', $timestamp);
                                    
                                    
                                    
									?>
                                    <div class="col-lg-6 col-md- m-b30">
                                        <div class="dz-card style-5 light">
                                            <div class="dz-media">
                                                <img src="https://www.ttbinternetsecurity.com/admin/uploads/news/<?php echo $row_related['image'] ?>"
                                                    style="width: 560px;height: 350px;" alt="/">
                                            </div>
                                            <div class="dz-info">
                                                <div class="dz-meta">
                                                    <ul>
                                                        <li class="post-date"> <?php echo $formatted_date ?></li>
                                                    </ul>
                                                </div>
                                                <h4 class="dz-title">
                                                    <a
                                                        href="post-standard.php?slug=<?php echo urlencode($row_related['slug']); ?>"><?php echo $row_related['title'] ?></a>
                                                </h4>
                                                <a href="post-standard.php?slug=<?php echo urlencode($row_related['slug']); ?>"
                                                    class="font-14 read-btn">Read More
                                                    <i class="icon feather icon-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php }?>


                                </div>
                            </div>

                            <!-- blog END -->
                            <!-- <div class="clear" id="comment-list">
								<div class="post-comments comments-area style-1 clearfix">
									<h4 class="comments-title mb-2">Comments (02)</h4>
									<p class="dz-title-text">There are many variations of passages of Lorem Ipsum available.</p>
									<div id="comment">
										<ol class="comment-list">
											<li class="comment even thread-even depth-1 comment" id="comment-2">
												<div class="comment-body">
												  <div class="comment-author vcard">
														<img src="images/profile4.jpg" alt="/" class="avatar">
														<cite class="fn">Michel Poe</cite> 
												  </div>
											  <div class="comment-content dz-page-text">
												 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											  </div>
											  <div class="reply">
												 <a rel="nofollow" class="comment-reply-link" href="javascript:void(0);">Reply</a>
											  </div>
										   </div>
										   <ol class="children">
											  <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment" id="comment-3">
												 <div class="comment-body" id="div-comment-3">
													<div class="comment-author vcard">
													   <img src="images/profile3.jpg" alt="/" class="avatar">
													   <cite class="fn">Celesto Anderson</cite>
													</div>
													<div class="comment-content dz-page-text">
													   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
													</div>
													<div class="reply">
													   <a class="comment-reply-link" href="javascript:void(0);"> Reply</a>
													</div>
												 </div>
											  </li>
										   </ol>
										</li>
										<li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
										   <div class="comment-body" id="div-comment-4">
											  <div class="comment-author vcard">
												 <img src="images/profile2.jpg" alt="/" class="avatar">
												 <cite class="fn">Monsur Rahman Lito</cite>
											  </div>
											  <div class="comment-content dz-page-text">
												 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											  </div>
											  <div class="reply">
												 <a class="comment-reply-link" href="javascript:void(0);"> Reply</a>
											  </div>
										   </div>
										</li>
									 </ol>
								  </div>
								  <div class="default-form comment-respond style-1" id="respond">
									<h4 class="comment-reply-title mb-2" id="reply-title">Good Comments</h4>
									<p class="dz-title-text">There are many variations of passages of Lorem Ipsum available.</p>
									<div class="clearfix">
										<form method="post" id="comments_form" class="comment-form" novalidate>
										   <p class="comment-form-author"><input id="name" placeholder="Author" name="author" type="text" value=""></p>
										   <p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
										   <p class="comment-form-comment"><textarea id="comments" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
										   <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
											  <button id="submit" type="submit" class="submit btn btn-secondary btnhover3 filled">
											  Submit Now
											  </button>
										   </p>
										</form>
									</div>
								  </div>
							   </div>
							</div> -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-8 order-lg-1 order-2">
                            <aside class="side-bar sticky-top mt-lg-0 mt-md-5 mt-3">
                                <div class="widget">
                                    <h5 class="widget-title">Search</h5>
                                    <div class="search-bx">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="text" id="serch_news" class="form-control"
                                                    placeholder="Search" type="text" style="margin:0px 10px;">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn">
                                                        <i class="icon feather icon-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="widget widget_categories style-1">
								<h5 class="widget-title">Category</h5>
								<ul>
									<li class="cat-item"><a href="javascript:void(0);">Bamboo Products</a> (10)</li>
									<li class="cat-item"><a href="javascript:void(0);">Fitness Trackers</a> (5)</li>
									<li class="cat-item"><a href="javascript:void(0);">Protein Supplements</a> (17)</li>
									<li class="cat-item"><a href="javascript:void(0);">Fitness Equipment</a> (13)</li>
									<li class="cat-item"><a href="javascript:void(0);">Reusable Bags</a> (06)</li> 
									<li class="cat-item"><a href="javascript:void(0);">Water Bottles</a> (17)</li> 
									<li class="cat-item"><a href="javascript:void(0);">Eco-Friendly Products</a> (13)</li> 
									<li class="cat-item"><a href="javascript:void(0);">Home Assistants</a> (06)</li> 
									<li class="cat-item"><a href="javascript:void(0);">Water Monitors</a> (22)</li> 
								</ul>
							</div> -->
                                <div class="widget recent-posts-entry">
                                    <h5 class="widget-title">Latest Post</h5>
                                    <div class="widget-post-bx  filter_news">


                                    </div>
                                </div>
                                <!-- <div class="widget widget_tag_cloud">
                                    <h5 class="widget-title">Tags</h5>
                                    <div class="tagcloud">
                                        <a href="javascript:void(0);">Mats </a>
                                        <a href="javascript:void(0);">Accessories</a>
                                        <a href="javascript:void(0);">Bottles</a>
                                        <a href="javascript:void(0);">Website</a>
                                        <a href="javascript:void(0);">Trackers</a>
                                        <a href="javascript:void(0);">Bags</a>
                                        <a href="javascript:void(0);">Cup</a>
                                        <a href="javascript:void(0);">Toothbrushes</a>
                                    </div>
                                </div> -->
                            </aside>
                        </div>
                    </div>
                </div>
            </section>


            <script>
            $(document).ready(function() {
                filter_news();

                function filter_news() {
                    $('.filter_news').html('<div id="loading" style="" ></div>');
                    var action = 'fetch_data';
                    var serch_news = $('#serch_news').val();
                    console.log(serch_news);

                    $.ajax({
                        url: "fetch_news.php",
                        method: "POST",
                        data: {
                            action: action,
                            serch_news: serch_news

                        },
                        success: function(data) {
                            $('.filter_news').html(data);

                        }
                    });
                }

                $('#serch_news').on('input', function() {
                    filter_news();
                });





            });
            </script>


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

        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
        <!-- Quick Modal Start -->
        <div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="icon feather icon-x"></i>
                    </button>
                    <div class="modal-body">
                        <div class="row g-xl-4 g-3">
                            <div class="col-xl-6 col-md-6">
                                <div class="dz-product-detail mb-0">
                                    <div class="swiper-btn-center-lr">
                                        <div class="swiper quick-modal-swiper2">
                                            <div class="swiper-wrapper" id="lightgallery">
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item" href="images/products/baby-seat.png"
                                                            data-src="images/products/baby-seat.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item"
                                                            href="images/products/baby-seat2.png"
                                                            data-src="images/products/baby-seat2.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat2.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item"
                                                            href="images/products/baby-seat3.png"
                                                            data-src="images/products/baby-seat3.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat3.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item" href="images/products/baby-seat.png"
                                                            data-src="images/products/baby-seat.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/baby-seat.png" alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat1.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat2.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat3.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/seat1.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="dz-product-detail style-2 ps-xl-3 ps-0 pt-2 mb-0">
                                    <div class="dz-content">
                                        <div class="dz-content-footer">
                                            <div class="dz-content-start">
                                                <span class="badge bg-purple mb-2">SALE 20% Off</span>
                                                <h4 class="title mb-1"><a href="shop-list.html">Baby Strollers</a></h4>
                                                <div class="review-num">
                                                    <ul class="dz-rating me-2">
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#FF8A00"></path>
                                                            </svg>
                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#FF8A00"></path>
                                                            </svg>
                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#FF8A00"></path>
                                                            </svg>
                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.2"
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#5E626F"></path>
                                                            </svg>

                                                        </li>
                                                        <li>
                                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.2"
                                                                    d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                    fill="#5E626F"></path>
                                                            </svg>
                                                        </li>
                                                    </ul>
                                                    <span class="text-secondary me-2">4.7 Rating</span>
                                                    <a href="javascript:void(0);">(5 customer reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="para-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has.
                                        </p>
                                        <div class="meta-content m-b20 d-flex align-items-end">
                                            <div class="me-3">
                                                <span class="form-label">Price</span>
                                                <span class="price-num">$125.75 <del>$132.17</del></span>
                                            </div>
                                            <div class="btn-quantity light me-0">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" value="1" name="demo_vertical2">
                                            </div>
                                        </div>
                                        <div class="btn-group cart-btn">
                                            <a href="shop-cart.html" class="btn btn-md btn-secondary text-uppercase">Add
                                                To Cart</a>
                                            <a href="shop-wishlist.html" class="btn btn-md btn-light btn-icon">
                                                <svg width="19" height="17" viewBox="0 0 19 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z"
                                                        fill="black"></path>
                                                </svg>
                                                Add To Wishlist
                                            </a>
                                        </div>
                                        <div class="dz-info mb-0">
                                            <ul>
                                                <li>
                                                    <strong>SKU:</strong>
                                                    <span>PRT584E63A</span>
                                                </li>
                                                <li>
                                                    <strong>Category:</strong>
                                                    <span>Bottles,</span>
                                                    <span>Accessories,</span>
                                                    <span>Mats,</span>
                                                    <span>Bottles,</span>
                                                    <span>Trackers</span>
                                                </li>
                                                <li>
                                                    <strong>Tags:</strong>
                                                    <span>Trackers,</span>
                                                    <span>Bags,</span>
                                                    <span>Cup,</span>
                                                    <span>Toothbrushes</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Modal End -->
    </div>
    <?php include("includes/script.php"); ?>
</body>

</html>