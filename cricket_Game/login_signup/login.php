<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css_file/login.css">
    <title>login page</title>
  </head>
  <body>

    <div class="container" id="top">
        <div class="heading">
            <h1>Player Log In</h1>
        </div>
        <!-- Mobile Number -->
        <form action="data/player/get.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label  for="exampleInputEmail1">
                <div class="top_of_mobile_number_box">
                    <div>
                        <span>Mobile Number</span>
                    </div>
                    <div></div>
                    <div style="background-color:white">
                        <span>Need an account? <a href="signup.php">Sign Up</a></span>
                    </div>
                </div>
            </label>
            <input type="tel" class="form-control" name="mobile_number" id="mobile_number" aria-describedby="mobileHelp" placeholder="Enter 10 digit Valid Mobile Number" required>
            <!-- <small style="text-align:right" id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-row">
            <!-- password -->
            <div class="col-md-9 mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your Password" required>
            </div>
            <!-- Check Box for password hide and show -->
            <div class="form-group">
                <div class="form-checkcol" style="margin-top:35%;margin-left:25%;">
                <input class="form-check-input" type="checkbox" onclick="show_hide()">
                <label class="form-check-label">
                    Show Password
                </label>
                </div>
            </div>
        </div>

        <!-- Captcha Code -->
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Captcha:</label>
                    <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Enter Captcha Code" required>
                </div>
                <div class="col-lg-2" style="margin-top:3.5%">
                    <img src="captcha_code_generator.php" alt="">
                    <?php session_abort(); ?>
                </div>
            </div>
        </div>
        <div>
            <button style="background-color:#00ff1f" type="submit" class="btn btn-primary">Log In</button>
            <a style="background-color:white" href="forgot_password.php"><span>Forgot Password?</span></a>
        </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script_file/login.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>