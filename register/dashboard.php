<?php

session_start();
include_once('dbConnection.php');

if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
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
    <title>Dashboard</title>
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
                            <a class="nav-link active" href="../index.html">
                                <span data-feather="home"></span>
                                Home 
                            </a>
                        </li>
                        <?php if ($_SESSION['ROLE'] == 'admin') { ?>
                        <h6>Catalog</h6>
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span data-feather="users"></span>
                                    Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboardComments.php">
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
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
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
    <script>
        feather.replace();
    </script>
</body>
</html>