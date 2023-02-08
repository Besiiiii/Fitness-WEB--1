<?php
require('config.php');
$comment_id=$_REQUEST['comment_id'];
$query = "DELETE FROM tbl_comment WHERE comment_id=$comment_id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: dashboardComments.php"); 
?>