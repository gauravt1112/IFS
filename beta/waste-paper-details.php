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
				<a href="finish-paper.php" class="go_back">GO BACK</a>
			</div>	
		</div>

		<div class="row"><p class="seperator"><img src="images/seperator.png"></p></div>

		<div class="row">
			<p class="title" align="center" style="margin-bottom:26px">BBC</p>
			<p class="tabs">
				<a href="javascript:void(0);" rel="algeria" class="current">ALGERIA</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="kuwait">KUWAIT</a>
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="saudi">SAUDI</a>
			</p>
		</div>

		<div class="row">
			<div class="hidden" id="algeria_data" style="display:block">
				<div class="waste-paper-details">
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
				</div>
			</div>
			<div class="hidden" id="kuwait_data">
				<div class="waste-paper-details">
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
				</div>
			</div>
			<div class="hidden" id="saudi_data">
				<div class="waste-paper-details">
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
					<div class="column_wastepaper"><img src="images/bbc01.jpg"></div>
				</div>
			</div>
		</div>


		<!-- <div class="row"><p class="seperator"><img src="images/seperator.png"></p></div> -->

	</div> <!-- /container -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
