<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="get.css">
    <title>Signed Up</title>
  </head>
  <body>
  <?php
  include 'config.php';
  // $server_name = "localhost";
  // $user_name = "root";
  // $password = "";

  // $data_base_name = "form";
    session_start();
    if(strcmp($_POST['captcha'],$_SESSION['code'])!=0) {
      $_SESSION['mssg']='captcha';
      header("Location: after/wrong/signup.php");
      die();
    }

    $profile_picture_url="";
    $aadhar_card_url="";
  // set url for Profile Picture
    $img_name = $_FILES['profile_picture']['name'];
    $img_size = $_FILES['profile_picture']['size'];
    $tmp_name = $_FILES['profile_picture']['tmp_name'];
    $error = $_FILES['profile_picture']['error'];
    $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path = 'uploads/images/'.$new_img_name;
    // move_uploaded_file($tmp_name,$img_upload_path);
    $_SESSION['profile_picture_url']=$profile_picture_url=$new_img_name;
  // set url for aadhar card
    $aadhar_name = $_FILES['aadhar_card']['name'];
    $aadhar_size = $_FILES['aadhar_card']['size'];
    $tmp_aadhar_name = $_FILES['aadhar_card']['tmp_name'];
    $error = $_FILES['aadhar_card']['error'];
    $aadhar_ex = pathinfo($aadhar_name,PATHINFO_EXTENSION);
    $aadhar_ex_lc = strtolower($aadhar_ex);
    $new_aadhar_name = uniqid("DOC-",true).'.'.$aadhar_ex_lc;
    $aadhar_upload_path = 'uploads/documents/'.$new_aadhar_name;
    // move_uploaded_file($tmp_aadhar_name,$aadhar_upload_path);
    $_SESSION['aadhar_card_url']=$aadhar_card_url=$new_aadhar_name;

  // extracting all variable
    $_SESSION['name']=$name = $_POST['name'];
    $_SESSION['father_name']=$father_name = $_POST['father_name'];
    $_SESSION['gender']=$gender = $_POST['gender'];
    $_SESSION['date_of_birth']=$date_of_birth = $_POST['date_of_birth'];
    $_SESSION['state']=$state = $_POST['state'];
    $_SESSION['district']=$district = $_POST['district'];
    $_SESSION['city']=$city = $_POST['city'];
    $_SESSION['pin_number']=$pin_number = $_POST['pin_number'];
    $_SESSION['mobile_number']=$mobile_number = $_POST['mobile_number'];
    $_SESSION['email']=$email = $_POST['email'];
    $_SESSION['pass']= $pass = $_POST['pass'];

    $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);

    if(!$conn) {
      $_SESSION['mssg']="Conn";
      header("Location: after/wrong/signup.php");
      die();
    }

    $mobile_already_exist = "SELECT * FROM `player` WHERE Mobile_number='$mobile_number'";
    $result = mysqli_num_rows(mysqli_query($conn,$mobile_already_exist));

    if($result!=0) {
      $_SESSION['mssg']="mobile";
      header("Location: after/wrong/signup.php");
      die();
    }

    $email_already_exist = "SELECT * FROM `player` WHERE Email_id='$email'";
    $result = mysqli_num_rows(mysqli_query($conn,$email_already_exist));

    if($result!=0) {
      $_SESSION['mssg']="email";
      header("Location: after/wrong/signup.php");
      die();
    }

    $_SESSION['tmp_name']=$tmp_name;
    $_SESSION['tmp_aadhar_name']=$tmp_aadhar_name;
    move_uploaded_file($tmp_name,$img_upload_path);
    move_uploaded_file($tmp_aadhar_name,$aadhar_upload_path);

    header("Location: send_otp/send_otp.php");
    die();
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>