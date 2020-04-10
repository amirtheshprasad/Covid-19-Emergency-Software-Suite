<!DOCTYPE html>

<html>
<head>

<title> Table for emergency </title>
<style >
body {
    background-image: url("image1.jpg ");
      background-size:cover;
      background-repeat: no-repeat;
 } 

</style>  
</head>

<body>

<?php
include 'connect.php';
?><br><br><br>
<center>
<font size="5">
<table width="80%" border="1" style="border-collapse:collapse;">
<thead>

<tr><th><strong>Id</strong></th><th><strong>Mobile No</strong></th><th><strong>&nbspPin Code&nbsp</strong></th><th><strong>Name</strong></th><th><strong>Cough</strong></th><th><strong>Fever</strong></th><th><strong>Tiredness</strong></th><th><strong>Short Breathe</strong></th><th><strong>Other Details</strong></th><th><strong>Communication</strong></th></tr>
</thead>
<tbody>
<?php


$sel_query="SELECT * from guser";
$result = mysqli_query($connection,$sel_query) or die(mysqli_error($connection));
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)) { 
 ?>


	<tr>
		<td align="center"><?php echo $row["gid"]; ?></td>
		<td align="center"><?php echo $row["gno"]; ?></td>
				<td align="center"><?php echo $row["gpin"]; ?></td>
		<td align="center"><?php echo $row["gname"]; ?></td>
		<td align="center"><?php echo $row["gcough"]; ?></td>
		<td align="center"><?php echo $row["gfever"]; ?></td>

		<td align="center"><?php echo $row["gtired"]; ?></td>

		<td align="center"><?php echo $row["gshortbreathe"]; ?></td>
		<td align="center"><?php echo $row["gother"]; ?></td>
<td align="center"><a href="gdelete.php?gid=<?php echo $row["gid"]; ?>">Done</a></td>

	</tr><?php
	}
	

 
}
?>


</center>
</body>

</html>