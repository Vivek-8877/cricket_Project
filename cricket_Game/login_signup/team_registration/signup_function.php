<?php
// print_r($_POST);
include 'config.php';
if(isset($_POST['mobile_number']) && !isset($_POST['send_otp'])) {
    $mob = $_POST['mobile_number'];
    $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
    $sql = "SELECT Name,Email_id FROM `player` WHERE `Mobile_number` LIKE '$mob'";
    $result = mysqli_query($conn,$sql);
    $val = mysqli_num_rows($result);
    if($val==0) {
        echo false;
    } else {
        session_start();
        $result = mysqli_fetch_row($result);
        $_SESSION['email']=$result[1];
        $_SESSION['name']=$result[0];
        print_r($result[0]);
    }
}

if(isset($_POST['send_otp']) && !isset($_POST['OTP'])) {
    session_start();
    $tomail=$_SESSION['email'];
    $subject = "Team Joining OTP";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: '.$tomail."\r\n";
    $_SESSION['OTP']=rand(111111,999999);
    $message="Your team Joining OTP is :- ".$_SESSION['OTP'].".";
    // if(mail($tomail,$subject,$message,$headers))
    if(true)
    {
        $mail = substr($tomail,0,3)."XXXX".substr($tomail,-13);
        echo "OTP is Sent to Email_id :- ".$mail." OTP :- ".$_SESSION['OTP'];
    }
    else{
        echo false;
    }
}


if(isset($_POST['OTP'])) {
    session_start();
    if(strcmp($_SESSION['OTP'],$_POST['OTP'])!=0) {
        echo false;
    } else {
        echo $_SESSION['name']." is added Succesfully.";
        session_destroy();
        unset($_POST);
    }
}
?>