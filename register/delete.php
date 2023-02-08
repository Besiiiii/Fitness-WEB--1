<?php
require('dbConnection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM admins WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: dashboard.php"); 
?>