<?php

include("dbConnection.php");
$id=$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result); //return an associative array representing the next row in the result set for the result represented by the result parameter, where each key in the array represents the name of one of the result set's columns
?>
 <?php
      $status = "";
      if(isset($_POST['new']) && $_POST['new']==1)
      {
      $id=$_REQUEST['id'];
      $name = $_REQUEST['name'];
      $username = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $created = $_REQUEST['created'];

      $update="update users set 
      name='".$name.
      "', username='".$username.
      "', email='".$email.
      "', password='".$password.
      "', created='".$created.
      "' where id='".$id."'";
      mysqli_query($con, $update) or die(mysqli_error());
      $status = "Record Updated Successfully. </br></br>
      <a href='dashboard.php'>View Updated Record</a>";
      echo '<p style="color:#FF0000;">'.$status.'</p>';
      }else {
    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ------------------------- Style CSS --------------------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/homebar_style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleRegister.css">
    <!-- ------------------------- Icons CSS --------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <script src="jquery-3.2.1.min.js"></script>
    <title>Comment</title>

  </head>

<body>
<?php
    session_start();
    if (!isset($_SESSION['ID'])) {
        header("Location:login.php");
        exit();
    }
?>
   <header>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <img src="../images/3bfitness.png" alt="3bfintesslogo" class="logoimg">
                </a>
                <div class="locations">
                    <a href="https://goo.gl/maps/fbq2JgwbzG8FaQZX8">
                    <h6>3BFitness</h6>
                    <i class='bx bx-current-location'><h3>Gjakova</h3></i>
                    </a>
                </div>
            </div>
            <ul>
                <li>
                    <a href="index.php">
                    <i class='bx bxs-home'></i>
                    Home</a>
                </li>
                <li>
                    <a href="workouts.php">
                    <i class='bx bx-dumbbell' >
                    </i>Workouts Plans</a>
                </li>
                <li>
                    <a href="proteins.php">
                        <i class='bx bxs-capsule' ></i>
                        Proteins Combinations</a>
                </li>
                <li>
                <?php if ($_SESSION['ROLE'] == 'admin') { ?>
                    <a href="register/dashboard.php">
                    <span data-feather="users"></span>
                    Dashboard</a>
                </li>
                    <?php } ?>
                <li>
                    <a href="register/logout.php">
                    <i class='bx bx-log-out' ></i>
                    Hi,  <?php echo ucwords($_SESSION['NAME']); ?>  - Log out</a>
                </li>
            </ul>
        </nav>
    </header>

        <div class="container">
          <h3>Update Users</h3>
            <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-6">
                  <form action="" method="POST">
                    <div class="form-group">
                      <input type="hidden" name="new" value="1" />
                      <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                    </div>
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name"
                      required value="<?php echo $row['name'];?>" />
                    </div>
                      <label for="name">Username:</label>
                      <input type="text" name="username" class="form-control" placeholder="Enter Username"
                      required value="<?php echo $row['username'];?>" />
                    </div>
                    <div class="form-group">
                      <label for="name">Email:</label>
                      <input type="text" name="email" class="form-control" placeholder="Enter Email" 
                      required value="<?php echo $row['email'];?>" />
                    </div>
                    <div class="form-group">
                      <label for="name">Password:</label>
                      <input type="text" name="password" class="form-control" placeholder="Enter Password" 
                      required value="<?php echo $row['password'];?>" />    
                    </div>
                    <div class="form-group">
                      <label for="name">Date:</label>
                      <input type="date" name="created" class="form-control" placeholder="Enter Date" 
                      required value="<?php echo $row['created'];?>" />
                    </div>
                    <div class="form-group">      
                      <p><input type="submit" name="submit" class="btn btn-primary" value="Update!"></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
</body>
</html>