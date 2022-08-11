<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css_file/signup.css"> -->
    <script src="signup_ajax.js"></script>
    <title>team signup page</title>

  </head>
  <body>


    <div class="container" id="top">
        <div class="heading">
            <h1>Team Registration Form</h1>
        </div>

        <!-- Name -->
        <form action="../data/team/set.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label  for="team_name">Team Name</label>
                <input type="text" class="form-control" name="team_name" id="team_name" aria-describedby="nameHelp" placeholder="Enter your Team Name" required>
            </div>
            
            <div id="player">
                <div>
                    <!-- Player_1 -->
                    <div class="form-row">
                        <!-- Mobile Number -->
                        <div class="col-md-3 mb-3">
                            <label  for="mobile_number">Mobile Number</label>
                            <input type="tel" class="form-control" name="mobile_number[]" id="mobile_number100" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Player">
                        </div>
                        <!-- get data -->
                        <div class="col-md-2 mb-3" id="data_col100">
                            <label for="" style="color:white">Get Data</label>
                            <button style="background-color:orange;color:white;" class="form-control" type="button" id="data100" class="btn btn-primary" onclick="get_data(this)">Get Data</button>
                        </div>
                        <!-- display Name -->
                        <div class="col-md-2 mb-3" id="name_col100" style="display:none">
                            <label for="">Player Name</label>
                            <div class="input-group-append">
                                <span style="background-color:red;" class="input-group-text font-weight-bold" id="name100"></span>
                            </div>
                        </div>
                        <!-- Add Remove -->
                        <div class="col-md-2 mb-3" id="add_col100" style="display:none;">
                            <label for="" style="color:white">G</label>
                            <button style="background-color:green;color:white;" class="form-control" type="button" id="add_more_player100" class="btn btn-primary" onclick="add_player(this)">Add More Player</button>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <!-- send otp -->
                        <div class="col-md-3 mb-3" id="send_otp_col100" style="display:none">
                            <button style="background-color:pink;" class="form-control" type="button" id="send_otp100" class="btn btn-primary" onclick="send_otp(this)">Verify Player</button>
                        </div>
        
                        <!-- Enter OTP -->
                        <div class="col-md-3 mb-3" id="otp_col100" style="display:none">
                            <label  for="otp">Enter OTP Send On Player Email</label>
                            <input style="text-align:center;" type="numeric" class="form-control" id="OTP100" placeholder="XXXXXX" required>
                        </div>
                        <!-- verify OTP -->
                        <div class="col-md-2 mb-3" id="verify_otp_col100" style="display:none">
                            <label for="" style="color:white">Verify OTP</label>
                            <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="verify_OTP100" class="btn btn-primary" onclick="otp_verification(this)">Verify OTP</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Captcha Code -->
            <div class="form-group" id="captcha_code_col" style="display:none;">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="">Captcha:</label>
                        <input type="text" class="form-control" id="captcha" placeholder="Enter Captcha Code" required>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="" style="color:white">IMG</label>
                        <img src="../captcha_code_generator.php" alt="">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="" style="color:white">Ge</label>
                        <button style="background-color:#0030ff;color:white;" class="form-control" type="button" id="verify_otp" class="btn btn-primary">Verify Captcha Code</button>
                    </div>
                </div>
            </div>


            <!-- Submit -->
            <div class="form-group">
                <button style="background-color:green" type="submit" id="submit" class="btn btn-primary" disabled>Add 15 Player To SUBMIT</button>
            </div>

        </form>
    </div>
  </body>
</html>