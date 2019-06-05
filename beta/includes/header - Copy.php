<?php
    $active = "class=active";
?>
		<div id="header">
<div class="container">
	<div class="row">
			<div class="col-md-12">
				<a href="index.php"><img src="images/logo.png"></a>
				<ul id="menu">
					<li>
						<a href="javascript:void(0);" <?php if($current=="about") echo $active; ?>>ABOUT US</a>
						<ul>
							<li><a href="profile.php" <?php if($current2=="profile") echo $active; ?>>PROFILE</a></li>
							<li><a href="agents-for.php" <?php if($current2=="agents-for") echo $active; ?>>AGENTS FOR</a></li>
							<li><a href="our-indenting-agents.php" <?php if($current2=="our-indenting-agents") echo $active; ?>>OUR INDENTING AGENTS</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" <?php if($current=="products") echo $active; ?>>PRODUCTS</a>
						<ul>
							<li><a href="waste-paper.php" <?php if($current2=="waste-paper") echo $active; ?>>WASTE PAPER</a></li>
							<li><a href="finish-paper.php" <?php if($current2=="finish-paper") echo $active; ?>>FINISH PAPER</a></li>
						</ul>
					</li>
					<li>
						<a href="events.php" <?php if($current=="events-media") echo $active; ?>>EVENTS</a>
<!-- 						<ul>
							<li><a href="events.php" <?php if($current2=="events") echo $active; ?>>EVENTS</a></li>
							<li><a href="media.php" <?php if($current2=="media") echo $active; ?>>MEDIA</a></li>
						</ul> -->
					</li>
					<li><a href="product-inquiry.php" <?php if($current=="product-inquiry") echo $active; ?>>PRODUCT ENQUIRY</a></li>
					<li><a href="warehouse.php" <?php if($current=="warehouse") echo $active; ?>>WAREHOUSE</a></li>
					<li><a href="contact-us.php" <?php if($current=="contact-us") echo $active; ?>>CONTACT US</a></li>
				</ul>
			</div>
	</div>
</div>
		</div>