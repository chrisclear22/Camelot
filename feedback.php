<?php 
$mailto = "chrisclear22@gmail.com";
$subject = "Inquiry";

$email = $_POST['Email'];
$name = $_POST['Name'];
$phone = $_POST['Phone'];
$comment = $_POST['inputMessage'];
$age = $_POST['Age'];
$children = $_POST['Children'];

$messageproper = 
"This message was sent from:\n" .
"Contact Form at Camelot Web Site\n" .
"------------------------------------------------------------\n" .
"Name of Sender: " . $name . "\n" .
"Email of Sender: " . $email . "\n" .
"Phone Number: " . $phone . "\n" .
"Number of Children: " . $children . "\n" .
"Age of Children: " . $age . "\n" .
"------------------------------------------------------------\n\n" .
" " . $comment . "  " .
"\n\n------------------------------------------------------------\n" ;
  
  mail($mailto, $subject, $messageproper, "From: " . $name . " <" . $email . ">" );
  header("Location: index.html"); 

?>