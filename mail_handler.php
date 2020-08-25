<?php
	include "bootstrap.php";

	 //variable delaration
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$txt=$_POST['message'];

		//check inout field are not empty!
        if(empty($name) || empty($email) || empty($mobile || empty($txt)))
        {
        	echo "<div class='alert alert-danger'>Please fill all input fields </div>";
        }
        else
        {
        	mail("sudheer.madisetty111@gmail.com","Portfolio",$txt,$mobile,"From: $name <$email>");
        	echo "<div class='alert alert-success'>Your message has been sent successfully :)</div>";
        }
		

?>