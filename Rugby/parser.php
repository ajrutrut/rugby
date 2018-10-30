<!DOCTYPE HTML>
<html>
<head></head>
<body>
	<?php echo "hello world"; ?>
	<?php 
if(isset($_POST['f']) $$ isset($_POST['l']) $$ isset($_POST['e'])) {
	$f = $_POST['f'];
	$l = $_POST['l'];
	$e = $_POST['e'];
	$to = "ul3wse@gmail.com";
	$from = $e;
	$subject = "contact form"
	$message = "<b>Name:</b>".$f."<br> <b>Last Name:</b>".$l."<br> <b>Email:</b>".$e;
	$headers ="from:$from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset = iso-8859-1\n"

		if(mail($to, $subject, $message, $headers)) {
			echo "success";
		} else {
			echo "The server failed to send the message. Please try again.";
		}

} 
?>
</body>
</html>