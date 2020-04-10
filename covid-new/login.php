<html>
    <head>
        <title>Signup form</title> 
        <link rel="stylesheet" type="text/css" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include 'connect.php';
?>  
<style >
body {
    background-image: url("image1.jpg ");
      background-size:cover;
      background-repeat: no-repeat;
 } 

</style>  </head>
    <body>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div id="login-box">
            <div class="left-box">
                <h1>Sign Up</h1>
                <input type="text" name="username" placeholder="Username"/>
                <input type="text" name="email" placeholder="Email"/>
                <input type="text" name="password" placeholder="Password"/>

                <input type="text" name="cpassword" placeholder="Retype Password"/>

                <input type="submit" name="signup-button" value="Sign Up">
                &nbsp&nbspOR &nbsp
            </form>
           
</div>

        <div class="button">
            <a href="home.html">Back</a>
        </div>

        <?php
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['cpassword']) and isset($_POST['email'])){
    
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email=$_POST['email'];
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `ouser` WHERE ouname='$username'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";

echo " Username already exits";


}
elseif ($password != $cpassword){

echo "Retype Password Correctly";

//echo "Invalid Login Credentials";
}
else
{
    $q1="INSERT INTO `ouser` (`ouname`, `oupass`,`oemail`) VALUES ('$username', '$password','$email') ";
    mysqli_query($connection,$q1) or die(mysqli_error($connection));
    $query = "SELECT * FROM `ouser` WHERE ouname='$username'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "done";

}
    

}

}

?>
            
    </body>
</html>