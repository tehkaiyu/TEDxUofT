<?php

$EmailFrom = "Contact_us@TEDxUofT.com";
$EmailTo = "applications@TEDxUofT.com";
$Subject = "Vistor Contact through website";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= " \n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= " \n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= " \n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
?>