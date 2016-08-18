<?php

	// Database Connection
	include 'db_conn.php';
	
	// Database calls (insert2db, login)
	include 'database_calls.php';


	// get button
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['report'])) {
		
		function admin_confirmation_mail( $email, $firstName ){

		// Site URL
		$site_url = $GLOBALS['site_url'];
		$site_url_abs = $GLOBALS['site_url_abs'];

		// the message

		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: admin@micrasoft.com' . "\r\n";
				

		/// $email, $admin_decision
		$msg = "Hello Adminitrator,<br>A student has been reported. Click link <a href=\"$site_url_abs/admin.php?email=$email&admin_decision=Approved\">
		Log in </a> to view this."		
		


		// send email
		mail('niniak235@gmail.com',"Student Reported",$msg,$headers);

		ini_set("SMTP","smtp.gmail.com");
		ini_set("smtp_port","465");
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['report'])) {

		function admin_confirmation_mail( $msg, $name ){

		$msg = 

			// send email
		mail('niniak235@gmail.com',"Student Request",$msg,$headers);

		ini_set("SMTP","smtp.gmail.com");
		ini_set("smtp_port","465");

	?>