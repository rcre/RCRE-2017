<?php
	$first_name=stripslashes($_POST["first_name"]);
	$last_name=stripslashes($_POST["last_name"]);
	$phone=stripslashes($_POST["phone"]);
	$email=stripslashes($_POST["email"]);
	$message=stripslashes($_POST["description"]);

	$secret="6LcbpyQUAAAAAJIV-lpFzJc0EddNPJJUcNWzQn9b";
	$response=$_POST["captcha"];

	$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
	$captcha_success=json_decode($verify);
	
	if ($captcha_success->success==false) {
	  //This user was not verified by recaptcha.
	
	} else if ($captcha_success->success==true) {
	  //This user is verified by recaptcha
	}
?>