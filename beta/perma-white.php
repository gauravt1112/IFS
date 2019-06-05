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
			<p class="title">Perma White</p>
			<p class="images">
				<img src="images/products/perma-white-01.jpg">
			</p>
			<p>A paper developed for archival needs. Perma White has been designed for permanence and durability with best in class opacity, formation, smoothness and finish.</p>
			<p class="title">Variants</p>
			<p>Range :<br> 70 - 120 gsm</p>
			<p class="title">Features</p>
			<p>Permanence<br>
			Durability<br>
			Good Formation<br>
			High Smoothness
			</p>
			<p class="title">Uses</p>
			<p>Legal Documents / Certificates<br>
			Dictionaries & Reference Manuals<br>
			Encyclopedias & yearbooks<br>
			Corporate & Annual Reports<br>
			Religious Books<br>
			Commemorative Books
			</p>
		</div>


		<div class="row"><p class="seperator"><img src="images/seperator.png"></p></div>

	</div> <!-- /container -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
