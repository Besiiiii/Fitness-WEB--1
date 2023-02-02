<?php
require('db.php');
include("auth_session.php");
$id=$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result); //return an associative array representing the next row in the result set for the result represented by the result parameter, where each key in the array represents the name of one of the result set's columns
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Update Administrators</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form">
<p>
<a href="../index.html">Home</a> 
<a href="dashboard.php">Dashboard</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Administrators</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$create_datetime = $_REQUEST['create_datetime'];

$update="update admin_users set username='".$username.
"', email='".$email.
"', password='".$password.
"', create_datetime='".$create_datetime.
"' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='admin_dashboard.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
  <div>
    <form name="form" method="post" action=""> 
      <input type="hidden" name="new" value="1" />
      <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
      <p><input type="text" name="username" placeholder="Enter Username"
      required value="<?php echo $row['username'];?>" /></p>
      <p><input type="text" name="email" placeholder="Enter Email" 
      required value="<?php echo $row['email'];?>" /></p>
      <p><input type="text" name="password" placeholder="Enter Password" 
      required value="<?php echo $row['password'];?>" /></p>    
      <p><input type="date" name="create_datetime" placeholder="Enter Date" 
      required value="<?php echo $row['create_datetime'];?>" /></p>
      <p><input name="submit" type="submit" value="Update" /></p>
    </form>
    <?php } ?>
  </div>
</div>
</body>
</html>