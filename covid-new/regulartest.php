 <!DOCTYPE html>
<html>
<head><center><font size="12" face="Times New Roman" color="White"> REGULAR TEST REPORT</font></center>
	<?php
	include 'connect.php';
	?>
</head>

<body background="_MG_0060.JPG">

<center><font size="5" color="White">
<center>Fill in the following details</center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<table>

 <tr><td> <label for="mname">Mobile no:</label></td>
  <td><input type="text" id="mname" name="mname" required></td></tr>



  <tr><td> <label for="aname">Name:</label></td>
  <td><input type="text" id="aname" name="aname" required></td></tr>

<tr><td> <label for="Pcode">Pincode:</label></td>
  <td><input type="text" id="Pcode" name="Pcode" required></td></tr>

<tr><td> <label for="symp">Symptoms:</label></td>
<td> 
<table>
<tr>
<td><input type="checkbox" name="fever" > fever<br></td>
<td><input type="checkbox" name="cold" > short breath<br></td>
<tr>
<tr>
<td><input type="checkbox" name="cough" > cough<br></td>
<td><input type="checkbox" name="tired" > Tiredness<br></td>
<tr>

<td><label for="other">Other Ailments: </label></td>



  <td><input type="text" id="other" name="other"></td></tr></table></td> </tr>

<tr>
  <td>
<input type="reset" value="Back"></td><td><input type="submit" value="Submit"></td>
</form></td></font>

</table></center>

<?php
if (isset($_POST['mname']) and isset($_POST['aname']) and isset($_POST['Pcode'])){
	
// Assigning POST values to variables.
$mname = $_POST['mname'];
$aname = $_POST['aname'];
$pcode = $_POST['Pcode'];
$other=$_POST['other'];
$fever='no';
$cold='no';
$cough='no';
$tired='no';

if(isset($_POST['fever']))
	$fever='yes';
if(isset($_POST['cold']))
	$cold='yes';
if(isset($_POST['cough']))
	$cough='yes';
	
if(isset($_POST['tired']))
	$tired='yes';





$q ="INSERT INTO `guser` VALUES (NULL, '$mname', '$aname', '$cough', '$fever', '$tired', '$cold','$other',NULL,'$pcode')";
mysqli_query($connection, $q) or die(mysqli_error($connection));

$query = "SELECT gid FROM `guser` WHERE gno='$mname'";
 
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