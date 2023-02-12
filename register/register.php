<?php

include_once('dbConnection.php');

if (isset($_POST['submit'])) {

    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string(md5($_POST['password']));
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $role = $con->real_escape_string($_POST['role']);

    $query  = "INSERT INTO users (name,username,email,password,role) VALUES ('$name','$username','$email','$password','$role')";
    $result = $con->query($query);

    if ($result == true) {
        header("Location:login.php");
        die();
    } else {
        $errorMsg  = "You are not Registred..Please Try again";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/homebar_style.css">
    <link rel="stylesheet" href="../css/styleRegister.css">
    <!-- ------------------------- Icons CSS --------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <a href="../index.php">
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
                    <a href="../index.php">
                    <i class='bx bxs-home'></i>
                    Home</a>
                </li>
                <li>
                    <a href="../workouts.php">
                    <i class='bx bx-dumbbell' >
                    </i>Workouts Plans</a>
                </li>
                <li>
                    <a href="../proteins.php">
                        <i class='bx bxs-capsule' ></i>
                        Proteins Combinations</a>
                </li>
            </ul>
        </nav>
        </header>

    <div class="container">
        <h3>Register</h3>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php if (isset($errorMsg)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $errorMsg; ?>
                </div>
                <?php } ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required="">
                    </div>                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email" required="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
                    </div>
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <select class="form-control" name="role" required="">
                            <option value="">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="costumer">Costumer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <p>Already have account ?<a href="login.php"> Login</a></p>
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>