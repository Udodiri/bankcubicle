<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

	<?php
    include('Mail.php'); // includes the PEAR Mail class, already on your server.
    
    $username = 'info@bankcubicle.com'; // your email address
    $password = 'P@ssw0rd@123'; // your email address password
    
    $from = "yesmoses400@gmail.com";
    $to = "info@bankcubicle.com";
    $subject = "This is a sample smtp script";
    $body= "Welcome to QServers.net Secure Mailing Platform.";
    
    $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
    $smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
    $mail = $smtp->send($to, $headers, $body); // sending the email
    
    if (PEAR::isError($mail)){
    echo("<p>" . $mail->getMessage() . "</p>");
    }
    else {
    echo("<p>Message successfully sent!</p>");
    // header("Location: http://www.example.com/"); // you can redirect page on successful submission.
    }
    ?>
    
</body>
</html>