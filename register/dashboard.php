<?php

session_start();
include_once('dbConnection.php');

if (!isset($_SESSION['ID'])) {
    header("Location:../index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/homebar_style.css">
</head>

<body>
<header>
        <nav class="sidebar">
            <div class="logo">
                <a href="#">
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
                    <span data-feather="home"></span>
                    Home</a>
                </li>
                <?php if ($_SESSION['ROLE'] == 'admin') { ?>
                <li >
                    <a href="dashboard.php" class="active">
                    <span data-feather="users"></span>
                    Dashboard</a>
                </li>
                <li>
                    <a href="proteins_products.php">
                    <span data-feather="users"></span>
                    Products</a>
                </li>
                <li>
                    <a href="dashboardComments.php">
                    <span data-feather="users"></span>
                    Comments</a>
                </li>
                <li>
                    <a href="logout.php">Hi,  <?php echo ucwords($_SESSION['NAME']); ?>  - Log out</a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </header>

    <div class="container-fluid">
        <div>
            <main role="main" >
                <div>
                    <table>
                    <h1>Dashboard</h1>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Created</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($_SESSION['ROLE'] == "admin") {
                                $query = "SELECT * FROM users";
                            } else {
                                $role = $_SESSION['ROLE'];
                                $query = "SELECT * FROM users WHERE role = '$role'";
                            }

                            $result = $con->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_array()) {
                            ?>

                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><?php echo $row['role'] ?></td>
                                <td><?php echo date('d-M-Y', strtotime($row['created'])) ?></td>
                                <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                            </tr>

                            <?php    }
                            } else {
                                echo "<h2>No record found!</h2>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>