<?php

session_start();
include '../config.php';

if((strcmp($_SESSION['OTP'],$_POST['OTP'])!=0)) {
    $_SESSION['mssg']="Invalid_otp";
    unlink('../uploads/images/'.$_SESSION['profile_picture_url']);
    unlink('../uploads/documents/'.$_SESSION['aadhar_card_url']);
    header("Location: ../after/wrong/signup.php");
    die();
}



    $name=$_SESSION['name'];
    $father_name=$_SESSION['father_name'];
    $gender=$_SESSION['gender'];
    $date_of_birth=$_SESSION['date_of_birth'];
    $state=$_SESSION['state'];
    $district=$_SESSION['district'];
    $city=$_SESSION['city'];
    $pin_number=$_SESSION['pin_number'];
    $mobile_number=$_SESSION['mobile_number'];
    $email=$_SESSION['email'];
    $pass=$_SESSION['pass'];
    $profile_picture_url=$_SESSION['profile_picture_url'];
    $aadhar_card_url=$_SESSION['aadhar_card_url'];

    $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
    $sql = "INSERT INTO `player` (`Name`, `Father's_Name`, `Gender`, `DOB`, `Profile_picture_url`, `Aadhar_Card`, `State`, `District`, `City`, `PIN_Code`, `Mobile_number`, `Email_id`, `Password`) VALUES ('$name', '$father_name', '$gender', '$date_of_birth', '$profile_picture_url', '$aadhar_card_url', '$state', '$district', '$city', '$pin_number', '$mobile_number', '$email', '$pass')";
    $result = mysqli_query($conn,$sql);

    $_SESSION['mssg']="Right";
    header("Location: ../after/right/signup.php");
    die();


?>