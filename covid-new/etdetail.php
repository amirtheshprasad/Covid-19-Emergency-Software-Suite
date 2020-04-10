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

<tr><th><strong>Id</strong></th><th><strong>Mobile No</strong></th><th><strong>&nbspPin Code&nbsp</strong></th><th><strong>Communication</strong></th></tr>
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
<td align="center"><a href="delete.php?eid=<?php echo $row["eid"]; ?>">Done</a></td>
	</tr><?php
	}
	

 
}
?>
</center>
</body>

</html>