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
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/algeria01.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/algeria02.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/algeria03.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/algeria04.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/algeria05.jpg"></div>
				</div>
			</div>
			<div class="hidden" id="kuwait_data">
				<div class="waste-paper-details">
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait01.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait02.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait03.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait04.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait05.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait06.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait07.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait08.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait09.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait10.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait11.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait12.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait13.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait14.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/kuwait15.jpg"></div>
				</div>
			</div>
			<div class="hidden" id="saudi_data">
				<div class="waste-paper-details">
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/saudi01.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/saudi02.jpg"></div>
					<div class="column_wastepaper"><img src="images/waste-paper/middle-east/bbc/saudi03.jpg"></div>
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
