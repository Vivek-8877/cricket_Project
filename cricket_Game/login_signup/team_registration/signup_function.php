<?php
$f1 = $_POST['function2call'];
if($f1=="get_data") {
    get_data();
} else if($f1=="send_otp") {
    send_otp();
} else if($f1=="otp_verification") {
    otp_verification();
} else {
    captcha_validation();
}
// print_r($_POST);
// if(isset($_POST['mobile_number']) && !isset($_POST['send_otp'])) {
function get_data() {
    include 'config.php';
    $mob = $_POST['mobile_number'];
    $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
    $sql = "SELECT Name FROM `player` WHERE `Mobile_number` LIKE '$mob'";
    $result = mysqli_query($conn,$sql);
    $val = mysqli_num_rows($result);
    if($val==0) {
        echo false;
    } else {
        $result = mysqli_fetch_row($result);
        print_r($result[0]);
    }
}

// if(isset($_POST['send_otp']) && !isset($_POST['OTP'])) {
function send_otp() {
    include 'config.php';
    $mob = $_POST['mobile_number'];
    $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
    $sql = "SELECT Email_id FROM `player` WHERE `Mobile_number` LIKE '$mob'";
    $mail = mysqli_fetch_row(mysqli_query($conn,$sql))[0];

    $tomail=$mail;
    $subject = "Team Joining OTP";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: '.$tomail."\r\n";
    $rand = rand(111111,999999);
    $message="Your team Joining OTP is :- ".$rand.".";
    // if(mail($tomail,$subject,$message,$headers))
    if(true)
    {
        $conn = mysqli_connect($server_name,$user_name,$password,'otp_verification');
        mysqli_query($conn,"INSERT INTO `otp` (`Mobile_number`, `OTP`) VALUES ('$mob', '$rand')");
        $mail = substr($tomail,0,3)."XXXX".substr($tomail,-13);
        echo "OTP is Sent to Email_id :- ".$mail." OTP :- ".$rand;
    }
    else{
        echo false;
    }
}


// if(isset($_POST['OTP']) && isset($_POST['mobile_number'])) {
function otp_verification() {
    include 'config.php';
    $conn = mysqli_connect($server_name,$user_name,$password,'otp_verification');
    $mob = $_POST['mobile_number'];
    $result = mysqli_query($conn,"SELECT OTP FROM `otp` WHERE Mobile_number='$mob'");
    $otp = mysqli_fetch_row($result)[0];
    
    if(strcmp($otp,$_POST['OTP'])!=0) {
        echo false;
    } else {
        echo true;
        mysqli_query($conn,"DELETE FROM `otp` WHERE Mobile_number='$mob'");
        unset($_POST);
    }
}

// if(isset($_POST['captcha_code'])) 
function captcha_validation() {
    include 'config.php';
    session_start();
    // print_r($_SESSION);
    if(strcmp($_SESSION['code'],$_POST['captcha_code'])!=0) {
        echo false;
    } else {
        echo true;
        session_destroy();
        unset($_POST);
    }
}
?>