<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css_file/signup.css">
    <title>signup page</title>
  </head>
  <body>

    <div class="container" id="top">
        <div class="heading">
            <h1>Player Registration Form</h1>
        </div>

        <!-- Name -->
        <form action="data/player/set.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label  for="name">
                <div class="top_of_name_box">
                    <div>
                        <span>Your Name</span>
                    </div>
                    <div></div>
                    <div>
                        <span>Already Have an account? <a href="login.php">Log In</a></span>
                    </div>
                </div>
            </label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter your Name" required>
        </div>

        <!-- Father's Name -->
        <div class="form-group">
            <label  for="father_name">Father's Name</label>
            <input type="text" class="form-control" name="father_name" id="father_name" aria-describedby="father_nameHelp" placeholder="Enter your Father Name" required>
        </div>


        <div class="form-row">
            <!-- Gender-->
            <div class="col-md-3 mb-3">
                <label class="my-1 mr-2" for="gender">Gender </label>
                <select class="custom-select my-1 mr-sm-2" name="gender" id="gender" required>
                    <option selected>Select Your Gender...</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>
                </select>
            </div>

            <!-- DOB -->
            <div class="col-md-3 mb-3">
                <label  for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" aria-describedby="date_of_birthHelp" placeholder="Select Your Date Of Birth from Calender" required>
            </div>
        </div>


        <div class="form-row">

            <!-- Profile Picture -->
            <div class="col-md-3 mb-3">
                <label for="profile_picture">Select Your Profile Picture</label>
                <input type="file" class="form-control-file" name="profile_picture" id="profile_photo" required>
                <small style="" id="profile_pictureHelp" class="form-text text-muted">*only .jpg/.jpeg/.png file</small>
            </div>
            <!-- Aadhar Card -->
            <div class="col-md-3 mb-3">
                <label for="aadhar_card">Select Your ID</label>
                <input type="file" class="form-control-file" name="aadhar_card" id="aadhar_card" required>
                <small style="" id="aadhar_cardHelp" class="form-text text-muted">*only .pdf file</small>
            </div>
        </div>


        <div class="form-row">
            <!-- State -->
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <select class="custom-select my-1 mr-sm-2" name="state" id="state">
                    <option selected>Select Your State...</option>
                    <option value="Bihar">Bihar</option>
                </select>
            </div>

            <!-- District -->
            <div class="col-md-3 mb-3">
                <label for="district">District</label>
                <input type="text" class="form-control" name="district" id="district" placeholder="Enter Your District Name" required>
            </div>

            <!-- City -->
            <div class="col-md-3 mb-3">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter Your Village/City Name" required>
            </div>

            <!-- Pin Number -->
            <div class="col-md-3 mb-3">
                <label for="pin_code">PIN Code</label>
                <input type="text" class="form-control" name="pin_number" id="pin_number" placeholder="Enter your 6 digit PIN Code" required>
            </div>
        </div>


        <!-- Mobile Number -->
        <div class="form-group">
            <label  for="mobile_number">Mobile Number</label>
            <input type="tel" class="form-control" name="mobile_number" id="mobile_number" aria-describedby="mobile_numberHelp" placeholder="Enter your Valid 10 digit Mobile Number for authentication" required>
        </div>

        <!-- Email address -->
        <div class="form-group">
            <label  for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter your Valid Email for authentication" required>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="exampleInputPassword1">
                <div class="top_of_password_box">
                    <div>
                        <span>Create Password</span>
                    </div>
                    <div></div>
                    <div>
                        <span>Show/Hide</span>
                    </div>
                </div>
            </label>
            <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Enter your Password" required>
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
                </div>
            </div>
        </div>
        <!-- Submit and Reset -->
        <div>
            <button style="background-color:red" type="reset" class="btn btn-primary">Reset</button>
            <button style="background-color:green" type="submit" class="btn btn-primary">Submit</button>
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