<?php 
    include_once('../products/productConnection.php');
    require('dbConnection.php');

?>
<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard - Products</title>
        <link rel="stylesheet" href="../css/homebar_style.css">
        <link rel="stylesheet" href="../css/dashboardStyle.css">
        <!-- ------------------------- Icons CSS --------------------------- -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    
    <body>
    
        <div class="container-fluid">
            <div>
                <main role="main">
                    <div>
                        <table>
                            <h1> Produktet e Shtuara: </h1>
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Photo</th>
                                    <th>Name of Product</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    $sql = "SELECT * FROM produktet ORDER BY koha_e_shtimit DESC";
                                    $rezultati = mysqli_query($lidhja, $sql);

                                    while($produkti = mysqli_fetch_assoc($rezultati)){
                                        echo "<tr>";
                                            echo "<td>" . $produkti['id'] . "</td>";
                                            echo "<td><img src='../images/proteins/" . $produkti['foto_emri'] . "' height='150'></td>";
                                            echo "<td>" . $produkti['emri'] . "</td>";
                                            echo "<td>" . $produkti['pershkrimi'] . "</td>";
                                            echo "<td>" . $produkti['koha_e_shtimit'];
                                        echo "</tr>";
                                    }
                                    
                                    echo "</table>";

                                mysqli_close($lidhja);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
