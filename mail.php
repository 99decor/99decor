<?php

//get data from form 

$name = $_POST['Name'];

$email= $_POST['Email'];

$number= $_POST['Number']

$message= $_POST['Message'];

$to = "m0n5t3rr.h4ck@gmail.com";

$subject = "Mail From 99 Decor";

$txt ="Name = ". $name . "\r\n Email = " . $email . " \r\nMobile Number = " . $Number . "  \r\n Message =" . $message  ;

$headers = "From: noreply@99decor.com" . "\r\n" .

"CC: ";

if($email!=NULL){

mail($to,$subject,$txt,$headers);

}

//redirect

header("Location:index.html");
?>

