<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css_file/send_otp.css">
    <title>OTP Authentication</title>
  </head>
  <body>
    <?php
        include 'send_otp_function.php';
        session_start();
        $_SESSION['OTP']=rand(111111,999999);
        if(!sendOTP($_SESSION['email'],$_SESSION['OTP'])) {
            $_SESSION['mssg']="Invalid_email";
            header("Location: ../after/wrong/signup.php");
            die();
        }
    ?>
    <div class="container" id="top">
    <form action="verify_signup_otp.php" method="post">
        <div class="form-row">
            <div class="col-md-9 mb-3">
                <label for="OTP">Enter OTP Sent On Your Email</label>
                <input type="text" class="form-control" name="OTP" id="OTP" placeholder="XXXXXX" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">

            </div>
            <div class="col-md-3 mb-3">
                <button type="submit" id="submit_for_otp" name="submit_for_otp" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>