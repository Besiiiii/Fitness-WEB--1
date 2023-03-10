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
    

    <title>Proteins</title>
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
                    Proteins </a>
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
    <div class="shtoj">
        <div class="shto">
        <h1>Shto Proteina</h1>
        <form action="shto_produkt.php" method="post" enctype="multipart/form-data">
            Emri: <input type="text" name="emri"><br>
            Pershkrimi: <textarea name="pershkrimi"></textarea><br>
            Foto: <input type="file" name="foto"><br>
            <input type="submit" value="Shto produktin">
        </form>
    </div>
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
                         <p class="title" id="product_info">Olimp Gain Bolic 6000 po vjen n?? shp??tim! ??sht?? nj?? suplement protein-karbohidrat q?? n?? nj?? m??nyr?? t?? leht?? 
                             dhe t?? p??rshtatshme do t'ju lejoj?? t?? plot??soni diet??n tuaj ditore me nj?? pjes?? t?? madhe t?? kalorive ushqyese.</p>
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
                         <p class="title" id="product_info">Aminoacidet BCAA jan?? p??rb??r??si baz?? i muskujve dhe p??rb??jn?? pothuajse 40% t?? pesh??s s?? tyre t?? that??!
                             BCAA Xplode??? jan?? tulla anabolike t?? domosdoshme q?? do t'ju ndihmojn?? t?? nd??rtoni muskuj t?? fort??.</p>
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
                            <p class="title" id="product_info">Kreatin?? monohidrat n?? pluhur, ushqim i destinuar p??r t?? p??rballuar shpenzimet e p??rpjekjeve
                                 intensive muskulare, ve??an??risht p??r njer??zit sportiv??. <br> Produkti jep kreatin?? monohidrate t?? past??r farmaceutike.</p>
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
                            <p class="title" id="product_info">Kreatin?? monohidrat n?? pluhur, ushqim i destinuar p??r t?? p??rballuar shpenzimet e p??rpjekjeve
                                 intensive muskulare, ve??an??risht p??r njer??zit sportiv??. <br> Produkti jep kreatin?? monohidrate t?? past??r farmaceutike.</p>
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
                            <p class="title" id="product_info">Knockout 2.0 ??sht?? nj?? p??rforcues st??rvitje me 
                                nj?? formul?? t?? bazuar n?? doza t?? zgjedhura sakt??sisht t?? substancave thelb??sore <br> q?? rrisin aft??sit?? tuaja t?? st??rvitjes.</p>
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
                            <p class="title" id="product_info">Produkti ??sht?? nj?? p??rb??rje e aminoacideve 
                                (beta-alanine, L-arginine dhe L-citrulline), ekstrakte bimore 
                                (wasabi, kakao, xhenxhefil, ??aj jeshil, piper i zi dhe piper i kuq) 
                                dhe kafein??, e plot??suar gjithashtu me vitamina dhe minerale.</p>
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
                            <p class="title" id="product_info">Gold Salmon 12000 Amino Mega Tabs?? ??sht?? hidroliza i protein??s s?? salmonit t?? 
                                Atlantikut t?? Veriut me cil??si m?? t?? lart?? (SPH, ProGo???), 
                                duke siguruar aminoacide t?? absorbueshme menj??her?? me nj?? profil optimal.</p>
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
                            <p class="title" id="product_info">Redweiler ??sht?? nj?? shembull i p??rsosur! 
                                ??sht?? nj?? suplement revolucionar para st??rvitjes q?? do t'ju lejoj?? t?? kryeni nj?? st??rvitje specifike me "shpejt??si t?? plot??",
                                 duke reduktuar, p??r shkak t?? pranis?? s?? vitamin??s B6, simptomat e rritjes s?? lodhjes.</p>
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
                            <p class="title" id="product_info">Kazeina Micellare ??sht?? nj?? protein?? e p??rsosur e nat??s,
                                 e cila mbron trupin nga efekti shkat??rrues i uris?? gjat?? or??ve t?? gjumit,
                                 duke siguruar furnizim t?? vazhduesh??m dhe rigjenerues t?? aminoacideve gjat?? k??saj kohe.</p>
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
                            <p class="title" id="product_info">Cil??sia m?? e lart?? e Flex Xplode ??sht?? forca e tij m?? e madhe. P??rb??r??sit aktiv?? t?? standardizuar, 
                                kombinimi unik i substancave aktive dhe shija e shijshme do t?? k??naqin t?? gjith?? ata q?? zgjedhin k??t?? produkt.</p>
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
                            <p class="title" id="product_info">Kolagjeni n?? sasi t?? demonstruara n?? studimet klinike. 
                                Rezultatet e studimit klinik (1,2) tregojn?? se marrja ditore e 10 g t?? hidrolizatit 
                                t?? kolagjenit t?? shkall??s farmaceutike redukton dhimbjen te pacient??t me osteoporoz?? t?? ijeve ose t?? gjurit.</p>
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
                            <p class="title" id="product_info">Carbonox bazohet n?? burime t?? p??rpiluara me kujdes t?? karbohidrateve 
                                t?? zgjedhura sipas profileve t?? p??rcaktuara sakt??sisht t?? shkall??s s?? tretjes dhe l??shimit 
                                t?? monosakarideve n?? qarkullimin e gjakut.</p>
                        </div>
                    </div>
                   </div> -->
                   <?php include ("../register/dashboardProducts.php"); ?>
                   
                <!-- </div>
            </div> -->
    </main>
</body>
</html>