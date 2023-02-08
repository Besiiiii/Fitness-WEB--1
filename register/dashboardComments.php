<?php

session_start();
// Include database connection file
include_once('config.php');

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-info sticky-top bg-info flex-md-nowrap p-10">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="" style="color: #5b5757;"><b>3BFitness</b></a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">Hi, <?php echo ucwords($_SESSION['NAME']); ?> Log out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-info sidebar" style="height: 569px">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column" style="color: #5b5757;">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php if ($_SESSION['ROLE'] == 'super_admin') { ?>
                            <h6>Catalog</h6>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span data-feather="users"></span>
                                    Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboardComments.php">
                                    <span data-feather="users"></span>
                                    Comments
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h1 class="h2"> Dashboard - Comments </h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
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
                            if ($_SESSION['ROLE'] == "super_admin") {
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