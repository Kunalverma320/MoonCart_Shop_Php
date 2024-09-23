

<?php
$tittle="coming-soon";
?>

<?php include("includes/links.php"); ?>

<body>
	<div class="page-wraper">
   


      
    <section class="px-3 overflow-hidden">
		<div class="row dz-coming-soon">
			<div class="col-xxl-6 col-xl-6 col-lg-6 px-0">
				<div class="dz-coming-bx single-page">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>
					<div class="dz-content">
						<h2 class="dz-title pe-xl-4">Our awesome new site is almost ready to launch!</h2>
						<p>In the meantime, sign up for our monthly Newsletter to stay up yo date.</p>
						
						<form class="dzSubscribe" action="https://mooncart.dexignzone.com/xhtml/script/mailchamp.php" method="post">
							<div class="dzSubscribeMsg"></div>
							<div class="ft-row m-b15 d-flex align-items-center">
								<input name="dzEmail" required="required" type="email" placeholder="Your Email Address" class="form-control">
								<button name="submit" value="Submit" type="submit" class="btn btn-secondary">Subscribe</button>
							</div>
						</form>
					</div>	
					<div class="countdown-row">
						<div class="countdown">
							<div class="date">
								<span class="time" id="day">00</span>
								<span class="text"> Days</span>
							</div>
							<div class="date">
								<span class="time" id="hour">00</span>
								<span class="text">Hours</span>
							</div>
							<div class="date">
								<span class="time" id="min">00</span>
								<span class="text">Minutes</span>
							</div>
							<div class="date">
								<div class="time lost" id="second">00</div>
								<span class="text">Seconds</span>
							</div>
						</div>
					</div>
				</div>
				<img src="images/circle-lines.png" class="bg-img" alt="">
			</div>
			<div class="col-xxl-6 col-xl-6 col-lg-6 px-0  d-lg-block d-none">
				<div class="dz-coming-bx2">
					<img src="images/circle-lines2.png" class="bg-img2" alt="">
					<div class="dz-coming-media">
						<img src="images/lady.png" alt="">   
					</div>	
				</div>
				<div class="banner-social-media style-1">
					<ul>
						<li>
							<a target="_blank" href="javascript:void(0);">Instagram</a>
						</li>
						<li>
							<a target="_blank" href="javascript:void(0);">Facebook</a>
						</li>
						<li>
							<a target="_blank" href="javascript:void(0);">twitter</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

		
		<?php include("includes/footer.php"); ?>

		<button class="scroltop" type="button">
			<i class="fas fa-arrow-up"></i>
		</button>
	</div>
	<?php include("includes/script.php"); ?>
    
</body>
</html>