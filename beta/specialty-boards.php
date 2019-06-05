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
			<p class="title" align="center" style="margin-bottom:26px">SPECIALTY BOARDS</p>
			<p class="tabs">
				<a href="javascript:void(0);" rel="poly-coated" class="current">POLY COATED</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="graphic">GRAPHICS</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="others">OTHERS</a>
			</p>
		</div>

		<div class="row">

			<div class="hidden" id="poly-coated_data" style="display:block">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="indobev.php"><img src="images/address_icon.png">&nbsp;Indobev</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="indobarr.php"><img src="images/address_icon.png">&nbsp;Indobarr</a></p>
					</div>
				</div>
			</div>

			<div class="hidden" id="graphic_data">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="art-maestro-c2s.php"><img src="images/address_icon.png">&nbsp;Art Maestro (C2S)</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="carte-persona.php"><img src="images/address_icon.png">&nbsp;Carte Persona</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="digiart.php"><img src="images/address_icon.png">&nbsp;Digiart</a></p>
					</div>
				</div>
			</div>

			<div class="hidden" id="others_data">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="omega-series.php"><img src="images/address_icon.png">&nbsp;Omega Series</a></p>
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
