<?php
@include 'config.php';

session_start();
if(!$_SESSION['user_name']){
    header("location:login_form.php");
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
        
                <div class=" slide" style="background:url(beach.jpg) no-repeat;">
                    <div class="content">
                        <h3 style=" animation:fadeIn 2s linear backwards 1s;  font-size:6vw;">“Lets just go to the beach,forget everything and jut listen to the sound of wave crashing”</h3>
                    </div>
                </div>      
    </section>
    <section class="description" >
                <p >If you are planning to have a blasting holiday break in India and are looking forward to explore its beach destinations
        then why not try beach holiday packages offered by Us. Whether you love to enjoy
        the exotic party scene of Goa beaches or want to indulge yourself in the breathtaking beauty 
        of Kerala beaches or the tranquility of emerald beaches of Andaman capture your imagination, our packages include almost every beach
        location of the country along with various other comforts like accommodation, sightseeing tour guide, pick and drop facility </p>
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