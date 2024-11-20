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
    <title>About</title>
    <link
  rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

<div class="heading" style="background:url(ocean.jpg) no-repeat;">
<div style="width:85rem;">
<h3  style=" animation:fadeIn 2s linear backwards 1s;  font-size:4vw;color:white;text-align:center;">"Everyday is a chance to get better,Don't waste it"</h3>
</div>
</div>
<section class="about">
<div class="image">
    <img src="mountain.jpg" alt="" >
</div>
<div class="content">
    <h3>Why choose us?</h3>
    <p>We're truly humbled to have received volumes of positive customer feedback for our services. This appreciation from our prestigious clients is more valuable than any award for us. As a customer-driven travel company, our priority has always been their satisfaction. Therefore, our dedicated team of experts endeavours to achieve the goal of making our customers happy.</p>
    <div class="icon-container">
        <div class="icon">
            <i class="fas fa-map"></i>
            <span onclick="s1()" style="cursor:pointer;">Top Destination</span>
        </div>
        <div class="icon">
            <i class="fas fa-hand-holding-usd"></i>
            <span onclick="s2()" style="cursor:pointer;">Affordable Price</span>
        </div>
        <div class="icon">
            <i class="fas fa-headset"></i>
            <span onclick="s3()" style="cursor:pointer;">24/7 guide service</span>
        </div>
    </div>
</div>
</section>
<section class="pack" style="background: var(--light-bg)">
<h1 class="heading-title">Reviews</h1>
  <div class="swiper-container sliding">
          <div class="swiper-wrapper">
              <div class="swiper-slide" style="padding:2rem;border:var(--border);background:var(--white);text-align:center;box-shadow: var(--box-shadow);user-select: none; overflow:hidden;">
              <img src="man1.jpg" alt="" style=" height:7rem;width:7rem;border-radius:100%;">
            <h3 style="font-size:2vh;color:var(--black);padding-bottom:0;">Nick Deo</h3>
                <span style=" font-size: 1.5rem;color:var(--main-color);display:block;padding-top:0;">Traveler</span>
                <div class="star" style="font-size:1.5vh;color:var(--main-color);">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <p style="font-size:1.5rem;color:var(--light-black);line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;font-weight: 600;">Very good services provided for us.</p>
                
              </div>
              <div class="swiper-slide" style="padding:2rem;border:var(--border);background:var(--white);text-align:center;box-shadow: var(--box-shadow);user-select: none; overflow:hidden;">
              <img src="man2.jpg" alt="" style=" height:7rem;width:7rem;border-radius:100%;">
            <h3 style="font-size:2vh;color:var(--black);padding-bottom:0;">Rinku Sinha</h3>
                <span style=" font-size: 1.5rem;color:var(--main-color);display:block;padding-top:0;">Engineer</span>
                <div class="star" style="font-size:1.5vh;color:var(--main-color);">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <p style="font-size:1.5rem;color:var(--light-black);line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;font-weight: 600;">Thanks for nice service.</p>
                
            </div>
              <div class="swiper-slide" style="padding:2rem;border:var(--border);background:var(--white);text-align:center;box-shadow: var(--box-shadow);user-select: none; overflow:hidden;">
              <img src="man3.jpg" alt="" style=" height:7rem;width:7rem;border-radius:100%;">
            <h3 style="font-size:2vh;color:var(--black);padding-bottom:0;">William Deo</h3>
                <span style=" font-size: 1.5rem;color:var(--main-color);display:block;padding-top:0;">Entrepreneur</span>
                <div class="star" style="font-size:1.5vh;color:var(--main-color);">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p style="font-size:1.5rem;color:var(--light-black);line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;font-weight: 600;">I really enjoyed your services.Thanks for making my holidays amazing.</p>
                
            </div>
              <div class="swiper-slide" style="padding:2rem;border:var(--border);background:var(--white);text-align:center;box-shadow: var(--box-shadow);user-select: none; overflow:hidden;"><img src="man4.jpg" alt="" style=" height:7rem;width:7rem;border-radius:100%;">
            <h3 style="font-size:2vh;color:var(--black);padding-bottom:0;">David Watson</h3>
                <span style=" font-size: 1.5rem;color:var(--main-color);display:block;padding-top:0;">Doctor</span>
                <div class="star" style="font-size:1.5vh;color:var(--main-color);">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <p style="font-size:1.5rem;color:var(--light-black);line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;font-weight: 600;">Thanks</p>
                
            </div>
              <div class="swiper-slide" style="padding:2rem;border:var(--border);background:var(--white);text-align:center;box-shadow: var(--box-shadow);user-select: none; overflow:hidden;"><img src="man5.jpg" alt="" style=" height:7rem;width:7rem;border-radius:100%;">
            <h3 style="font-size:2vh;color:var(--black);padding-bottom:0;">Kim Mih</h3>
                <span style=" font-size: 1.5rem;color:var(--main-color);display:block;padding-top:0;">traveler</span>
                <div class="star" style="font-size:1.5vh;color:var(--main-color);">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p style="font-size:1.5rem;color:var(--light-black);line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;font-weight: 600;">Excellent</p>
                
            </div>
              
          <div class="swiper-pagination"></div>
      </div>
      </section>
<!-- <section class="review">
    <h1 class="heading-title">Reviews</h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide ">
            <img src="man1.jpg" alt="" >
            <h3>Nick Deo</h3>
                <span>traveler</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Very good services provided for us.</p>
                
                
            </div>
            <div class="swiper-slide slide">
            <img src="man2.jpg" alt="" ">
            <h3>John Deo</h3>
                <span>traveler</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <p>I am using tour and travel services and my first experience is awesome. </p>
                
                
            </div>
            <div class="swiper-slide slide">
            <img src="man3.jpg" alt="" >
            <h3>J Thomson</h3>
                <span>traveler</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                   
                </div>
                <p>The website is very nice and convinient to use.</p>
                
                
            </div>
            <div class="swiper-slide slide">
            <img src="man4.jpg" alt="" >
            <h3>Shane Watson</h3>
                <span>traveler</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Nice</p>
                
                
            </div>
            <div class="swiper-slide slide">
            <img src="man5.jpg" alt="" >
            <h3>David Loe</h3>
                <span>traveler</span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <p>Trustable... </p>
                
                
            </div>
        </div>
        
    </div>
</section>  -->

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
<script src="https://unpkg.com//swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
<script src="script1.js"></script>
</body>
</html>