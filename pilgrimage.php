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
            <a href="Packages_details.php">Package Details</a>

        </nav>
        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>
    <section class="adventure">
        
                <div class=" slide" style="background:url(pilgrimage.jpg) no-repeat;">
                    <div class="content">
                        <h3 style=" animation:fadeIn 2s linear backwards 1s;  font-size:6vw;">“Have faith in god and he will never let you fail”</h3>
                    </div>
                </div>      
    </section>
    <section class="description" >
    <p >Every religion has its significance and a proposed way of life to live it as ideally as possible. It is possible to get a glimpse of each of them and revel in the rich knowledge, the way followers of different faiths try to connect with their Creator at various pilgrimage sites in the entire World.

Muslims can spread their praying carpets, close their eyes chanting hymns from Quran with palms spread in worship of Allah Almighty in any of the great mosques found in different corners of the country. Hindus can embark on an arduous journey to holy places like Vaishno Devi,

Amarnath and Chardham or they can join their hands in devotion and perform various rituals during their visit to temples where God is believed to have manifested Himself in different form and incarnations like Jyotirlingas, Saktipeeths, etc. Sikhs can choose among the different Gurudwaras set up by their Gurus, beginning with Guru Nanak just as the Christians can find a Church that serves their spiritual and religious needs.

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