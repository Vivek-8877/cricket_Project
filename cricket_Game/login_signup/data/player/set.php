<?php
  include 'connection.php';



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
  move_uploaded_file($tmp_name,$img_upload_path);
  $profile_picture_url=$new_img_name;
// set url for aadhar card
  $aadhar_name = $_FILES['aadhar_card']['name'];
  $aadhar_size = $_FILES['aadhar_card']['size'];
  $tmp_aadhar_name = $_FILES['aadhar_card']['tmp_name'];
  $error = $_FILES['aadhar_card']['error'];
  $aadhar_ex = pathinfo($aadhar_name,PATHINFO_EXTENSION);
  $aadhar_ex_lc = strtolower($aadhar_ex);
  $new_aadhar_name = uniqid("DOC-",true).'.'.$aadhar_ex_lc;
  $aadhar_upload_path = 'uploads/documents/'.$new_aadhar_name;
  move_uploaded_file($tmp_aadhar_name,$aadhar_upload_path);
  $aadhar_card_url=$new_aadhar_name;

// extracting all variable
  $name = $_POST['name'];
  $father_name = $_POST['father_name'];
  $gender = $_POST['gender'];
  $date_of_birth = $_POST['date_of_birth'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $city = $_POST['city'];
  $pin_number = $_POST['pin_number'];
  $mobile_number = $_POST['mobile_number'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];


  $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);

  if(!$conn) {
    $_SESSION['mssg']="Conn";
    header("Location: after/wrong/signup.php");
  }

  $sql = "INSERT INTO `player` (`Name`, `Father's_Name`, `Gender`, `DOB`, `Profile_picture_url`, `Aadhar_Card`, `State`, `District`, `City`, `PIN_Code`, `Mobile_number`, `Email _id`, `Password`) VALUES ('$name', '$father_name', '$gender', '$date_of_birth', '$profile_picture_url', '$aadhar_card_url', '$state', '$district', '$city', '$pin_number', '$mobile_number', '$email', '$pass')";
  $result = mysqli_query($conn,$sql);
  
  $_SESSION['mssg']="Right";
  header("Location: after/right/signup.php");
  ?>