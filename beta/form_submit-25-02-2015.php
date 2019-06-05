<?php

if(isset($_POST) && !empty($_POST)) {
	$command = $_POST['command'];
	switch($command) {
		case 'product_inquiry_form' :

			$fullname = $_POST['fullname'];
			$email = $_POST['emailId'];
			$name_of_organisation = $_POST['name_of_organisation'];
			$mobile = $_POST['mobile'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$telephone_code = $_POST['telephone_code'];
			$telephone_number = $_POST['telephone_number'];
			$fax_code = $_POST['fax_code'];
			$fax_number = $_POST['fax_number'];
			$pin_code = $_POST['pin_code'];
			$products = $_POST['products'];
			$state = $_POST['state'];
			$country = $_POST['country'];
			$remarks = $_POST['remarks'];

			$to = "doosa.sateesh@gmail.com";

			$subject = "Paper Link International Limited - Enquiry Form Details";
			$message = "Paper Link International Limited - Enquiry Form Details\r\n". "\n"
			 ." Full Name : ".$fullname. "\n"
			 ." Email : ".$email. "\n"
			 ." Name Of Organisation : ".$name_of_organisation. "\n"
			 ." Mobile : ".$mobile. "\n"
			 ." Address : ".$address. "\n"
			 ." City : ".$city. "\n"
			 ." Telephone : ".$telephone_code." ".$telephone_number. "\n"
			 ." Telephone : ".$fax_code." ".$fax_number. "\n"
			 ." Pin Code : ".$pin_code. "\n"
			 ." Products : ".$products. "\n"
			 ." State : ".$state. "\n"
			 ." Country : ".$country. "\n"
			 ." Remarks : ".$remarks. "\n";

			$headers = "From: ". $email."\r\nReply-To: ". $email;

			if(mail($to, $subject, $message, $headers)) {
				$result = array('status'=>'success', 'message'=>"Thank you for getting in touch. We will revert within 24 hours.<br><br>Alternatively, you can also call us at +91 22 40020025 / 26 or e-mail <a href='mailto:frontdesk@colourcraftstudio.co.in' style='color:#000'>frontdesk@colourcraftstudio.co.in</a>");
				echo json_encode($result);
			} else {
				$result = array('status'=>'error', 'message'=>"<p align='center' class='error'><br /><br />Please try again!</p>");
				echo json_encode($result);
			}

	}

} else {
	echo "Sorry! Please try again!";
}

?>