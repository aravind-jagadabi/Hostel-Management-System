<?php
error_reporting (E_ALL ^ E_NOTICE);
include 'profile.php';
$StudentName = $_POST['StudentName'];
$FatherName = $_POST['FatherName'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$Phnumber = $_POST['Phnumber'];
$mobile=$_SESSION["mobile"];

$message= "Dear Owner".$StudentName."\n".$FatherName."\n".$gender."\n".$address."\n".$Phnumber;

$to_email=$_SESSION["to_email"];
$subject = "New Student";
$body="";
$body.="{$StudentName}\n";
$body.="{$FatherName}\n";
$body.="{$gender}\n" ;
$body.="{$address}\n";
$body.="{$Phnumber}\n";
$headers = "From:informhostel@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Applied Successfully ";
} else {
    echo "Email sending failed...";
}




?>
