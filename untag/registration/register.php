<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--
  ===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Register
          </span>
        </div>
   
  
  <form class="login100-form validate-form" method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter username">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password_1" placeholder="Enter Password">
            <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
            <span class="label-input100">Confirm Password</span>
            <input class="input100" type="password" name="password_2" placeholder="Enter Password">
            <span class="focus-input100"></span>
    </div>
    <div class="container-login100-form-btn">
            <p style="margin-left: 0px;">
      Already a member? <a href="login.php">Sign in</a>
    </p>
            <button type ="submit" class="login100-form-btn" name="reg_user" style="margin-left: 40px;">Register</button>
           
    </div>

  </form>
</body>
</html>