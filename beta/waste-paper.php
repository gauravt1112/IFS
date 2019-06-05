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
			</div>	
		</div>
	
	</div>

		<div class="row"><p class="seperator">&nbsp;</p></div>

<!-- 		<div class="row">
			<p class="tabs">
				<a href="javascript:void(0);">ITC LIMITED</a>&nbsp;&nbsp;
				<a href="javascript:void(0);"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);">GAYATRISHAKTI PAPER & BOARDS LIMITED</a>
			</p>
		</div> -->

	<div class="container" style="position:relative">
		<div class="row">
			<p class="tabs">
				<a href="javascript:void(0);" class="current" rel="middle_east">MIDDLE EAST</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="europe">EUROPE</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="usa">USA</a>
			</p>
		</div>


		<div class="row" style="min-height:70px">

			<div class="hidden" id="middle_east_data" style="display:block">

				<div class="waste-paper-column middle_east_colmn">
					<p><a href="waste-paper-bbc.php"><img src="images/address_icon.png">&nbsp;BBC</a></p>
					<p><a href="waste-paper-magazines-kuwait.php"><img src="images/address_icon.png">&nbsp;Magazines Kuwait</a></p>
				</div>
				<div class="waste-paper-column middle_east_colmn">
					<p><a href="waste-paper-milk-cartons.php"><img src="images/address_icon.png">&nbsp;Milk Cartons</a></p>
					<p><a href="waste-paper-occ.php"><img src="images/address_icon.png">&nbsp;OCC</a></p>
				</div>
				<div class="waste-paper-column middle_east_colmn">
					<p><a href="waste-paper-poc-kuwait.php"><img src="images/address_icon.png">&nbsp;POC Kuwait (Paper Link Plant)</a></p>
					<p><a href="waste-paper-scanboard-uae.php"><img src="images/address_icon.png">&nbsp;Scanboard UAE</a></p>
				</div>
				<div class="waste-paper-column middle_east_colmn" style="margin-right:0px;">
					<p><a href="waste-paper-swl.php"><img src="images/address_icon.png">&nbsp;SWL</a></p>
					<p><a href="waste-paper-yemen-ncc.php"><img src="images/address_icon.png">&nbsp;Yemen NCC</a></p>
				</div>
			</div>

			<div class="hidden" id="europe_data">
				<div class="waste-paper-column europe_colmn">
					<p><a href="waste-paper-european-grades-biscuit-kraft-offer.php"><img src="images/address_icon.png">&nbsp;Biscuit Kraft Offer</a></p>
					<p><a href="waste-paper-european-grades-cyprus-super-mix.php"><img src="images/address_icon.png">&nbsp;Cyprus Super Mix</a></p>
					<p><a href="waste-paper-european-grades-foil-scan-board.php"><img src="images/address_icon.png">&nbsp;Foil Scan Board</a></p>
				</div>
				<div class="waste-paper-column europe_colmn">
					<p><a href="waste-paper-european-grades-kcb.php"><img src="images/address_icon.png">&nbsp;KCB</a></p>
					<p><a href="waste-paper-european-grades-kraft.php"><img src="images/address_icon.png">&nbsp;KRAFT</a></p>
					<p><a href="waste-paper-european-grades-poly-cups.php"><img src="images/address_icon.png">&nbsp;Poly Cups</a></p>
				</div>
				<div class="waste-paper-column europe_colmn" style="margin-right:0px;">
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Shredded Books - UK</a></p>
					<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;UK Mixed Waste</a></p>
					<p><a href="waste-paper-european-grades-woodfree-plates-ex-italy.php"><img src="images/address_icon.png">&nbsp;Woodfree Plates Ex. Italy</a></p>
				</div>
			</div>

			<div class="hidden" id="usa_data">
				<div class="waste-paper-column usa_colmn">
					<p><a href="waste-paper-usa-grades-dsocc.php"><img src="images/address_icon.png">&nbsp;DSOCC # 12</a></p>
					<p><a href="waste-paper-usa-grades-foil-kcb+bbc+sbs.php"><img src="images/address_icon.png">&nbsp;Foil KCB + BBC + SBS</a></p>
				</div>
				<div class="waste-paper-column usa_colmn">
					<p><a href="waste-paper-usa-grades-ifp-kcb.php"><img src="images/address_icon.png">&nbsp;IFP KCB</a></p>
					<p><a href="waste-paper-usa-grades-ndlkc.php"><img src="images/address_icon.png">&nbsp;NDLKC</a></p>
				</div>
				<div class="waste-paper-column usa_colmn" style="margin-right:0px;">
					<p><a href="waste-paper-usa-grades-poly-cups.php"><img src="images/address_icon.png">&nbsp;Poly Cups</a></p>
					<p><a href="waste-paper-usa-grades-premium-dsocc-shoprite-quality.php"><img src="images/address_icon.png">&nbsp;Premium DSOCC Shoprite Quality</a></p>
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
