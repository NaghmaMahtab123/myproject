<?php
session_start();
if(!$_SESSION['name']){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
    <a href="home.php" class="logo">T</a>
            <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="bill.php">Booking History</a>
          

        </nav>
        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>
    <section class="adventure">
        
                <div class=" slide" style="background:url(adventure.jpg) no-repeat;">
                    <div class="content">
                        <h3 style=" animation:fadeIn 2s linear backwards 1s;  font-size:6vw;">“If we were meant to stay in one place, we’d have roots instead of feet.”</h3>
                    </div>
                </div>      
    </section>
    <section class="description" >
    <p >It is no doubt that adventure tour in World will not only fascinates and captivates the admiration 
    and imagination of adventure seekers but it also gives usual vacationers something different to enjoy and mesmerize. Even these fun-filled
    activities provide the much-needed break from the monotonous work routines of business travelers and let them to explore the real thrill and 
    beauty of nature.
</p>
    </section>
    <section class="footer">
<div class="box-container">
    <div class="box">
        <h3>Quick Links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
    </div>
    
    
    <div class="box">
        <h3>Contact Info</h3>
    <a href="#"><i class="fas fa-phone"></i>91+566788567</a>
    <a href="#"><i class="fas fa-phone"></i>91+4545678</a>
    <a href="#"><i class="fas fa-envelope"></i>naghma@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>Jamshedpur,India-55667</a>
    </div>
    <div class="box">
        <h3>Follow Us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
    <a href="#"><i class="fab fa-linkedin"></i>linkedIn</a>
    </div>

</div>
<div class="credit">Created by <span> Naghma Mahtab</span> |All right reserved</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>