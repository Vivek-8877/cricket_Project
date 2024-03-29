<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css_file/login.css">
    <title>Forgot Password</title>
  </head>
  <body>

    <div class="container" id="top">
        <div class="heading">
            <h1>Get your password</h1>
        </div>
        <!-- Mobile Number -->
        <form action="data/player/get_password.php" method="post" enctype="multipart/form-data">
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
            <button style="background-color:#00ff1f" type="submit" class="btn btn-primary">Get Password</button>
            <a style="background-color:white" href="login.php"><span>Return To Log in</span></a>
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