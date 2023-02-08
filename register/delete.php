<?php
require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM admins WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: dashboard.php"); 
?>
<?php
// require('db.php');
// $id=$_REQUEST['id'];
// $query = "DELETE FROM admin_users WHERE id=$id"; 
// $result = mysqli_query($con,$query) or die ( mysqli_error());
// header("Location: dashboard.php"); 
?>