<?php
$tomail="vivekchaudhary887735@gmail.com";
$subject="Password Reset";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: '.$tomail."\r\n";

$message="This is Sample Mail.";
if(mail($tomail,$subject,$message,$headers))
{
    echo "Mail Sent";
}
else{
    echo "Mail Not Sent";
}
?>