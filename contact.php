<?php 
	
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email_customer = $_POST['email'];
	$address = $_POST['address'];
	$massage = $_POST['massage'];
	$ip = getenv('HTTP_CLIENT_IP')?:
    getenv('HTTP_X_FORWARDED_FOR')?:
    getenv('HTTP_X_FORWARDED')?:
    getenv('HTTP_FORWARDED_FOR')?:
    getenv('HTTP_FORWARDED')?:
    getenv('REMOTE_ADDR');
	$date= date("Y-m-d h:i:sa");

	$email_from = 'tutulvpn@gmail.com';
	
	$email_subject = "New Form Submission from TutulPortal HTML Theme";

	$email_body = "User's Name: $name.\n".
					"User's Mobile: $mobile.\n".
						"User's Email: $email_customer.\n".
							"Address: $address.\n".
								"Massage: $massage.\n".
									"IP: $ip.\n".
										"Time & Date: $date.\n";

	$to = 'tutulvpn3@gmail.com';

	$headers = "From: $email_from \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("location: thank-you.html");
?>