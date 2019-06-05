<?php
  $current = "products";
  $current2 = "finish-paper";
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
			<p class="title">Cyber Premium</p>
			<p class="images">
				<img src="images/products/cyber-premium-01.jpg">
			</p>
			<p>High Bulk coated folding box board.</p>
			<!--<p class="title">Variants</p>
			<p>For foil base For metallization<br/>Range : 200-240 gsm</p>-->
			<p class="title">Features</p>
			<p>High bulk<br>Food grade (meets FDA 176.170 & 176.180 requirements)</p>
			<p class="title">Uses</p>
			<p>Liquour Packaging</p>
			<p><a href="pdf/Cyber_Premium.pdf" class="button" target="_blank">VIEW SPECIFICATION SHEETS</a></p>
		</div>


		<div class="row"><p class="seperator"><img src="images/seperator.png"></p></div>

	</div> <!-- /container -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
