<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>logged in</title>
  </head>
  <body>
    


  <?php

  $mobile_number = $_POST['mobile_number'];

  $server_name = "localhost";
  $user_name = "root";
  $password = "";

  $data_base_name = "form";

  $conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);

  if(strlen($mobile_number)==10) {
    $sql = "SELECT Password FROM `player` WHERE EXISTS(SELECT Password FROM `player` WHERE Mobile_number='$mobile_number')";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1) {
        $new_pass="";
        foreach($result as $key => $value) {
            $new_pass=$value['Password'];
        }
        echo $new_pass;
    } else {
        echo "You are Not registered";
    }
  } else {
    $em="Enter Valid 10 digit Mobile Number";
    header("Location: ../../login.php");
  }





  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>