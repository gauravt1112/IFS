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
		<div class="waste_paper_banner">&nbsp;</div>
	</div>

	<div class="container" style="position:relative">
	
		<div class="row">
			<div  class="col-md-12">
				<ul id="breadcrumbs">
					<li>PRODUCTS</li>
					<li class="arrow"><img src="images/arrow.png"></li>
					<li>WASTE PAPER</li>
				</ul>
				<a href="waste-paper.php" class="go_back">GO BACK</a>
			</div>	
		</div>
	</div>

	<div class="row"><p class="seperator">&nbsp;</p></div>

	<div class="container" style="position:relative">

		<div class="row">
			<p class="title" align="center" style="margin-bottom:26px">SHRDEDDED BOOKS UK</p>
		</div>

		<div class="row">
			<div class="hidden" id="algeria_data" style="display:block">
				<div class="waste-paper-details">
				</div>
			</div>
		</div>


	</div> <!-- /container -->

	<!-- <div class="row"><p class="seperator">&nbsp;</p></div> -->

</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
