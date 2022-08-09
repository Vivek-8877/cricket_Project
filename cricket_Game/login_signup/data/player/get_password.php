<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Get Password</title>
  </head>
  <body>
  <?php
  session_start();
  if(strcmp($_POST['captcha'],$_SESSION['code'])!=0) {
    $_SESSION['mssg']='captcha';
    header("Location: after/wrong/password.php");
    die();
  }

  $mobile_number = $_POST['mobile_number'];
  include '../config.php';
  // $server_name = "localhost";
  // $user_name = "root";
  // $password = "";

  // $data_base_name = "form";

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
        $email="";
        foreach($result as $key => $value) {
            $pass=$value['Password'];
            $email=$value['Email_id'];
        }
        // echo $email;
        $tomail=$email;
        $subject ="Your Password";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'To: '.$tomail."\r\n";
        $message="Your Login Password is :- ".$pass;
        if(!mail($tomail,$subject,$message,$headers))
        {
          $_SESSION['mssg']="Conn";
          header("Location: after/wrong/password.php");
          die();
        } else {
          header("Location: after/right/password.php");
          die();
        }
    } else {
        // echo "You are Not registered";
        $_SESSION['mssg']="Not";
        header("Location: after/wrong/password.php");
        die();
    }
  } else {
    // $em="Enter Valid 10 digit Mobile Number";
    $_SESSION['mssg']="Invalid";
    header("Location: after/wrong/password.php");
    die();
  }

  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>