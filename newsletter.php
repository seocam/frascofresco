<?php 
$to = 'chauhanjeet3@gmail.com'; // Put in your email address here
$subject  = "Thanks for subscribing to weight loss"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)

$email = stripslashes($_REQUEST['email']); // sender's email


// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!

$msg .= "E-mail: " .$email. "\r\n";  // add sender's email to the message

$msg .= "\r\n\n"; 

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
		header('Location: index.html ');	
} else {
	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not send
}

?>