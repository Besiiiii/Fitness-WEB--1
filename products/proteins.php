<?php
    session_start();
    if (!isset($_SESSION['ID'])) {
        header("Location:../register/login.php");
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
    <link rel="stylesheet" href="../css/homebar_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <link rel="stylesheet" href="../css/proteins.css">
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
                    <a class="btn-active" href="proteins.php">
                    <i class='bx bxs-capsule' ></i>
                    Proteins Combinations</a>
                </li>

                <?php if ($_SESSION['NAME'] == '') { ?>

                <li>
                    <a href="../register/login.php" >
                    <i class='bx bx-log-in'></i>
                    Log In</a>
                </li>
                <li>
                    <a href="../register/register.php" >
                    <i class='bx bx-user-plus'></i>
                    Register</a>
                </li>

                <?php } ?>

                <li>
                <?php if ($_SESSION['ROLE'] == 'admin') { ?>
                    <a href="../register/dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    Dashboard</a>
                </li>

                    <?php } ?>
                    
                <li>
                    <a href="../register/logout.php">
                    <i class='bx bx-log-out' ></i>
                    Hi,  <?php echo ucwords($_SESSION['NAME']); ?>  - Log out</a>
                </li>
            </ul>
        </nav>
    </header>
<!-- ---------------------------Baza---------------------------------- -->
<?php if ($_SESSION['ROLE'] == 'admin') { ?>
    <div class="shto">
        <?php //include ('shto_produkt.php'); ?>
        <form action="shto_produkt.php" method="post" enctype="multipart/form-data">
            Emri: <input type="text" name="emri"><br>
            Pershkrimi: <textarea name="pershkrimi"></textarea><br>
            Foto: <input type="file" name="foto"><br>
            <input type="submit" value="Shto produktin">
        </form>
    </div>
<?php } ?>

    <main>
       <!-- <div class="kombinimi"> <h3>Proteina te ndryshme nga "OLIMP Company"</h3> </div>
            <div class="kombinimi-par"> 
                <div class="kombinim">
                 <div class="flip-card-inner">
                     <div class="kombinimi-front">
                        <img src="../images/proteins/gain-bolic.png" alt="GainBolic" id="product_image">
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
                        <img src="../images/proteins/bcaa.png" alt="BCAA" id="product_image">
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
                            <img src="../images/proteins/creatine.png" alt="Creatine" id="product_image">
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
                            <img src="../images/proteins/whey.png" alt="Whey" id="product_image">
                            <p class="title" id="product_name">Whey Complex</p>
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
                            <img src="../images/proteins/knockout.png" alt="Knockout" id="product_image">
                            <p class="title" id="product_name">Knockout 2.0</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Knockout 2.0 është një përforcues stërvitje me 
                                një formulë të bazuar në doza të zgjedhura saktësisht të substancave thelbësore <br> që rrisin aftësitë tuaja të stërvitjes.</p>
                        </div>
                    </div>
                   </div>
                   
                   <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="../images/proteins/blackweiler.png" alt="Blackweiler" id="product_image">
                            <p class="title" id="product_name">Blackweiler Shred</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Produkti është një përbërje e aminoacideve 
                                (beta-alanine, L-arginine dhe L-citrulline), ekstrakte bimore 
                                (wasabi, kakao, xhenxhefil, çaj jeshil, piper i zi dhe piper i kuq) 
                                dhe kafeinë, e plotësuar gjithashtu me vitamina dhe minerale.</p>
                        </div>
                    </div>
                   </div>                  
                   
                   <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="../images/proteins/salmon.png" alt="Gold Salmon" id="product_image">
                            <p class="title" id="product_name">Gold Salmon</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Gold Salmon 12000 Amino Mega Tabs® është hidroliza i proteinës së salmonit të 
                                Atlantikut të Veriut me cilësi më të lartë (SPH, ProGo™), 
                                duke siguruar aminoacide të absorbueshme menjëherë me një profil optimal.</p>
                        </div>
                    </div>
                   </div>                   
                   
                   <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="../images/proteins/redweiler.png" alt="Redweiler" id="product_image">
                            <p class="title" id="product_name">Redweiler</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Redweiler është një shembull i përsosur! 
                                Është një suplement revolucionar para stërvitjes që do t'ju lejojë të kryeni një stërvitje specifike me "shpejtësi të plotë",
                                 duke reduktuar, për shkak të pranisë së vitaminës B6, simptomat e rritjes së lodhjes.</p>
                        </div>
                    </div>
                   </div>                   
                   
                   <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="../images/proteins/micellar.png" alt="Micellar Casein" id="product_image">
                            <p class="title" id="product_name">Micellar Casein</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Kazeina Micellare është një proteinë e përsosur e natës,
                                 e cila mbron trupin nga efekti shkatërrues i urisë gjatë orëve të gjumit,
                                 duke siguruar furnizim të vazhdueshëm dhe rigjenerues të aminoacideve gjatë kësaj kohe.</p>
                        </div>
                    </div>
                   </div>
                   

                   <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="../images/proteins/flex.png" alt="Flex Xplode" id="product_image">
                            <p class="title" id="product_name">Flex Xplode</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Cilësia më e lartë e Flex Xplode është forca e tij më e madhe. Përbërësit aktivë të standardizuar, 
                                kombinimi unik i substancave aktive dhe shija e shijshme do të kënaqin të gjithë ata që zgjedhin këtë produkt.</p>
                        </div>
                    </div>
                   </div>


                   <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="../images/proteins/collaregen.png" alt="Collaregen" id="product_image">
                            <p class="title" id="product_name">Collaregen</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Kolagjeni në sasi të demonstruara në studimet klinike. 
                                Rezultatet e studimit klinik (1,2) tregojnë se marrja ditore e 10 g të hidrolizatit 
                                të kolagjenit të shkallës farmaceutike redukton dhimbjen te pacientët me osteoporozë të ijeve ose të gjurit.</p>
                        </div>
                    </div>
                   </div>


                   <div class="kombinim">
                    <div class="flip-card-inner">
                        <div class="kombinimi-front">
                            <img src="../images/proteins/carbonox.png" alt="Carbonox" id="product_image">
                            <p class="title" id="product_name">Carbonox</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title" id="product_info">Carbonox bazohet në burime të përpiluara me kujdes të karbohidrateve 
                                të zgjedhura sipas profileve të përcaktuara saktësisht të shkallës së tretjes dhe lëshimit 
                                të monosakarideve në qarkullimin e gjakut.</p>
                        </div>
                    </div>
                   </div> -->
                   <?php include ("../register/dashboardProducts.php"); ?>
                   
                <!-- </div>
            </div> -->
    </main>
</body>
</html>