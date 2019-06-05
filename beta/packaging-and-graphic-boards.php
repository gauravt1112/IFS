<?php
  $current = "products";
  $current2 = "waste-paper";
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.php');?>
</head>
<body>

<?php include('includes/header.php');?>

<div id="content" class="inner_content">

	<div id="banner">
		<div class="products_banner">&nbsp;</div>
	</div>

	<div class="container" style="position:relative">
	
		<div class="row">
			<div  class="col-md-12">
				<ul id="breadcrumbs">
					<li>PRODUCTS</li>
					<li class="arrow"><img src="images/arrow.png"></li>
					<li>FINISH PAPER</li>
				</ul>
				<a href="finish-paper.php" class="go_back">GO BACK</a>
			</div>	
		</div>

		<div class="row"><p class="seperator"><img src="images/seperator.png"></p></div>

		<div class="row">
			<p class="title" align="center" style="margin-bottom:26px">PACKAGING & GRAPHIC BOARDS</p>
			<p class="tabs">
				<a href="javascript:void(0);" rel="coated_vb" class="current">COATED VIRGIN BOARDS</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="coated_rb">COATED RECYCLED BOARD</a>
			</p>
		</div>

		<div class="row">

			<div class="hidden" id="coated_vb_data" style="display:block">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="safire-graphik.php"><img src="images/address_icon.png">&nbsp;Safire Graphik</a></p>
						<p><a href="cyber-cypak.php"><img src="images/address_icon.png">&nbsp;Cyber Cypak</a></p>
						<p><a href="cyberxl-pac.php"><img src="images/address_icon.png">&nbsp;CyberXL Pac</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="cyber-premium.php"><img src="images/address_icon.png">&nbsp;Cyber Premium</a></p>
						<p><a href="cyber-propac.php"><img src="images/address_icon.png">&nbsp;Cyber Propac</a></p>
						<p><a href="safire-graphik-telecard.php"><img src="images/address_icon.png">&nbsp;Safire Graphik Telecard</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="carte-lumina.php"><img src="images/address_icon.png">&nbsp;Carte Lumina</a></p>
						<p><a href="pearl-xl-pac.php"><img src="images/address_icon.png">&nbsp;Pearl XL Pac</a></p>
						<p><a href="opus-card.php"><img src="images/address_icon.png">&nbsp;Opus Card</a></p>
					</div>
				</div>
			</div>

			<div class="hidden" id="coated_rb_data">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="eco-natura.php"><img src="images/address_icon.png">&nbsp;Eco Natura</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="eco-blanca.php"><img src="images/address_icon.png">&nbsp;Eco Blanca</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="neowhite-bliss.php"><img src="images/address_icon.png">&nbsp;NeoWhite Bliss</a></p>
					</div>
				</div>
			</div>

		</div>


		<div class="row"><p class="seperator"><img src="images/seperator.png"></p></div>

	</div> <!-- /container -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
