<html>
    <head>
        <title>Signup form</title>
<!--         <link rel="stylesheet" type="text/css" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
                <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php
include 'connect.php';
?>
  </head>
    <body>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-danger" href="home.html">
                    Emerengency Suite
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="RESOURCES.html">Resource<span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="about_us.html">About Us<span class="sr-only">(current)</span></a>
          </li>
                <li class="nav-item active">
            <a class="nav-link" href="faq.html">FAQ<span class="sr-only">(current)</span></a>
          </li>

        </ul>
            <!--     <a href="signin.php" class="btn btn-outline-success my-2 my-sm-0" style="margin-right: 10px;" role="button">Login</a> -->

      </div>
    </nav>

<!-- nav part over -->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Administration<br> Login Page</h2>
            <p>For accessing database and creating new users.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-group">
                     <label>Email ID</label>
                     <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                <!--   <button type="submit" class="btn btn-secondary">Register</button> -->
               </form>
            </div>
         </div>
      </div>

<!--
         <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div id="login-box">
            <div class="left-box">
                <h1>Sign In</h1>

                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>



                <input type="submit" name="signIn-button" value="Login">

            </form>

</div>

        <div class="button">
            <a href="home.html">Back</a>
        </div>
 -->
        <?php
if (isset($_POST['email']) and isset($_POST['password']) ){

// Assigning POST values to variables.
$username = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `ouser` WHERE oemail='$username' and oupass='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
    header("location: 7th.html");

}else{?>

<br>
    <div class="alert alert-warning" role="alert">
        Invalid Login Credentials
    </div>
    <?php

}




}

?>
<div class="footer">
<footer class="page-footer font-small blue pt-4 bg-light">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="home.html"> Covid-19 Emergeny Suite</a>
  </div>
</div>
  </footer>


    </body>
</html>


