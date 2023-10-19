<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$idea_domain = $_POST['domaim'];
$message = $_POST['message'];

$email_from = 'https://github.com/YUGESHKARAN/club';

$email_subject = 'New Form Submision';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Domain: $idea_doamin.\n". 
              "User Message: $message.\n";


$to = 'yugeshkaran01@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Loation: contact.html")

?>
