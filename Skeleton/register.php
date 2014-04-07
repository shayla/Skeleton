<?php

$EmailFrom = "Tristar Registration Request";
$EmailTo = "shaylabehringer@gmail.com";
$Subject = "Tristar Registration Request";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Company = Trim(stripslashes($_POST['Company']));
$Address = Trim(stripslashes($_POST['Address']));
$Contact = Trim(stripslashes($_POST['Contact']));
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
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "Contact: ";
$Body .= $Contact;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=registerthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>