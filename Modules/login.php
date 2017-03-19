<?php
session_start();
  include ("validation.php");
if(isset($_POST["submit"]))
  {
    $user=$_POST['n1'];
      $password=$_POST['n2'];
    validate($user,$password);

  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MINISTRY OF AYUSH</title>


    <link href="content/css/bootstrap.min.css" rel="stylesheet">

    <link href="content/css/font-awesome.min.css" rel="stylesheet">

    <link href="content/css/nprogress.css" rel="stylesheet">

    <link href="content/css/animate.min.css" rel="stylesheet">

    <link href="content/css/custom.css" rel="stylesheet">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="js/register.js"></script>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php echo$_SERVER['PHP_SELF']; ?>">
              <h1>Login Form</h1>
              <div>
              <input type="text"  name="n1"  class="form-control" placeholder="Username" required="" />
               
              </div>
              <div>
                <input type="password" name="n2" class="form-control" placeholder="Password" required="" />
            
              </div>
              <div>
              <input type="submit" name="submit">
                <!-- <a class="btn btn-default" href="index.html" name="submit">Log in</a> -->
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Ministry of Ayush</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" name="fname" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" name="lname" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="pass" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="text" name="license" class="form-control" placeholder="license number" required="" />
              </div>
              <div>
                <input type="text" name="location" class="form-control" placeholder="location" required="" />
              </div>
              <div>
                <input type="text" name="cert" class="form-control" placeholder="certification" required="" />
              </div>
              <div>
                <input type="text" name="validity" class="form-control" placeholder="validity" required="" />
              </div>

              <div>
                  <input type="button" id="submit" value="Submit"/>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Ministry of Ayush</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
