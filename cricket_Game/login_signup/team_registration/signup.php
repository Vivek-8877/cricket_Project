<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css_file/signup.css"> -->
    <title>signup page</title>
  </head>
  <body>

  <?php
  include 'signup_ajax.php';
  ?>

    <div class="container" id="top">
        <div class="heading">
            <h1>Player Registration Form</h1>
        </div>

        <!-- Name -->
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label  for="team_name">Team Name</label>
            <input type="text" class="form-control" name="team_name" id="team_name" aria-describedby="nameHelp" placeholder="Enter your Team Name" onfocusin="set_team_name()" onfocusout="check_team_name()">
        </div>

        <div class="form-row">
            <!-- Mobile Number -->
            <div class="form-group">
                <label  for="mobile_number">Mobile Number</label>
                <input type="tel" class="form-control" name="mobile_number" id="mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter your Valid 10 digit Mobile Number for authentication" onfocusin="set_mobile_number()" onfocusout="check_mobile_number()">
            </div>

            <a href="javascript:void(0)" onclick="get_data()">get data</a>

            <h1 id="hii"></h1>
            <!-- City -->
            <div class="col-md-3 mb-3" style="display:none">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter Your Village/City Name" onfocusin="set_city()" onfocusout="check_city()" required>
            </div>
        </div>

        <!-- Captcha Code -->
        <!-- <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Captcha:</label>
                    <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Enter Captcha Code" onfocusout="match_captcha()" required>
                </div>
                <div class="col-lg-2" style="margin-top:3.5%">
                    <img src="../captcha_code_generator.php" alt="">
                    <?php
                    // session_abort();
                    ?>
                </div>
            </div>
        </div> -->

        <!-- Submit and Reset -->
        <div>
            <button style="background-color:red" type="reset" class="btn btn-primary">Reset</button>
            <button style="background-color:green" type="submit" id="submit" class="btn btn-primary">Submit</button>
        </div>

        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="script_file/signup.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
  </body>
</html>