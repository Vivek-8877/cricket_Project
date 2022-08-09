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
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label  for="team_name">Team Name</label>
            <input type="text" class="form-control" name="team_name" id="team_name" aria-describedby="nameHelp" placeholder="Enter your Team Name" onfocusin="set_team_name()" onfocusout="check_team_name()">
        </div>

        <!-- Caption -->
        <div class="form-row">
            <!-- Mobile Number -->
            <div class="col-md-3 mb-3">
                <label  for="mobile_number">Caption Mobile Number</label>
                <input type="tel" class="form-control" name="caption_mobile_number" id="caption_mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Caption">
            </div>
            <!-- get data -->
            <div class="col-md-2 mb-3" id="caption_mobile_number_data_col">
                <label for="" style="color:white">Get Data</label>
                <button style="background-color:orange;color:white;" class="form-control" type="button" id="caption_mobile_number_data" class="btn btn-primary">Get Data</button>
            </div>
            <!-- display Name -->
            <div class="col-md-3 mb-3" id="caption_player_name_col" style="display:none">
                <label for="">Caption Name</label>
                <div class="input-group-append">
                    <span style="background-color:red;" class="input-group-text font-weight-bold" id="caption_player_name"></span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <!-- send otp -->
            <div class="col-md-3 mb-3" id="caption_send_otp_col" style="display:none">
                <button style="background-color:pink;" class="form-control" type="button" id="caption_send_otp" class="btn btn-primary">Verify Caption</button>
            </div>

            <!-- Enter OTP -->
            <div class="col-md-3 mb-3" id="caption_otp_col" style="display:none">
                <label  for="otp">Enter OTP Send On Player Email</label>
                <input style="text-align:center;" type="numeric" class="form-control" name="OTP" id="caption_OTP" placeholder="XXXXXX" required>
            </div>
            <!-- verify OTP -->
            <div class="col-md-2 mb-3" id="caption_verify_otp_col" style="display:none">
                <label for="" style="color:white">Verify OTP</label>
                <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="caption_verify_OTP" class="btn btn-primary">Verify OTP</button>
            </div>
        </div>

        <!-- Vice Caption -->
        <div class="form-row" id="vice_caption" style="display:none">
            <!-- Mobile Number -->
            <div class="col-md-3 mb-3">
                <label  for="mobile_number">Vice Caption Mobile Number</label>
                <input type="tel" class="form-control" name="vice_caption_mobile_number" id="vice_caption_mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Vice Caption">
            </div>
            <!-- get data -->
            <div class="col-md-2 mb-3" id="vice_caption_mobile_number_data_col">
                <label for="" style="color:white">Get Data</label>
                <button style="background-color:orange;color:white;" class="form-control" type="button" id="vice_caption_mobile_number_data" class="btn btn-primary">Get Data</button>
            </div>
            <!-- display Name -->
            <div class="col-md-3 mb-3" id="vice_caption_player_name_col" style="display:none">
                <label for="">Vice Caption Name</label>
                <div class="input-group-append">
                    <span style="background-color:red;" class="input-group-text font-weight-bold" id="vice_caption_player_name"></span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <!-- send otp -->
            <div class="col-md-3 mb-3" id="vice_caption_send_otp_col" style="display:none">
                <button style="background-color:pink;" class="form-control" type="button" id="vice_caption_send_otp" class="btn btn-primary">Verify Vice Caption</button>
            </div>

            <!-- Enter OTP -->
            <div class="col-md-3 mb-3" id="vice_caption_otp_col" style="display:none">
                <label  for="otp">Enter OTP Send On Player Email</label>
                <input style="text-align:center;" type="numeric" class="form-control" name="OTP" id="vice_caption_OTP" placeholder="XXXXXX" required>
            </div>
            <!-- verify OTP -->
            <div class="col-md-2 mb-3" id="vice_caption_verify_otp_col" style="display:none">
                <label for="" style="color:white">Verify OTP</label>
                <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="vice_caption_verify_OTP" class="btn btn-primary">Verify OTP</button>
            </div>
        </div>

        <!-- Player_1 -->
        <div class="form-row" id="player1" style="display:none;">
            <!-- Mobile Number -->
            <div class="col-md-3 mb-3">
                <label  for="mobile_number">Player_1 Mobile Number</label>
                <input type="tel" class="form-control" name="player1_mobile_number" id="player1_mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Player">
            </div>
            <!-- get data -->
            <div class="col-md-2 mb-3" id="player1_mobile_number_data_col">
                <label for="" style="color:white">Get Data</label>
                <button style="background-color:orange;color:white;" class="form-control" type="button" id="player1_mobile_number_data" class="btn btn-primary">Get Data</button>
            </div>
            <!-- display Name -->
            <div class="col-md-3 mb-3" id="player1_name_col" style="display:none">
                <label for="">Player_1 Name</label>
                <div class="input-group-append">
                    <span style="background-color:red;" class="input-group-text font-weight-bold" id="player1_name"></span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <!-- send otp -->
            <div class="col-md-3 mb-3" id="player1_send_otp_col" style="display:none">
                <button style="background-color:pink;" class="form-control" type="button" id="player1_send_otp" class="btn btn-primary">Verify Player_1</button>
            </div>

            <!-- Enter OTP -->
            <div class="col-md-3 mb-3" id="player1_otp_col" style="display:none">
                <label  for="otp">Enter OTP Send On Player Email</label>
                <input style="text-align:center;" type="numeric" class="form-control" name="OTP" id="player1_OTP" placeholder="XXXXXX" required>
            </div>
            <!-- verify OTP -->
            <div class="col-md-2 mb-3" id="player1_verify_otp_col" style="display:none">
                <label for="" style="color:white">Verify OTP</label>
                <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="player1_verify_OTP" class="btn btn-primary">Verify OTP</button>
            </div>
        </div>

        <!-- Player_2 -->
        <div class="form-row" id="player2" style="display:none;">
            <!-- Mobile Number -->
            <div class="col-md-3 mb-3">
                <label  for="mobile_number">Player_2 Mobile Number</label>
                <input type="tel" class="form-control" name="player2_mobile_number" id="player2_mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Player">
            </div>
            <!-- get data -->
            <div class="col-md-2 mb-3" id="player2_mobile_number_data_col">
                <label for="" style="color:white">Get Data</label>
                <button style="background-color:orange;color:white;" class="form-control" type="button" id="player2_mobile_number_data" class="btn btn-primary">Get Data</button>
            </div>
            <!-- display Name -->
            <div class="col-md-3 mb-3" id="player2_name_col" style="display:none">
                <label for="">Player_2 Name</label>
                <div class="input-group-append">
                    <span style="background-color:red;" class="input-group-text font-weight-bold" id="player2_name"></span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <!-- send otp -->
            <div class="col-md-3 mb-3" id="player2_send_otp_col" style="display:none">
                <button style="background-color:pink;" class="form-control" type="button" id="player2_send_otp" class="btn btn-primary">Verify Player_2</button>
            </div>

            <!-- Enter OTP -->
            <div class="col-md-3 mb-3" id="player2_otp_col" style="display:none">
                <label  for="otp">Enter OTP Send On Player Email</label>
                <input style="text-align:center;" type="numeric" class="form-control" name="OTP" id="player2_OTP" placeholder="XXXXXX" required>
            </div>
            <!-- verify OTP -->
            <div class="col-md-2 mb-3" id="player2_verify_otp_col" style="display:none">
                <label for="" style="color:white">Verify OTP</label>
                <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="player2_verify_OTP" class="btn btn-primary">Verify OTP</button>
            </div>
        </div>

        <!-- Player_3 -->
        <div class="form-row" id="player3" style="display:none;">
            <!-- Mobile Number -->
            <div class="col-md-3 mb-3">
                <label  for="mobile_number">Player_3 Mobile Number</label>
                <input type="tel" class="form-control" name="player3_mobile_number" id="player3_mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Player">
            </div>
            <!-- get data -->
            <div class="col-md-2 mb-3" id="player3_mobile_number_data_col">
                <label for="" style="color:white">Get Data</label>
                <button style="background-color:orange;color:white;" class="form-control" type="button" id="player3_mobile_number_data" class="btn btn-primary">Get Data</button>
            </div>
            <!-- display Name -->
            <div class="col-md-3 mb-3" id="player3_name_col" style="display:none">
                <label for="">Player_3 Name</label>
                <div class="input-group-append">
                    <span style="background-color:red;" class="input-group-text font-weight-bold" id="player3_name"></span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <!-- send otp -->
            <div class="col-md-3 mb-3" id="player3_send_otp_col" style="display:none">
                <button style="background-color:pink;" class="form-control" type="button" id="player3_send_otp" class="btn btn-primary">Verify Player_3</button>
            </div>

            <!-- Enter OTP -->
            <div class="col-md-3 mb-3" id="player3_otp_col" style="display:none">
                <label  for="otp">Enter OTP Send On Player Email</label>
                <input style="text-align:center;" type="numeric" class="form-control" name="OTP" id="player3_OTP" placeholder="XXXXXX" required>
            </div>
            <!-- verify OTP -->
            <div class="col-md-2 mb-3" id="player3_verify_otp_col" style="display:none">
                <label for="" style="color:white">Verify OTP</label>
                <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="player3_verify_OTP" class="btn btn-primary">Verify OTP</button>
            </div>
        </div>

        <!-- Player_4 -->
        <div class="form-row" id="player4" style="display:none;">
            <!-- Mobile Number -->
            <div class="col-md-3 mb-3">
                <label  for="mobile_number">Player_4 Mobile Number</label>
                <input type="tel" class="form-control" name="player4_mobile_number" id="player4_mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Player">
            </div>
            <!-- get data -->
            <div class="col-md-2 mb-3" id="player4_mobile_number_data_col">
                <label for="" style="color:white">Get Data</label>
                <button style="background-color:orange;color:white;" class="form-control" type="button" id="player4_mobile_number_data" class="btn btn-primary">Get Data</button>
            </div>
            <!-- display Name -->
            <div class="col-md-3 mb-3" id="player4_name_col" style="display:none">
                <label for="">Player_4 Name</label>
                <div class="input-group-append">
                    <span style="background-color:red;" class="input-group-text font-weight-bold" id="player4_name"></span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <!-- send otp -->
            <div class="col-md-3 mb-3" id="player4_send_otp_col" style="display:none">
                <button style="background-color:pink;" class="form-control" type="button" id="player4_send_otp" class="btn btn-primary">Verify Player_4</button>
            </div>

            <!-- Enter OTP -->
            <div class="col-md-3 mb-3" id="player4_otp_col" style="display:none">
                <label  for="otp">Enter OTP Send On Player Email</label>
                <input style="text-align:center;" type="numeric" class="form-control" name="OTP" id="player4_OTP" placeholder="XXXXXX" required>
            </div>
            <!-- verify OTP -->
            <div class="col-md-2 mb-3" id="player4_verify_otp_col" style="display:none">
                <label for="" style="color:white">Verify OTP</label>
                <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="player4_verify_OTP" class="btn btn-primary">Verify OTP</button>
            </div>
        </div>

        <!-- Player_5 -->
        <div class="form-row" id="player5" style="display:none;">
            <!-- Mobile Number -->
            <div class="col-md-3 mb-3">
                <label  for="mobile_number">Player_5 Mobile Number</label>
                <input type="tel" class="form-control" name="player5_mobile_number" id="player5_mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Player">
            </div>
            <!-- get data -->
            <div class="col-md-2 mb-3" id="player5_mobile_number_data_col">
                <label for="" style="color:white">Get Data</label>
                <button style="background-color:orange;color:white;" class="form-control" type="button" id="player5_mobile_number_data" class="btn btn-primary">Get Data</button>
            </div>
            <!-- display Name -->
            <div class="col-md-3 mb-3" id="player5_name_col" style="display:none">
                <label for="">Player_5 Name</label>
                <div class="input-group-append">
                    <span style="background-color:red;" class="input-group-text font-weight-bold" id="player5_name"></span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <!-- send otp -->
            <div class="col-md-3 mb-3" id="player5_send_otp_col" style="display:none">
                <button style="background-color:pink;" class="form-control" type="button" id="player5_send_otp" class="btn btn-primary">Verify Player_5</button>
            </div>

            <!-- Enter OTP -->
            <div class="col-md-3 mb-3" id="player5_otp_col" style="display:none">
                <label  for="otp">Enter OTP Send On Player Email</label>
                <input style="text-align:center;" type="numeric" class="form-control" name="OTP" id="player5_OTP" placeholder="XXXXXX" required>
            </div>
            <!-- verify OTP -->
            <div class="col-md-2 mb-3" id="player5_verify_otp_col" style="display:none">
                <label for="" style="color:white">Verify OTP</label>
                <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="player5_verify_OTP" class="btn btn-primary">Verify OTP</button>
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
        <div class="form-group">
            <!-- <button style="background-color:red" type="reset" class="btn btn-primary">Reset</button> -->
            <button style="background-color:green" type="submit" id="submit" class="btn btn-primary" disabled>Fill the Form to activate SUBMIT</button>
        </div>

        </form>
    </div>
  </body>
</html>