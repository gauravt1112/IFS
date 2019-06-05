<?php

if(isset($_POST) && !empty($_POST)) {
	$command = $_POST['command'];
	switch($command) {
		case 'contact_form' :
			$name = $_POST['name'];
			$email = $_POST['email'];
			$contact = $_POST['contact'];

		    //$to = "krish@togglehead.in";
			$to = "kaustubh@togglehead.in";
			//$to = "vaibhav@indianfs.in";
		    $to .= ",vaibhav.gulati@yahoo.com";
		  //$to .= ",sajid@indianfs.in";


			$subject = "Email From IFS Website";
			$message = "IFS League Registration Form Details:\r\n". "\n"
			 ." Name : ".$name. "\n"
			 ."\r\n E-mail : ".$email. "\n"
			 ."\r\n Contact Number : ".$contact. "\n";

			$from = "info@indianfs.in";
			$headers = "From: ". $from."\r\nReply-To: ". $from;

			if(mail($to, $subject, $message, $headers)) {
				$result = array('status'=>'success', 'message'=>"<div style='float:left; width:100%;'><p align='center' style='margin-top: 40px;color: white; line-height:20px;'><br />Thank you for your enquiry.<br>You will be hearing from us shortly.<br /><br /></p></div>");
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