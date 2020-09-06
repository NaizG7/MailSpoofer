    <?php

	//HTML Email Spoofer By NaizG 7
	
    $to = "Victim@Email.com";
    
    $subject = "Email Subject";
    $message = file_get_contents("index.html");
    
    $from = "From Name From@Email.com";
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From:" . $from;
    
    mail($to,$subject,$message,$headers);
	
	echo '<p style="text-align: center;"> <font size="4"> <b>EMAIL SENT</b> </font> <br> <b> <font size="1" face="comic sans ms, sans-serif" color="#444444">HTML Email Spoofer by Naizg7</font> </b> </p>';
	
    ?>
