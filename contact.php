

<?php
$tittle="MoonCart Shop & eCommerce HTML Template";
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
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        conditionNav.classList.add('is-fixed');
      } else {
        conditionNav.classList.remove('is-fixed');
      }
    });
  });

  // Start observing the target element
  observer.observe(conditionNav);
</script>

    <div class="page-content">
			<!--banner-->
			<div class="contact-bnr bg-secondary">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact-info style-1 text-start text-white">
								<h2 class="title wow fadeInUp" data-wow-delay="0.1s">DISCOVER US</h2>
								<p class="text wow fadeInUp" data-wow-delay="0.2s"><span
										class="text-decoration-underline text-white"><a class="text-white"
											href="our-team.html">MoonCart is here to help you;</a></span> <br> Our
									experts are available to answer any questions you might have. We’ve got the
									answers..</p>
								<div class="contact-bottom wow fadeInUp" data-wow-delay="0.3s">
									<div class="contact-left">
										<h3>Call Us</h3>
										<ul>
											<li>+91 916-545-4247</li>
                                            <!-- <li>+91 916-545-4247</li> -->
										</ul>
									</div>
									<div class="contact-right">
										<h3>Email Us</h3>
										<ul>
											<li>kunalverma320@gmail.com</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-area1 style-1 m-r20 m-md-r0 wow fadeInUp" data-wow-delay="0.5s">
								<form class="dz-form dzForm" method="POST"
									action="https://mooncart.dexignzone.com/xhtml/script/contact_smtp.php">
									<input type="hidden" class="form-control" name="dzToDo" value="Contact">
									<input type="hidden" class="form-control" name="reCaptchaEnable" value="0">
									<div class="dzFormMsg"></div>
									<label class="form-label">Your Name</label>
									<div class="input-group">
										<input required type="text" class="form-control" name="dzName">
									</div>
									<label class="form-label">Email Address</label>
									<div class="input-group">
										<input required type="text" class="form-control" name="dzEmail">
									</div>
									<label class="form-label">Phone Number</label>
									<div class="input-group">
										<input required type="text" class="form-control" name="dzPhoneNumber">
									</div>
									<label class="form-label">Massage</label>
									<div class="input-group m-b30">
										<textarea name="dzMessage" rows="4" required
											class="form-control m-b10"></textarea>
									</div>
									<div>
										<button name="submit" type="submit" value="submit"
											class="btn w-100 btn-secondary btnhover">SUBMIT</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="content-inner-2 pt-0">
				<div class="map-iframe map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118983.72840229067!2d81.61907330000001!3d21.26190555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dda23be28229%3A0x163ee1204ff9e240!2sRaipur%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1709267138630!5m2!1sen!2sin"
						style="border:0; width:100%; min-height:100%; margin-bottom: -8px;" allowfullscreen></iframe>
                        
				</div>
			</div>

		</div>

		<button class="scroltop" type="button">
			<i class="fas fa-arrow-up"></i>
		</button>
	</div>
	<?php include("includes/script.php"); ?>
</body>
</html>