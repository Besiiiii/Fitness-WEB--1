<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="../css/dashboardStyle.css" />
</head>
<body>
<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>      
        <p><a href="../index.html">Home</a> 
        <a href="admin_dashboard.php">Admins Dashboard</a> 
        <a href="logout.php">Logout</a></p>
    <h2>View Users</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">
        <thead>
            <tr>
                <th><strong> </strong></th>
                <th><strong>ID</strong></th>
                <th><strong>Username</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Password</strong></th>
                <th><strong>Comment</strong></th>
                <th><strong>Date</strong></th>
                <th><strong>Edit</strong></th>
                <th><strong>Delete</strong></th>
            </tr>
        </thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from users";
$result1 = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result1)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["id"]; ?></td>
    <td align="center"><?php echo $row["username"]; ?></td>
    <td align="center"><?php echo $row["email"]; ?></td>
    <td align="center"><?php echo $row["password"]; ?></td>
    <td align="center"><?php echo $row["comment"]; ?></td>
    <td align="center"><?php echo $row["create_datetime"]; ?></td>
    <td align="center">
    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
    </td>
    <td align="center">
    <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
    </td>
</tr>
<?php $count++; } ?>

</tbody>
</table>

</div>
</body>
</html>
