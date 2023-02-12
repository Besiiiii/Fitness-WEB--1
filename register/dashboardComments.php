<?php

session_start();
include_once('dbConnection.php');

if (!isset($_SESSION['ID'])) {
    header("Location:dashboard.php");
    exit();
}

?>
<style type="text/css">
    .nav-link {
        color: #f9f6f6;
        font-size: 14px;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Comments</title>
    <link rel="stylesheet" href="../css/homebar_style.css">
    <link rel="stylesheet" href="../css/dashboardStyle.css">
    <!-- ------------------------- Icons CSS --------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<header>
    <nav class="sidebar">
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
                    <a href="../index.php">
                    <i class='bx bxs-home'></i>
                    Home </a>
                </li>
                <?php if ($_SESSION['ROLE'] == 'admin') { ?>
                <li>
                    <a href="dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    Dashboard</a>
                </li>
                <li>
                    <a class="active" href="dashboardComments.php">
                    <i class='bx bxs-dashboard'></i>
                    Comments</a>
                </li>
                <li>
                    <a href="logout.php">
                    <i class='bx bxs-log-out'></i>
                    Hi,  <?php echo ucwords($_SESSION['NAME']); ?>  - Log out</a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <div class="container-fluid">
        <div>
            <main role="main">
                <div>
                    <table>
                        <h1> Dashboard - Comments </h1>
                        <thead>
                            <tr>
                                <th>Comment ID</th>
                                <th>Parent Comment ID</th>
                                <th>Comment</th>
                                <th>Name</th>
                                <th>Time of Comment Send</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($_SESSION['ROLE'] == "admin") {
                                $query = "SELECT * FROM tbl_comment";
                            } else {
                                $role = $_SESSION['ROLE'];
                                $query = "SELECT * FROM tbl_comment WHERE role = '$role'";
                            }

                            $result = $con->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_array()) {
                            ?>

                            <tr>
                                <td><?php echo $row['comment_id'] ?></td>
                                <td><?php echo $row['parent_comment_id'] ?></td>
                                <td><?php echo $row['comment'] ?></td>
                                <td><?php echo $row['comment_sender_name'] ?></td>
                                <td><?php echo $row['comment_at'] ?></td>
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