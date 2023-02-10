<?php

session_start();
include_once('dbConnection.php');

if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
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
                            <li >
                                <a href="dashboard.php" class="active">
                                    <span data-feather="users"></span>
                                    Dashboard <span></span>
                                </a>
                            </li>
                            <li>
                                <a href="proteins_products.php">
                                    <span data-feather="users"></span>
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="dashboardComments.php">
                                    <span data-feather="users"></span>
                                    Comments
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <main role="main" >
                <div>
                    <h1>Dashboard</h1>
                </div>
                <div>
                    <table>
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