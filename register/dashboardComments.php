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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Comments</title>
    <link rel="stylesheet" href="../css/dashboardStyle.css">
</head>

<body>
<nav class="navbari">
        <a class="name" href="#"><b>3BFitness</b></a>
        <ul>
            <li>
                <a href="logout.php">Hi,  <?php echo ucwords($_SESSION['NAME']); ?>  - Log out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
    <div>
            <nav class="sidebar">
                <div class="sidebar">
                    <ul>
                        <li>
                        <a href="../index.html">
                            <span data-feather="home"></span>
                            Home 
                        </a>
                    </li>
                    <?php if ($_SESSION['ROLE'] == 'admin') { ?>
                        <h6>Catalog</h6>
                            <li>
                                <a href="dashboard.php">
                                <span data-feather="users"></span>
                                Dashboard</a>
                            </li>
                            <li>
                                <a href="proteins_products.php">
                                <span data-feather="users"></span>
                                Products</a>
                            </li>
                            <li>
                                <a class="active" href="dashboardComments.php">
                                <span data-feather="users"></span>
                                    Comments</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <main role="main">
                <div>
                    <h1> Dashboard - Comments </h1>
                </div>
                <div>
                    <table>
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
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>