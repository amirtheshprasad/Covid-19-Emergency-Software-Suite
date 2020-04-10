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
<table width="50%" border="1" style="border-collapse:collapse;">
<thead>

<tr><th><strong>id</strong></th><th><strong>mobile no</strong></th><th><strong>&nbsppin code&nbsp</strong></th></tr>
</thead>
<tbody>
<?php


$sel_query="SELECT * from euser";
$result = mysqli_query($connection,$sel_query) or die(mysqli_error($connection));
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)) { 
 ?>


	<tr>
		<td align="center"><?php echo $row["eid"]; ?></td>
		<td align="center"><?php echo $row["eno"]; ?></td>
		<td align="center"><?php echo $row["epin"]; ?></td>

	</tr><?php
	}
	

 
}
?>
</center>
</body>

</html>