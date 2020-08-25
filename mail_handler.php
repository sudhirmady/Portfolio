<?php
	include "bootstrap.php";

	 //variable delaration
		$Name=$_REQUEST['name'];
		$Email=$_REQUEST['email'];
		$Mobile=$_REQUEST['mobile'];
		$txt=$_REQUEST['message'];

		//check inout field are not empty!
        if(empty($Name) || empty($Email) || empty($Mobile || empty($txt)))
        {
        	echo "<div class='alert alert-danger'>Please fill all input fields </div>";
        }
        else
        {
        	mail("sudheer.madisetty111@gmail.com","Portfolio",$txt,$Mobile,"From: $Name <$Email>");
        	
        	echo (header("Location:index.php");
        	 "<div class='alert alert-success'>Your message has been sent successfully :)</div>");
        }
		

?>