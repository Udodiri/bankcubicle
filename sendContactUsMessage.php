<?php
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) 
{
	//Validations
	$name = htmlentities($_POST['name']);
	$subject = htmlentities($_POST['subject']);
	$message = htmlentities($_POST['message']);
	$email = htmlentities($_POST['email']);
	//The below will return empty if email is not valid.... It will return the email if it is a valid email
	$checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
	//check if not empty
	if(!empty($checkEmail)) {
		//send the mail
		//Send a mail to this user
		
		/**
		$email_to = 'info@bankcubicle.com';
		$email_subject = "CONTACT FORM";
		if(!empty($subject)) {
			$email_subject = $subject;
		}
		
		$email_message = '
		<html>
			<head>
				<title>BANK CUBICLE</title>
			</head>
		
			<body>
				<div id="wrap" style="width:780px; margin:auto; min-height:200px;">
					<div style="padding:20px 0 10px 20px; background:#293949;"></div>
					
					<div id="content" style="dborder:1px solid #ed7d31; background:#f2f2f2; border-top:3px solid #1089af; min-height:200px; padding:10px 10px; dborder-top:none;">
        ';
		
		$email_message .= '
			<h3>MESSAGE FROM CONTACT US PAGE</h3>
				
			<br /><br />
			This message is coming from the contact page: 

			<br /><br />
			<p>Name:<strong>&nbsp;&nbsp;'.$name.'</strong></p>
			<p>Email:<strong>&nbsp;&nbsp;'.$email.'</strong></p>
			<p>Message:<strong>&nbsp;&nbsp;'.$message.'</strong></p>
			<br /><br />
		';
		
		$email_message .= '
				<br /><br />
						Warm regards,
						<br />
						<b>BANK CUBICLE</b>
						
						<br /><br />
					</div>
				</div>
			</body>
		</html>
		';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'To: WEBSITE CONTACT FORM <info@bankcubicle.com>' . "\r\n";
		$headers .= 'From: WEBSITE CONTACT FORM <info@bankcubicle.com>' . "\r\n";
		mail($email_to, $email_subject, $email_message, $headers);
		**/
		
		//SEND USING SMTP
		include('Mail.php'); // includes the PEAR Mail class, already on your server.
    
		$username = 'info@bankcubicle.com'; // your email address
		$password = 'P@ssw0rd@123'; // your email address password
		
		$from = $email;
		$to = "info@bankcubicle.com";
		$subject = "Contact Form";
		$body = "MESSAGE FROM CONTACT US PAGE \n\n";
		$body .= "
			Name: ".$name." \n
			Email: ".$email." \n
			Message: ".$message;
		
		$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
		$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
		$mail = $smtp->send($to, $headers, $body); // sending the email
 
 
		// Mail it
		if($mail) 
		{	
			?>
			<div class="nicTextAlert2" style="margin-top:10px;">
				<strong>Success!</strong> You've successfully submitted your message to us. We shall get back to you soon. Thank you!        	</div><!-- alert alert-info -->
			<?php
		}
		else {
			?>
			<div class="nicTextAlert" style="margin-top:10px;">
				<strong>Error!</strong> An unknown error occured while trying to process the form. Please retry!
            </div><!-- alert alert-info -->
			<?php
		}
	}
	else {
		//Invalid email	
		?>
        <div class="nicTextAlert" style="margin-top:10px;">
            <strong>Error!</strong> Kindly fill all fields before submitting the form.
        </div><!-- alert alert-info -->
        <?php
	}
}
else {
	?>
	<div class="nicTextAlert" style="margin-top:10px;">
		<strong>Error!</strong> Kindly fill all fields before submitting the form.
	</div><!-- alert alert-info -->
	<?php
}
?>