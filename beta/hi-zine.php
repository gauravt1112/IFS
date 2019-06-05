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
			<p class="title">Hi Zine</p>
			<p class="images">
				<img src="images/products/hi-zine-01.jpg">
			</p>
			<p>High Bulk uncoated paper, combined with its smoothness gives an improved writing and printing experience.</p>
			<p class="title">Variants</p>
			<p>Range :<br> 60 - 120 GSM</p>
			<p class="title">Features</p>
			<p>High Bulk<br>
			Great printing performance
			</p>
			<p class="title">Uses</p>
			<p>Stationery<br>
			Publishing<br>
			Color Printing
			</p>
		</div>


		<div class="row"><p class="seperator"><img src="images/seperator.png"></p></div>

	</div> <!-- /container -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
