<?php
  include 'connection.php';
  session_start();

  $mobile_number = $_POST['mobile_number'];

  $server_name = "localhost";
  $user_name = "root";
  $password = "";

  $data_base_name = "form";

  $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
  $mssg="";
  if(!$conn) {
    $_SESSION['mssg']="Connection_Failed";
    header("Location: after/wrong/password.php");
  }

  if(strlen($mobile_number)==10) {
    $sql = "SELECT * FROM `player` WHERE Mobile_number='$mobile_number'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1) {
        $pass="";
        foreach($result as $key => $value) {
            $pass=$value['Password'];
        }
        // echo $new_pass;
        $_SESSION['mssg']=$pass;
        header("Location: after/right/password.php");
    } else {
        // echo "You are Not registered";
        $_SESSION['mssg']="Not";
        header("Location: after/wrong/password.php");
    }
  } else {
    // $em="Enter Valid 10 digit Mobile Number";
    $_SESSION['mssg']="Invalid";
    header("Location: after/wrong/password.php");
  }




?>