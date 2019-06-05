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
		<div class="finish_paper_banner">&nbsp;</div>
	</div>

	<div class="container" style="position:relative">

		<div class="row">
			<div  class="col-md-12">
				<ul id="breadcrumbs">
					<li>PRODUCTS</li>
					<li class="arrow"><img src="images/arrow.png"></li>
					<li>FINISH PAPER</li>
				</ul>
			</div>	
		</div>
	
	</div>

	<div class="row"><p class="seperator">&nbsp;</p></div>

	<div class="container" style="position:relative">

		<div class="row">
			<p class="tabs">
				<a href="javascript:void(0);" class="current" rel="paper_paper_board">PAPER & PAPER BOARD</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="kraft_paper">KRAFT PAPER</a>
			</p>
		</div>

		<div class="row" style="min-height:300px">
			<div class="hidden" id="paper_paper_board_data" style="display: block">
				<div class="paper_board_column">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Folding Box Board / Ivory Board (FBB)</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Solid Bleached Sulphate (SBS)</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Frozen Food Board Poly Coated - 1PE & 2PE</a></p>
				</div>
				<div class="paper_board_column">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Cup Stock Board Poly Coated - 1PE & 2PE</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Art Paper & Board - Gloss & Matt</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Cigarette Board</a></p>
				</div>
				<div class="paper_board_column" style="margin-right:0px">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Recycled Duplex Board</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Carrier Board Kraft Back</a></p>
				</div>
			</div>

			<div class="hidden" id="kraft_paper_data">
				<div class="kraft_paper_colmn">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Virgin Kraft Liner Board</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;White Top Kraft Liner</a></p>
				</div>
				<div class="kraft_paper_colmn">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;White Top Liner</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Fluting</a></p>
				</div>
				<div class="kraft_paper_colmn">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Test Liner</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Sack Kraft</a></p>
				</div>
				<div class="kraft_paper_colmn" style="margin-right:0px">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Bleached & Unbleached Kraft</a></p>
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
