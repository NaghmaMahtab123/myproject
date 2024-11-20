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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">T</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="bill.php">Booking History</a>
            <a href="logout.php">Logout</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(tourslide1.jpg) no-repeat;">
                    <div class="content">
                        
                        <h3>“Climb the mountain so you can see the world, not so the world can see you.”</h3>
                        <span>explore,discover,travel.</span>
                        
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(tourslide2.jpg) no-repeat;">
                    <div class="content">
                    <h3>“The world is a book and those who do not travel read only one page.”</h3>
                        <span>explore,discover,travel.</span>
                        
                        
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(tourslide3.jpg) no-repeat;">
                    <div class="content">
                    <h3>“Great things never came from comfort zones.”</h3>
                        <span>explore,discover,travel.</span>
                        
                        
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(tourslide4.jpg) no-repeat;">
                    <div class="content">
                    <h3>“Fear is only temporary. Regrets last forever.”</h3>
                        <span>explore,discover,travel.</span>
                       
                        
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
<section class="services">
    <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
        <a href="adventure.php">
            <div class="box">
                <img src="adventure_icon.png"  alt="">
                <h3 style="font-size: 1.7rem;"> Adventure</h3>
            </div>
</a>
<a href="pilgrimage.php">
            <div class="box">
                <img src="tour_guide_icon.png" alt="">
                <h3 style="font-size: 1.7rem;"> Pilgrimage</h3>
            </div>
            </a>
            <a href="campfire.php">
            <div class="box">
                <img src="campfire_icon.png" alt="">
                <h3 style="font-size: 1.7rem;"> Camp fire</h3>
            </div>
            </a>
            <a href="trekking.php">
            <div class="box">
                <img src="trekking_icon.png" alt="">
                <h3 style="font-size: 1.7rem;"> Trekking</h3>
            </div>
            </a>
            <a href="hillstation.php">
            <div class="box">
                <img src="icons8-mountain-50.png" alt="">
                <h3 style="font-size: 1.7rem;"> Hill Station</h3>
            </div>
            </a>
            <a href="beach.php">
            <div class="box">
                <img src="icons8-holiday-50.png" alt="">
                <h3 style="font-size: 1.7rem;"> Beach</h3>
            </div>
            </a>
        </div>
   
</section>
<section class="home-about">
    
<div class="about-img" style="background:url('mountain.jpg');">
</div>
    
    <div class="about-content"><h1 align="center">About Us</h1><p> Our dedicated travel team diligently works round-the-clock to design the best travel experiences for the customers. The skilled team spends considerable amounts of time ideating tour packages that guarantee to make travelling with us an experience like no other. We select the finest hotels in every category, boast an excellent personal fleet of vehicles for transportation.</p>
    <a href="about.php" class="btn">Read more</a>
</div>
    
</section>
<!-- <section class="home-offer" style="text-align: center;">
<div class="content" style="max-width:70rem;
    margin:0 auto;">
    <h3 style="font-size: 4rem;
    color:var(--black);">UPTO 50% OFF</h3>
    <p style="font-size: 1.5rem;
    color:var(--light-black);
    line-height: 2;
    padding:1rem 0;">Grab your opportunities in this summer season and get upto 50% discount.</p>
    <a href="book.php" class="btn">Book Now</a>
</div>
</section> -->

<section class="pack">
    <h1 class="heading-title">PACKAGES</h1>
  <div class="swiper-container sliding">
          <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image:url(paris.jpg)">
            <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">PARIS</h3>
        </div>
              <div class="swiper-slide" style="background-image:url(malaysia.jpg)">
              <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">MALAYSIA</h3>
            </div>
              <div class="swiper-slide" style="background-image:url(dubai.jpg)">
              <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">DUBAI</h3>
            </div>
              <div class="swiper-slide" style="background-image:url(shimla.jpg)">       <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">SHIMLA</h3>
            </div>
              <div class="swiper-slide" style="background-image:url(chennai.jpg)">       <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">CHENNAI</h3>
            </div>
              <div class="swiper-slide" style="background-image:url(singapore.jpg)">       <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">SINGAPORE</h3>
            </div>
              <div class="swiper-slide" style="background-image:url(kolkata.jpg)">       <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">KOLKATA</h3>
            </div>
              <div class="swiper-slide" style="background-image:url(sikkim.jpg)">       <h3 style="text-align:center;font-size:4vh;color:var(--white);padding:1rem 0;">SIKKIM</h3>
            </div>
          </div>
          <div class="swiper-pagination"></div>
      </div>
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
    <!-- <div class="box">
        <h3>Extra Links</h3>
    <a href="#"><i class="fas fa-angle-right"></i>Ask Question</a>
    <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
    </div> -->
    
    <div class="box">
        <h3>Contact Info</h3>
    <a ><i class="fas fa-phone"></i>91+566788567</a>
    <a ><i class="fas fa-phone"></i>91+4545678</a>
    <a href="mailto: abc@example.com"><i class="fas fa-envelope"></i>naghma@gmail.com</a>
    <a ><i class="fas fa-map"></i>Jamshedpur,India-55667</a>
    </div>
    <div class="box">
        <h3>Follow Us</h3>
    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a>
    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i>Twitter</a>
    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i>linkedIn</a>
    </div>

</div>
<div class="credit">Created by <span> Naghma Mahtab</span> |All right reserved</div>
</section>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
<script src="script1.js"></script>
</body>
</html>