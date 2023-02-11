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
    <link rel="stylesheet" href="./css/style.css">
    <!-- ------------------------- Icons CSS --------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>3B Fitness</title>
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
                    <a class="btn-active" href="index.php">
                    <i class='bx bxs-home'></i>
                    Home</a>
                </li>
                <li>
                    <a href="workouts.php">
                    <i class='bx bx-dumbbell' >
                    </i>Workouts Plans</a>
                </li>
                <li>
                    <a href="proteins.php">
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
   <!-- ---------------------- Comments ------------------------ -->
    <div class="login_system" id="login-system">
        <ul class="login">
        <li><a href="./comment/comment.php" class="login_text">
            <i class='bx bxs-message-add' ></i>
            Leave a Comment</a>
        </li>
        </ul>
    </div>
  <!-- ------------------------- Perfect Body ------------------------ -->
    <div class="perfectbody">
        <div class="perfectbodyText">
            <h2>Behu me trupin perfekt me <br><a href="workouts.html">-Planet e Ushtrimeve-</a> </h2>
            <h2> Dhe me <br><a href="proteins.html"> -Kombinimin e Suplementet-</a></h2>
            
        </div>
    </div>
  <!-- -------------------------- Pagesat -------------------------- -->  
    <div class="pagesatoutsite">
        
        <div class="pagesat">
        <label> Pagesa Mujore</label><br>
        <p> Meshkujt</p>
        <p class="qmimi"> 15 Euro</p><br>
        <p> Femrat</p>
        <p class="qmimi"> 10 Euro</p>
        </div>
        
        <div class="pagesat">
        <label class="gjysem"> Pagesa Gjysemvjetore</label><br>
        <p> Meshkujt</p>
        <p class="qmimi"> 55 Euro</p><br>
        <p> Femrat</p>
        <p class="qmimi"> 45 Euro</p>
        </div>
        
        <div class="pagesat">
            <label class="vjetore"> Pagesa Vjetore</label><br>
            <p> Meshkujt</p>
            <p class="qmimi"> 85 Euro</p><br>
            <p> Femrat</p>
            <p class="qmimi"> 75 Euro</p>
            </div>
    </div>


    <!-- ------------------------------About Us -------------------------- -->

    <div class="aboutus">
        <div class="tekstiAU"> <h1>Rreth Nesh </h1>
          <p> <strong>3B Fitness</strong> është një qendër profesionale e trajnimit me <br> më shumë se 10 vjetë. <br> Ne
          japim të gjitha llojet për trajnimin sa më te mir me <br> makinerit më moderne te kohës.  <br>
        -Gjindemi ne Gjakovë (Rruges per Pejë) . </p> 
          
        </div>
        <div class="fotoAU">
            
        </div>
    </div>

    <!-- ------------------------------Why US ? -------------------------- -->

    <div class="whyus">
        <div class="fotoWU"></div>
        <div class="tekstiWU"> <h1>Pse Tek Ne ? </h1>
            <p>Ne personalizojmë çdo stërvitje për t'ju ndihmuar të arrini <br> qëllimet tuaja. </p>
            <p>Trajnerët tanë personalë ju ndihmojnë të qëndroni të motivuar <br> ndërsa ne punojmë për të krijuar një orar të qëndrueshëm <br>stërvitjeje.</p>
        </div>
            
    </div>

    <!-- -----------------------------Slider Pictures ------------------------ -->

    <div class="image-slider">
        <h2>-Vendi i ushtrimeve-</h2>

    <div class="slideshow-container">

    <div class="mySlides fade">
        <img src="./images/slider/IMG_0596.JPG" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="./images/slider/IMG_0597.JPG" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="./images/slider/IMG_0598.JPG" style="width:100%">
    </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
        </div>
            <script>
                let slideIndex = 0;
                showSlides();
                
                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3500); // Change image every 3.5 seconds
                }
            </script>
    
    
    <!-- ---------------------------Footer Bar -------------------------- -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class='bx bxl-facebook' ></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-discord-alt' ></i></a>
                        <a href="#"><i class='bx bxl-youtube' ></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
   
</body>
</html>