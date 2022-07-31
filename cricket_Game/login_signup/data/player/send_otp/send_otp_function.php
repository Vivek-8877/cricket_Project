<?php
function sendOTP($tomail,$OTP) {
    $subject ="One Time Password";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: '.$tomail."\r\n";
    $message="Your One Time Password is :- ".$OTP.".";
    if(mail($tomail,$subject,$message,$headers)) {
        return true;
    } else {
        return false;
    }
}
?>