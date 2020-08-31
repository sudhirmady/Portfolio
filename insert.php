<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['message'];

        $to='sudheer.madisetty111@gmail.com'; 
        $subject='Sudhir Portfolio';
        $message="Name :" .$name. "\n". "Phone :" .$phone. "\n" . "Wrote the following :" . "\n\n" . $msg;
        $headers="From: ".$email;

        mail($to, $subject, $message, $headers);
        header('Location: index.php?mailsend');        
    }
?>