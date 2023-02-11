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
    <link rel="stylesheet" href="./css/footer_style.css">
    <link rel="stylesheet" href="./css/proteins.css">
    <!-- ------------------------- Icons CSS --------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Proteins Combinations</title>
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
                    <a href="workouts.html">
                    <i class='bx bx-dumbbell' >
                    </i>Workouts Plans</a>
                </li>
                <li>
                    <a class="btn-active" href="proteins.php">
                    <i class='bx bxs-capsule' ></i>
                        Proteins Combinations</a>
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
    <main>
       <div class="kombinimi"> <h3>Proteina te ndryshme nga "OLIMP Company"</h3> </div>
            <div class="kombinimi-par"> 
                <div class="kombinim">
                 <div class="flip-card-inner">
                     <div class="kombinimi-front">
                        <img src="./images/proteins/gain-bolic.png" alt="GainBolic" id="product_image">
                         <p class="title" id="product_name">Gain Bolic 6000</p>
                     </div>
                     <div class="flip-card-back">
                         <p class="title" id="product_info">Olimp Gain Bolic 6000 po vjen në shpëtim! Është një suplement protein-karbohidrat që në një mënyrë të lehtë 
                             dhe të përshtatshme do t'ju lejojë të plotësoni dietën tuaj ditore me një pjesë të madhe të kalorive ushqyese.</p>
                     </div>
                 </div>
                </div>
         
                <div class="kombinim">
                 <div class="flip-card-inner">
                     <div class="kombinimi-front">
                        <img src="./images/proteins/bcaa.png" alt="BCAA" id="product_image">
                         <p class="title" id="product_name">BCAA 20:1:1</p>
                     </div>
                     <div class="flip-card-back">
                         <p class="title" id="product_info">Aminoacidet BCAA janë përbërësi bazë i muskujve dhe përbëjnë pothuajse 40% të peshës së tyre të thatë!
                             BCAA Xplode™ janë tulla anabolike të domosdoshme që do t'ju ndihmojnë të ndërtoni muskuj të fortë.</p>
                     </div>
                 </div>
                </div>

                <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="./images/proteins/creatine.png" alt="Creatine" id="product_image">
                            <p class="title" id="product_name">Creatine Monohydrate</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Kreatinë monohidrat në pluhur, ushqim i destinuar për të përballuar shpenzimet e përpjekjeve
                                 intensive muskulare, veçanërisht për njerëzit sportivë. <br> Produkti jep kreatinë monohidrate të pastër farmaceutike.</p>
                        </div>
                    </div>
                   </div>
                

                <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="./images/proteins/whey.png" alt="Whey" id="product_image">
                            <p class="title" id="product_name">Whey Complex</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Kreatinë monohidrat në pluhur, ushqim i destinuar për të përballuar shpenzimet e përpjekjeve
                                 intensive muskulare, veçanërisht për njerëzit sportivë. <br> Produkti jep kreatinë monohidrate të pastër farmaceutike.</p>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
    </main>
</body>
</html>