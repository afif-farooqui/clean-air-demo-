<?php 

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$sendersMail = $_POST['email']
	$subject = "New Enquiry";
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	
	if(empty($name) || empty($sendersMail) || empty($phone) || empty($message)){
		header("location:contact.php?error");
	}else{
		header("location:contact.php:success")
	}
	
	
	
	$mailTo = "bashir.bns@rediffmail.com";
	$mailFrom = "";
	$headers = "From: ".$mailFrom;
	$txt = "You have an email from ".$name.".\n\n Senders Phone number: ".$phone."\n\n Senders Message: ".$message;
	
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsend");
}

?>