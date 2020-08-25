<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$txt=$_POST['message'];

		$to='sudheer.madisetty111@gmail.com'; 
		$subject='Portfolio Reply ';
		$message="Name :".$name."\n"."Phone :".$mobile."\n"."Wrote the following :"."\n\n".$txt;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>