<?php

$EmailFrom = "contact@jandro.com";
$EmailTo = "amartinez402@gmail.com";
$Subject = "Portfolio Contact Form";
$firstName = Trim(stripslashes($_POST['firstName'])); 
$lastName = Trim(stripslashes($_POST['lastName'])); 
$email = Trim(stripslashes($_POST['email'])); 
$comment = Trim(stripslashes($_POST['comment'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "firstName: ";
$Body .= $firstName;
$Body .= "\n";
$Body .= "lastName: ";
$Body .= $lastName;
$Body .= "\n";
$Body .= "email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "comment: ";
$Body .= $comment;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>