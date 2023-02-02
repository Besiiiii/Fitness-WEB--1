<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin area</title>
    <link rel="stylesheet" href="../css/messageStyle.css" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
</head>
<body>
<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in Admin area.</p>      
        <p><a href="index.html">Home</a> 
        <a href="dashboard.php">Dashboard</a> 
        <a href="logout.php">Logout</a></p>
 
</body>
</html>
