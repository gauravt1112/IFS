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
			<p class="title" align="center" style="margin-bottom:26px">SPECIALTY PAPERS</p>
			<p class="tabs">
				<a href="javascript:void(0);" rel="cigarette-tissue-components" class="current">CIGARETTE TISSUE & COMPONENTS</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="fine-printing">FINE PRINTING</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="packaging">PACKAGING</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="decor">DECOR</a>&nbsp;&nbsp;
				<a href="javascript:void(0);" class="seperator_tabs"><img src="images/address_icon.png"></a>&nbsp;&nbsp;
				<a href="javascript:void(0);" rel="niche-products">NICHE PRODUCTS</a>
			</p>
		</div>

		<div class="row">

			<div class="hidden" id="cigarette-tissue-components_data" style="display:block">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="cigarette-tissues.php"><img src="images/address_icon.png">&nbsp;Cigarette Tissues</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Cork Tipping Base & White Tipping Base</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Plug Wrap Tissues</a></p>
					</div>
				</div>
			</div>

			<div class="hidden" id="fine-printing_data">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="light-weight-communication.php"><img src="images/address_icon.png">&nbsp;Light Weight Communication</a></p>
						<p><a href="alfa-plus.php"><img src="images/address_icon.png">&nbsp;Alfa Plus</a></p>
						<p><a href="alfa-zap.php"><img src="images/address_icon.png">&nbsp;Alfa Zap</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="hi-brite-paper.php"><img src="images/address_icon.png">&nbsp;Hi Brite Paper</a></p>
						<p><a href="hi-zine.php"><img src="images/address_icon.png">&nbsp;Hi Zine</a></p>
						<p><a href="perma-white.php"><img src="images/address_icon.png">&nbsp;Perma White</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="paperkraft.php"><img src="images/address_icon.png">&nbsp;Paperkraft</a></p>
						<p><a href="thin-printing.php"><img src="images/address_icon.png">&nbsp;Thin Printing</a></p>
						<p><a href="pharma-printing.php"><img src="images/address_icon.png">&nbsp;Pharma Printing</a></p>
					</div>
				</div>
			</div>

			<div class="hidden" id="packaging_data">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="medical-grade.php"><img src="images/address_icon.png">&nbsp;Medical Grade</a></p>
						<p><a href="mg-poster.php"><img src="images/address_icon.png">&nbsp;MG Poster</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="acid-free-tissue.php"><img src="images/address_icon.png">&nbsp;Acid Free Tissue</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="anti-rust-tissue.php"><img src="images/address_icon.png">&nbsp;Anti Rust Tissue</a></p>
					</div>
				</div>
			</div>

			<div class="hidden" id="decor_data">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Surfacing & Print Base Papers</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Overlay Tissues</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Barrier Paper</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;White Print Base & Colour Print Base Papers</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;White Surfacing & Colour Surfacing Papers</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Absorbent Kraft</a></p>
					</div>
				</div>
			</div>

			<div class="hidden" id="niche-products_data">
				<div class="waste-paper-details">
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Electrical Insulating Paper</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;High Strength Match Tissue</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Kraft Interleaving Paper</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Automotive Filter Base</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Fire Fuse Tissue</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;Carbonising Tissue Base</a></p>
					</div>
					<div class="col-md-4 product_listings">
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;EGIP UBIL</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;UBIL Power</a></p>
						<p><a href="javascript:void(0);"><img src="images/address_icon.png">&nbsp;UBIL MW</a></p>
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
