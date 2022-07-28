<?php

include 'connection.php';

  session_start();

  $mobile_number = $_POST['mobile_number'];
  $pass = $_POST['pass'];

//   $server_name = "localhost";
//   $user_name = "root";
//   $password = "";

//   $data_base_name = "form";

  $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
  if(!$conn) {
    $_SESSION['mssg']="Conn";
    header("Location: after/wrong/login.php");
  }

  if(strlen($mobile_number)==10) {
    $sql = "SELECT * FROM `player` WHERE Mobile_number='$mobile_number'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)!=0) {
      $sql = "SELECT * FROM `player` WHERE Mobile_number='$mobile_number' AND Password='$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1) {
            foreach($result as $key => $value) {
              $img_url = $value['Profile_picture_url'];
              // print_r($img_url);
              ?>

              <div id="details">
                <div class="text-center" id="">
                  <img src="uploads/images/<?=$img_url?>" class="rounded" alt="...">
                </div>
                <a id="edit" href="#"><span>Edit Profile</span></a>
                <hr>
              <?php
                foreach($value as $key1 => $value1) {
                  if($key1=="Profile_picture_url" || $key1=="Aadhar_Card" || $key1=="Password") continue;
                  if($key1=="Gender") {
                    if($value1=="M") {
                      $value1="Male";
                    } else if($value1=="F"){
                      $value1="Female";
                    } else {
                      $value1="Others";
                    }
                  }
                  ?>
                  <div id="information">
                    <li><span>
                      <?php
                        echo $key1." :- ".$value1;
                        echo "<br>";
                      ?>
                    </span></li>
                  </div>
                  <?php
                    // echo $key1." :- ".$value1;
                    // echo "<br>";
                }
                ?>
                </div>
                <?php
            }
        } else {
            // echo "Entered Wrong password or Mobile Number";
            $_SESSION['mssg']="Wrong";
            header("Location: after/wrong/login.php");
        }
    } else {
        // echo "You are Not registered";
        $_SESSION['mssg']="Not";
        header("Location: after/wrong/login.php");
    }
  } else {
    // echo "Enter Valid 10 digit Mobile Number";
    $_SESSION['mssg']="Invalid";
    header("Location: after/wrong/login.php");
  }





  ?>