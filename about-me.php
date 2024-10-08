

<?php
$tittle="About-me";
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


    <script>

  const conditionNav = document.getElementById('condition-nav');

  // Create a new Intersection Observer
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      // If the observed element is in view
      if (entry.intersectionRatio > 0) {
        // Add the 'is-fixed' class
        conditionNav.classList.add('is-fixed');
      } else {
        // Remove the 'is-fixed' class
        conditionNav.classList.remove('is-fixed');
      }
    });
  });

  // Start observing the target element
  observer.observe(conditionNav);
</script>

    <div class="page-content">
			
    <!--banner-->
			<div class="dz-bnr-inr" style="background-image:url(images/background/bg-shape.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>About us</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
								<li class="breadcrumb-item">About us</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<section class="content-inner overlay-white-dark overflow-hidden">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="section-head wow fadeInUp m-md-r100" data-wow-delay="0.1s">
								<h2 class="title">The Importance of Regular Exercise for Maintaining a Healthy Lifestyle
								</h2>
								<p>Regular exercise is crucial for maintaining a healthy lifestyle. Exercise not only
									helps to keep your body in shape but also benefits your mental health by reducing
									stress and improving mood. It can also reduce your risk of developing chronic
									diseases such as heart disease,</p>
							</div>
							<div class="author-bx-detail m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="author-bx-pic radius">
									<img src="images/testimonial/testimonial4.jpg" alt="">
								</div>
								<div>
									<h6 class="name">Kenneth Fong</h6>
									<span class="position">Postgraduate Student</span>
								</div>
							</div>
							<div class="accordion dz-accordion accordion-sm wow fadeInUp" data-wow-delay="0.3s"
								id="accordionFaq">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<a href="#" class="accordion-button" data-bs-toggle="collapse"
											data-bs-target="#collapseOne" aria-expanded="true"
											aria-controls="collapseOne">
											How can I contact customer support?
											<span class="toggle-close"></span>
										</a>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show"
										aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p class="m-b0">If your order has not yet shipped, you can contact us to
												change your shipping address. If your order has already shipped, we may
												not be able to change the address.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseTwo" aria-expanded="false"
											aria-controls="collapseTwo">
											Can I cancel my order?
											<span class="toggle-close"></span>
										</a>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse"
										aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p class="m-b0">If your order has not yet shipped, you can contact us to
												change your shipping address. If your order has already shipped, we may
												not be able to change the address.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseThree" aria-expanded="false"
											aria-controls="collapseThree">
											Do you offer international shipping?
											<span class="toggle-close"></span>
										</a>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse"
										aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p class="m-b0">If your order has not yet shipped, you can contact us to
												change your shipping address. If your order has already shipped, we may
												not be able to change the address.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseFour" aria-expanded="false"
											aria-controls="collapseFour">
											Can I track my order in real-time?
											<span class="toggle-close"></span>
										</a>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse"
										aria-labelledby="headingFour" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p class="m-b0">If your order has not yet shipped, you can contact us to
												change your shipping address. If your order has already shipped, we may
												not be able to change the address.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseFive" aria-expanded="false"
											aria-controls="collapseFive">
											How do I know if a product is in stock?
											<span class="toggle-close"></span>
										</a>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse"
										aria-labelledby="headingFive" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p class="m-b0">If your order has not yet shipped, you can contact us to
												change your shipping address. If your order has already shipped, we may
												not be able to change the address.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="about-sale">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
										<div class="about-content">
											<h2 class="title"><span class="counter">50</span>+</h2>
											<p class="text">Items Sale</p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.5s">
										<div class="about-content">
											<h2 class="title">400%</h2>
											<p class="text">Return on investment</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="row g-xl-4 g-md-4 g-3">
								<div class="col-xl-8 col-lg-8 col-sm-8 col-8 wow fadeInUp" data-wow-delay="0.4s">
									<div class="about-thumb">
										<img src="images/about/pic3.jpg" alt="">
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.5s">
									<div class="about-thumb">
										<img src="images/about/pic4.jpg" alt="">
									</div>
								</div>
								<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.6s">
									<div class="about-thumb">
										<img src="images/about/pic5.jpg" alt="">
									</div>
								</div>
								<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.7s">
									<div class="about-thumb">
										<img src="images/about/pic6.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- About Start-->
			<section class="content-inner overflow-hidden bg-light">
				<div class="container">
					<div class="row about-style1 align-items-center ">
						<div class="col-lg-6 m-b30">
							<div class="position-relative">
								<div class="about-thumb wow fadeInUp" data-wow-delay="0.1s">
									<img src="images/girl.png" alt="">
								</div>
								<div class="our-customer wow fadeInUp" data-wow-delay="0.2s">
									<h6>Our Satisfied User</h6>
									<ul>
										<li class="customer-image">
											<img src="images/testimonial/pic1.png" alt="">
										</li>
										<li class="customer-image">
											<img src="images/testimonial/pic2.png" alt="">
										</li>
										<li class="total-customer">
											<span class="font-14">+12K</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30 aos-item wow fadeInUp" data-wow-delay="0.3s">
							<div class="px-lg-4">
								<div class="section-head">
									<h2 class="title">What our clients say <br> about us</h2>
								</div>
								<div class="swiper swiper-five">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="about-content">
												<p class="para-text">It is a long established fact that a reader will be
													distracted by the readable content of a page when looking at its
													layout. The point of using Lorem Ipsum is that it has a more-or-less
													normal distribution of letters, as opposed to using 'Content here,
													content here', making it look like readable English.</p>
												<div class="about-bx-detail">
													<div class="about-bx-pic radius">
														<img src="images/testimonial/testimonial4.jpg" alt="">
													</div>
													<div>
														<h6 class="name">Kenneth Fong</h6>
														<span class="position">Postgraduate Student</span>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="about-content">
												<p class="para-text">It is a long established fact that a reader will be
													distracted by the readable content of a page when looking at its
													layout. The point of using Lorem Ipsum is that it has a more-or-less
													normal distribution of letters, as opposed to using 'Content here,
													content here', making it look like readable English.</p>
												<div class="about-bx-detail">
													<div class="about-bx-pic radius">
														<img src="images/testimonial/testimonial4.jpg" alt="">
													</div>
													<div>
														<h6 class="name">Joe Do</h6>
														<span class="position">Undergraduate Student</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="pagination-align">
										<div class="about-button-prev btn-prev">
											<i class="flaticon flaticon-left-chevron"></i>
										</div>
										<div class="about-button-next btn-next">
											<i class="flaticon flaticon-chevron"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- About End -->

			<!-- Companies -->
			<section class="content-inner-1 overlay-white-middle companies">
				<div class="container">
					<div class="section-inner">
						<div class="section-head style-2 wow fadeInUp" data-wow-delay="0.1s">
							<h2 class="title">We’re just keep growing with 6.3k trusted companies</h2>
							<p>Nullam nec ipsum luctus, vehicula massa in, dictum sapien. Aenean quis luctus ert nulla
								quam augue.</p>
						</div>
						<div class="row gx-3 companies-inner">
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.1s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo1.png" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.2s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo2.png" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.3s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo3.png" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.4s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo4.png" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.5s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo5.png" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.6s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo6.png" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.7s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo7.png" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-4 col-6 p-lg-b30 p-b20 wow fadeInUp" data-wow-delay="0.8s">
								<a href="javascript:void(0);" class="companies-wrapper">
									<div class="companies-media">
										<img src="images/companies/logo8.png" alt="">
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Companies End -->

			<!-- Icon Box Start -->
			<section class="content-inner py-0">
				<div class="container-fluid px-0">
					<div class="row gx-0">
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 bg-light wow fadeInUp" data-wow-delay="0.1s">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/password-check.svg" alt="">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Filter & Discover</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">01</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 wow fadeInUp" data-wow-delay="0.2s">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/cart.svg" alt="">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Add to cart</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">02</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 bg-light wow fadeInUp" data-wow-delay="0.3s">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/discovery.svg" alt="">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Fast Shipping</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">03</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 wow fadeInUp" data-wow-delay="0.4s">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/box-tick.svg" alt="">
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

		<button class="scroltop" type="button">
			<i class="fas fa-arrow-up"></i>
		</button>
	</div>
	<?php include("includes/script.php"); ?>
</body>
</html>