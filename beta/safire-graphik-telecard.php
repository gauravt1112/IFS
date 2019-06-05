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
			<p class="title">Safire Graphik Telecard</p>
			<p class="images">
				<img src="images/products/safire-graphik-01.jpg">
			</p>
			<p>Safire Graphik Telecard</p>
			<p class="title">Features</p>
			<p>Specially developed for scratch card applications designed to run smoothly on high speed card maufacturing lines.</p>
			<p class="title">Uses</p>
			<p>Smart cards, scratch cards (where a code number is printed on the reverse and covered with foil or scratch off ink</p>
			<p><a href="pdf/safire-graphik-telecard.pdf" class="button" target="_blank">VIEW SPECIFICATION SHEETS</a></p>
		</div>


		<div class="row"><p class="seperator"><img src="images/seperator.png"></p></div>

	</div> <!-- /container -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
