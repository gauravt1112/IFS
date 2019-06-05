<?php
  $current = "home";
  $current2 = "home";
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php');?>
</head>
<body>

<?php include('includes/header.php');?>

<div id="content">


	<div id="slider">
		<div class="cycle-slideshow"  id="homeSlider"
		data-cycle-fx=fade
		data-cycle-timeout=5000
		data-cycle-slides="> div.home_slide"
		data-cycle-pager=".pager"
		>
			<div class="cycle-prev"></div>
			<div class="cycle-next"></div>

			<div class="home_slide slider01">&nbsp;</div>
			<div class="home_slide slider02">&nbsp;</div>
			<div class="home_slide slider03">&nbsp;</div>
		</div>
	</div>

	<div id="progressBar">&nbsp;</div>



	<div class="row">
		<div id="home_intro">
			<div class="container" style="position:relative">
				<p class="home_title">Paper Link International FZCO</p>
				<p><img src="images/txt_link_for_buyers.png" alt="A Link For Buyers and Sellers"></p>
				<div><a href="profile.php" class="button">KNOW MORE</a></div>
			</div>
		</div>
	</div>

	<div class="container" style="position:relative">
		<div class="row">
			<div  class="col-md-4">
				<div class="home_box">
					<div class="home_box_details products_box">
						<p class="lines"><span>&nbsp;</span></p>
						<p>WASTE PAPER<br><strong>FINISH PAPER</strong></p>
						<p class="lines"><span>&nbsp;</span></p>
						<p style="font-size:16px;margin-top:42px;">View Our Products</p>
					</div>
					<img src="images/home/01-events-media.jpg" class="background">
					<a href="waste-paper.php"><span>CLICK HERE</span></a>
				</div>
				<div class="home_box" style="background: #e6e6e6;">
					<div class="home_box_details">
						<p class="lines"><span>&nbsp;</span></p>
						<p><strong>GET IN TOUCH</strong><br>WITH US ACROSS OUR<br>GLOBAL OFFICES</p>
						<p class="lines"><span>&nbsp;</span></p>
						<p style="margin-top:51px;">Send An Enquiry Here</p>
					</div>
					<!-- <img src="images/home/03-get-touch.jpg" class="background"> -->
					<a href="contact-us.php"><span>CLICK HERE</span></a>
				</div>
			</div>
			<div  class="col-md-4">
				<div class="home_box" style="margin-left:6px;background: #f4ed2f;">
					<div class="home_box_details">
						<p class="lines" style="margin-top:25px;"><span>&nbsp;</span></p>
						<p>OUR INDENTING AGENT<br>IN INDIA</p>
						<p><strong>MAIMOON IMPEX L.L.P.</strong></p>
						<p class="lines"><span>&nbsp;</span></p>
						<p style="margin-top:40px;">Find Out More</p>
					</div>
					<!-- <img src="images/home/02-events-media.jpg" class="background"> -->
					<a href="our-indenting-agents.php"><span>CLICK HERE</span></a>
				</div>
				<div class="home_box" style="margin-left:6px;">
					<div class="home_box_details about_box">
						<p class="lines"><span>&nbsp;</span></p>
						<p>WE ARE THE<br><strong>LARGEST DISTRIBUTORS</strong><br>OF PAPER AND PAPER BOARD<br>IN THE MIDDLE EAST</p>
						<p class="lines"><span>&nbsp;</span></p>
						<p style="margin-top:30px;">Know More About Us</p>
					</div>
					<img src="images/home/04-about.jpg" class="background">
					<a href="profile.php"><span>CLICK HERE</span></a>
				</div>
			</div>
			<div  class="col-md-4">
				<div class="home_box full_height">
					<div class="home_box_details agents_box">
						<p class="lines"><span>&nbsp;</span></p>
						<p>AUTHORIZED<br>AGENTS FOR</p>
						<p class="lines"><span>&nbsp;</span></p>
						<p><br><img src="images/about-logos.png"></p>
					</div>
					<img src="images/home/05-agents-for.jpg" class="background">
					<a href="agents-for.php"><span>CLICK HERE</span></a>
				</div>
			</div>
		</div>
	</div>

	</div> <!-- /container -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
