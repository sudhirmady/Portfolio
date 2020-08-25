<?php
	include "bootstrap.php";

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$txt=$_POST['message'];

		$to='sudheer.madisetty111@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h3 align='center' class='alert alert-success'>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h3>";
		}
		else{
			echo "<h3 align='center' class='alert alert-danger'>Something went wrong! </h3>";
		}
	}
?>