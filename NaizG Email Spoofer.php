<?php
$to = "neekzelol@gmail.com";

// subject
$subject = "Ingresos a clases no deseados";

// message
$message = file_get_contents("index.html");

// from
$from = "Monica Castillo moalca@gmail.com";

// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "From:" . $from;

// Mail it
mail($to,$subject,$message,$headers);

echo "Mail Sent.";
?>