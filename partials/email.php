<?php
	// Check to see if Submit has been pressed and if all fields have been filled
	if(isset($_POST["f_submit"]) AND
			 $_POST["name"] != "" AND
			 $_POST["email"] != "") {

		// Everything is ok so send email
		sendMail($_POST["name"], $_POST["email"]);
	}

//Send mail function
	function sendMail($name, $email) {
		$to = $email;
		$subject = "Welcome to Make Your Vote Up $name";

		$message = "<html> <head> <title>HTML email</title> </head>\n";

		$message .= "<body style='background-color: #2B2B2B; padding: 25px;'>\n";
		$message .= "<h2 style='text-align:center; color: #BC1EBC;'>Hello $name</h2>\n";
		$message .= "<p style='text-align:center; color: white;'>Thank you for signing up for the Make Your Vote Up Newsletter.</p>\n";
		$message .= "<p style='text-align:center; color: white;'>Expect exciting political information each week.</p>\n";
		$message .= "<p style='text-align:center; color: white;'>We look forward to seeing you soon!</p>\n";

		$message .= "<img src='http://michaelside.com/img/email-logo.png' alt='MYVU Logo' style='display: block; width: 150px; margin: 0 auto;'>\n";

		$message .= "</body></html>";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8\r\n";

		$headers .= "From: michaelside0@gmail.com\r\n";

		$didItSend = mail($to, $subject, $message, $headers);	// Send email

		if($didItSend == true) {

			 echo "Thank you for subscribing";
		 } else {

			 echo "Sorry, there was a problem. Failed to send request.";
		 }

	}
?>
