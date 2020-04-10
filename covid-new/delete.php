
<?php

include 'connect.php';


$eid=$_REQUEST['eid'];

?>


<!DOCTYPE html>
<html>
<head>
<title>Done</title>
</head>
<body>

<?php

mysqli_query($connection,"DELETE from euser where eid='$eid'") or die (mysqli_error($connection));
header("location: etdetail.php");

?>











</body>
</html>