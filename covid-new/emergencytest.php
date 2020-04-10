<!DOCTYPE html>
<html>
<head><center><font size="12" face="Times New Roman" color="White"> EMERGENCY TEST REPORT</font>
<?php
include 'connect.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</center>
</head>

<body background="aa.JPG">

<center><font size="5" color="White">
<center>Fill in the following details</center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 
<table>

 <tr><td> <label for="mname">Mobile no:</label></td>
  <td><input type="text" id="mname" name="mname" required></td></tr>

<tr><td> <label for="Pcode">Pincode:</label></td>
  <td><input type="text" id="Pcode" name="Pcode" required></td></tr>



<tr>
  <td><input type="reset" value="reset" ></td>
<td>
<input type="Submit" value="submit"></td></tr>
</form></td></font>

</table></center>

<?php
if (isset($_POST['mname']) and isset($_POST['Pcode'])){
	
// Assigning POST values to variables.
$mname = $_POST['mname'];
$pcode = $_POST['Pcode'];

$q ="INSERT INTO `euser`(`eno`,`epin`) VALUES ('$mname','$pcode')";
mysqli_query($connection, $q) or die(mysqli_error($connection));

$query = "SELECT eid FROM `euser` WHERE eno='$mname'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

header("location: submit.html");

}else{
echo "Complete required details or mobile number already exists";

}
}

?>


</body>
</html>