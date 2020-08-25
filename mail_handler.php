<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name'] && isset($_POST['email'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];

	require_once "PHPMailer/PHPMailer.php";
	require_once "PHPMailer/SMTP.php";
	require_once "PHPMailer/Exception.php";

	$mail= new PHPMailer();

	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username="sudheer.madisetty111@gmail.com";
	$mail->Password="Dad1234@";
	$mail->Port=465;
	$mail->SMTPSecure="ssl";


	//email setting
	$mail->isHTML(true);
	$mail->setFrom($email,$name);
	$mail->addAddress("sudheer.madisetty111@gmail.com");
	$mail->Subject = ("$email ($subject");
	$mail->Body=$body;

	if($mail->send()){
		$status="success";
		$response="Email is sent Successfully!";
	}
	else
	{
		$status="failed";
		$response= "Something went wrong!: <br>". $mail->ErrorInfo;
	}
	exit(json_encode(array("status" => $status, "response"=> $response)));
}

?>