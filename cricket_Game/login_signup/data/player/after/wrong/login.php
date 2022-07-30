<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Invalid Credantial</title>
  </head>
  <body>

  <?php
  session_start();
  $mssg = $_SESSION['mssg'];
  // print_r($_SESSION);
  session_abort();
  // echo $mssg;
  if($mssg=="captcha") {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong>  Captcha Not Matches.
    <a href="../../../../login.php">Click here to log in</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  } else if($mssg=="Invalid") {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong> Invalid Mobile Number Entered.
    <a href="../../../../login.php">Click here to log in</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  } else if($mssg=="Not") {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong> This Mobile Number is Not Registered.
    <a href="../../../../signup.php">Click me to Register</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  } else if($mssg=="Wrong") {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong> Entered Wrong password or Mobile Number.
    <a href="../../../../login.php">Try again to log in</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  } else {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong> For Inconvinence Due to some technical issues we are not getting you Please try again.
    <a href="../../../../login.php">Try again to log in</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  }
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>