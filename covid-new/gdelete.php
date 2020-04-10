
<?php

include 'connect.php';

$gid=$_REQUEST['gid'];


?>


<!DOCTYPE html>
<html>
<head>
<title>Done</title>
</head>
<body>

<?php
mysqli_query($connection,"DELETE from guser where gid='$gid'") or die (mysqli_error($connection));
header("location: rtdetail.php");

?>
</body>
</html>