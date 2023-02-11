<?php
    session_start();
    if (!isset($_SESSION['ID'])) {
        header("Location:register/login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ------------------------- Style CSS --------------------------- -->
    <link rel="stylesheet" href="./css/homebar_style.css"> 
    <link rel="stylesheet" href="./css/workoutss.css">
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- ------------------------- Icons CSS --------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Workouts Plans</title>
</head>

<body>
    <!-- ------------------------- Home Bar ---------------------------- -->
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <img src="./images/3bfitness.png" alt="3bfintesslogo" class="logoimg">
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
                    <a class="btn-active" href="workouts.html">
                    <i class='bx bx-dumbbell' >
                    </i>Workouts Plans</a>
                </li>
                <li>
                    <a href="proteins.php">
                        <i class='bx bxs-capsule' ></i>
                        Proteins</a>
                </li>
                <?php if ($_SESSION['NAME'] == '') { ?>
                <li>
                    <a href="register/login.php" >
                    <i class='bx bx-log-in'></i>
                    Log In</a>
                </li>
                <li>
                    <a href="register/register.php" >
                    <i class='bx bx-user-plus'></i>
                    Register</a>
                </li>
                <?php } ?>
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
    
    <!-- ---------------------------Baza---------------------------------- -->
    <body>
        
        <div class="tabela">
        <table> <caption><strong><i> Plani i Ushtrimeve</i></strong></caption>
            <thead>
            <tr class="row100 head">
            <th></th>
            <th>E Hene</th>
            <th>E Marte</th>
            <th>E Merkure</th>
            <th>E Enjte</th>
            <th>E Premte</th>
            <th>E Shtune</th>
            <th>E Diele</th>
            </tr>
            </thead>
            <tbody>
            <tr class="row1">
            <td>Gjoks</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            <td class="pushimi" rowspan="8">Pushim</td>
            </tr>
            <tr class="row2">
            <td>Shpin</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            
            </tr>
            <tr class="row3">
            <td>Triceps</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            
            </tr>
            <tr class="row4">
            <td>Biceps</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            
            </tr>
            <tr class="row5">
            <td>Krah</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            
            </tr>
            <tr class="row6">
            <td>Kembe</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✘</td>
            <td>✓</td>
            
            </tr>
            <tr class="row7">
            <td>Bark</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✓</td>
            <td>✘</td>
            <td>✓</td>
            
            </tr>
            </tbody>
            </table>
        </div>

        <div class="wourkoutsss">
            <div class="chest">
                <button onclick="location.href='./workouts/chest.html';"> Gjoks
                </button>
            </div>
            <div class="backsite">
                <button onclick="location.href='./workouts/lats.html';"> Shpin
                </button>
            </div>
            <div class="trieceps">
                <button onclick="location.href='./workouts/triceps.html';"> Triceps
                </button>
            </div>
            <div class="biceps">
                <button onclick="location.href='./workouts/biceps.html';"> Biceps
                </button>
            </div>
        
            <div class="shoulder">
                <button onclick="location.href='./workouts/shoulders.html';"> Krah
                </button>
            </div>
            <div class="legs">
                <button onclick="location.href='./workouts/hamstrings.html';"> Kembe
                </button>
            </div>
            <div class="abs">
                <button onclick="location.href='./workouts/abs.html';"> Bark
                </button>
            </div>
        </div>
    </body>
</html>

