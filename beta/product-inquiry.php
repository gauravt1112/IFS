<?php
  $current = "product-inquiry";
  $current2 = "product-inquiry";
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
		<div class="product_inquiry_banner">&nbsp;</div>
	</div>

	<div class="container" style="position:relative">

		<div class="row">
			<div  class="col-md-12">
				<ul id="breadcrumbs">
					<li>PRODUCT ENQUIRY</li>
					<li></li>
				</ul>
			</div>	
		</div>

	</div>
		
	<div class="row"><p class="seperator">&nbsp;</p></div>

	<div class="container" style="position:relative">

		<div class="row" id="product_inquiry">
			<form name="product_inquiry_form" id="product_inquiry_form" method="post" action="">

				<div class="col-md-6">
					<div class="fields">
						<input type="text" name="fullname" placeholder="Full Name" class="required" tabindex="1">
					</div>
					<div class="fields">
						<input type="text" name="name_of_organisation" placeholder="Name Of Organisation" tabindex="3">
					</div>
					<div class="fields">
						<input type="text" name="address" placeholder="Address" class="required" tabindex="5">
					</div>
					<div class="fields">
						<input type="text" name="city" placeholder="City" class="required" tabindex="8">
					</div>
					<div class="fields">
						<input type="text" name="pin_code" placeholder="Pin Code" class="number" tabindex="11">
					</div>
					<div class="fields">
						<input type="text" name="state" placeholder="State" class="required" tabindex="13">
					</div>
					<div class="fields">
						<?php include("countries.php"); ?>		                  
					</div>
				</div>

				<div class="col-md-6" id="pro_inq_right">
					<div class="fields">
						<input type="text" name="emailId" placeholder="Email" class="required email" tabindex="2">
					</div>
					<div class="fields">
						<input type="text" name="mobile" placeholder="Mobile" class="number" tabindex="4">
					</div>
					<div class="fields">
						<input type="text" placeholder="Telephone" disabled class="disabled">
						<input type="text" name="telephone_code" class="number code" tabindex="6">
						<input type="text" name="telephone_number" class="number numbers" tabindex="7">
					</div>
					<div class="fields">
						<input type="text" placeholder="Fax" disabled class="disabled">
						<input type="text" name="fax_code" class="number code" tabindex="9">
						<input type="text" name="fax_number" class="number numbers" tabindex="10">
					</div>
					<!-- <div class="fields">
						<select name="products" style="width:100%" class="required" tabindex="12">
							<option value="">Products</option>
							<option value="ABCD">ABCD</option>
							<option value="XYZ">XYZ</option>
						</select>
					</div> -->
					<div class="fields">
						<textarea name="remarks" placeholder="Enquiry" tabindex="15" style="height:160px"></textarea>
					</div>
				</div>

				<div class="col-md-12" align="center">
					<input type="submit" value="SUBMIT" tabindex="16">
				</div>

			</form>
		</div>


	</div> <!-- /container -->

		<!-- <div class="row"><p class="seperator">&nbsp;</p></div> -->
</div>

<?php include('includes/footer.php');?>
<?php include('includes/script-files.php');?>
</body>
</html>
