<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$link = mysqli_select_db($connection, 'db1');
if (!$link){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>