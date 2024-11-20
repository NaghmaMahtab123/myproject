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
    <title>Package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
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
<h3  style=" animation:fadeIn 2s linear backwards 1s;  font-size:4vw;color:white;text-align:center;">"Don't be tourist be a traveller"</h3>
</div>
</div>
<section class="package">
    <h1 class="heading-title">Our Packages</h1>
    <h3 style="text-align:center;margin-bottom: 3rem;font-size: 3rem;text-transform: uppercase;color:var(--main-color);">INDIA & AROUND HOLIDAY PACKAGES</h3>
    <div class="box-container box-contain2" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(30rem,1fr));gap:2rem;">
    <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white); ">
            <div class="image "><img src="chennai.jpg" alt=""  style="transition:2s linear;" ></div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">CHENNAI</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹20000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Chennai is the capital city of Tamil Nadu. It is the political and cultural hub of Tamil Nadu and epitome of Dravidian movement in India.Chennai is referred as gateway to South India. It may not have a Red Fort or a Marine Drive or a Victoria Memorial, but it is India’s oldest modern city. 
                </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
    </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
            <div class="image"><img src="shimla.jpg" alt="" style="transition:2s linear;"  ></div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">SHIMLA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹15000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">One of the most stunning hill resorts, Shimla is one of the most popular hill stations in northern India. Situated at an altitude of 2,205 meters, it used to be the summer capital of British India with a well-planned architecture. The town is famous for pleasant walking experiences on hillsides surrounded by pine and oak forests.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
            <div class="image">
                <img src="Kashmir.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">KASHMIR</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹18000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Kashmir is the northernmost part of India as per the geography. Earlier, the region between the Pir Panjal Mountain Range and the Great Himalayas was known as Kashmir. However, post the mid 19th century, this region’s borders were extended to cover a larger area.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="sikkim.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">SIKKIM</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹17000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Sikkim, state in India,is located in the northeastern part of the country, in the eastern Himalayas. It is one of the smallest states in India. Sikkim is bordered by the Tibet Autonomous Region of China to the north and northeast, by Bhutan to the southeast, by the Indian state of West Bengal to the south, and by Nepal to the west. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="rajasthan.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">RAJASTHAN</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹15000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Rajasthan ‘Land of Kings’ or ‘Land of Kingdom’ is India’s largest state by area. The state located on northwest part of country and is a home of cultural diversity. Its features include the ruins of Indus Valley Civilization, Temples, Forts and Fortresses in almost every city. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="mumbai.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">MUMBAI</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹10000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Mumbai (also known as Bombay, the official name until 1995) is the capital city of the Indian state of Maharashtra.Mumbai lies on the Konkan coast on the west coast of India and has a deep natural harbour. In 2008, Mumbai was named an alpha world city. It is also the wealthiest city in India, and has the highest number of millionaires and billionaires among all cities in India.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="hydrabad.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">HYDRABAD</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹20000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Hyderabad, is the capital of the state Telangana, India. It also goes by its sobriquet City of Pearls. As of 2010 it is the sixth most populous city and sixth-most populous urban agglomeration in India. Hyderabad was founded by Muhammad Quli Qutb Shah in 1591 on the banks of Musi. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="mountain.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">KOLKATA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹10250</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Kolkata  is the capital of  the state of West Bengal in India. It is second largest city in India (after Mumbai) and is located on the east bank of the major Hooghly River. Bengali is the most widely spoken language, though Hindi and English are also spoken and understood.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <!--  -->
  
       

        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="delhi.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">DELHI</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹12500</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Delhi Tourism, a government undertaking facilitating tourism since 1975 will take you to a guided tour of the Delhi through this website which explores the wonders of this city be it its heritage, the art and crafts, the diverse cuisine and culture.A symbol of the country’s rich past and thriving present, Delhi is a city where ancient and modern blend seamlessly together.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <!--  -->
        <?php
        $query="select * from package_manage";
        $query_run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($query_run)){
            ?>
            <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="<?php echo $row["packagepic"] ?>" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;"><?php echo $row["packagename"]?></h3>
                <span style="font-size:1.5rem;text-align:right;color:green;"><?php echo '₹'.$row["packageprice"]?></span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;"><?php echo $row["packagedetail"]?></p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
<div class="load-more"><span class="btn">Load more</span></div>

    <h3 style="text-align:center;margin-top: 3rem;margin-bottom: 3rem;font-size: 3rem;text-transform: uppercase;color:var(--main-color);">International Holiday Packages</h3>
    <div class="box-container2 " style="display:grid;
    grid-template-columns:repeat(auto-fit,minmax(30rem,1fr));
    gap:2rem;">
    
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
    
            <div class="image ">
                <img src="thailand.jpg" alt=""  style="transition:2s linear;">
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">THAILAND</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹130000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Thailand is situated in the heart of Southeast Asia, bordered by the Laos and Cambodia in the east; the Gulf of Thailand and Malaysia in the south; the Andaman Sea and Myanmar in the west; and Laos and Myanmar in the north. It is spread over 513,120 sq km.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
            <div class="image">
                <img src="veitnam.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">VEITNAM</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹250000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Vietnam is located on the Indochina peninsula in Southeast Asia. It has a long land border of 4,550 km, bordering China to the North, Laos and Cambodia to the West, and Eastern Sea (South China Sea) of Pacific Ocean to the East.  </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
            <div class="image">
                <img src="singapore.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">SINGAPORE</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹150000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Singapore is a sunny, tropical island in Southeast Asia, off the southern tip of the Malay Peninsula. Singapore is a city, a nation and a state. It is about 275 square miles, smaller than the State of Rhode Island, and inhabited by five million people from four major communities; Chinese (majority), Malay, Indian and Eurasian.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="australia.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">AUSTRALIA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹100000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Australia is one of the most multicultural countries in the world, and home to the world's oldest continuing culture. We have a highly skilled workforce and a proud history of democracy and stable government.Australia's Indigenous peoples have lived on and managed the land for more than 60,000 years .</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="malaysia.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">MALAYSIA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹250000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;"> Malaysia is a beautiful and diverse country with many highlights. The many different regions, each with their own characteristic features, make this country the perfect destination for tourists. However, Malaysia does not entirely depend on tourism. This country's economy has been going strong for years. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="paris.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">PARIS</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹250000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Paris is the capital city of France.The French historic, political and economic capital, with a population of only 2.5 million is located in the northern part of France.One of the most beautiful cities in the world. Home to historical monuments such as Notre Dame, the Eiffel tower (320m), Bastille, Louvre and many more. 
</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="dubai.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">DUBAI</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹350000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Discover the extravagant luxury, high-tech facilities and old world charm of Dubai. This United Arab Emirates (UAE) state is located on the eastern coast of the Arabic Peninsular, in the southwest corner of the Arabian Gulf. Renowned, worldwide, as a booming centre of international trade and innovation, Dubai has fast become one of the world’s most popular tourist destinations. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="korea.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">KOREA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹235000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;"> Korea, country in East Asia. It occupies the southern portion of the Korean peninsula. The country is bordered by the Democratic People’s Republic of Korea (North Korea) to the north, the East Sea (Sea of Japan) to the east, the East China Sea to the south, and the Yellow Sea to the west.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none;">
            <div class="image">
                <img src="africa.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">AFRICA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹255000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Africa is considered to be the second largest continent in the world with a total area of around 11 million square miles that account for 5.7% of the earth's surface as well as 20% of the total surface of land on our planet.It has a rich geography as well as an interesting history thus making it a continent with such biodiversity that is awe inspiring.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        
        
</div>
<div class="load-more2"><span class="btn">Load more</span></div>
    <h3 style="text-align:center;margin-top: 3rem;margin-bottom: 3rem;font-size: 3rem;text-transform: uppercase;color:var(--main-color);">BEACHES HOLIDAY PACKAGES</h3>
    <div class="box-container3" style="display:grid;
    grid-template-columns:repeat(auto-fit,minmax(30rem,1fr));
    gap:2rem;">
    
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
    
            <div class="image ">
                <img src="grace bay.jpg" alt=""  style="transition:2s linear;">
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">GRACE BAY BEACH</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹150000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">HE WORLD-FAMOUS GRACE BAY BEACH is located on the northeast coast of the island of Providenciales. This pristine beach is the hallmark of the Turks and Caicos Islands, and the recipient of many designations, awards, and accolades.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
            <div class="image">
                <img src="Varadero Beach.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;
             text-align:center;">
                <h3 style="font-size:2.5rem;">VARADERO BEACH</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹250000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Varadero, located 36 km from the city of Matanzas, in the Península de Hicacos, is the closest point in Cuba to the United States.With a length of about 30 kilometers, of which 22 kilometers are beaches, Varadero is considered, because of its perennial tropical light, its exotic and exuberant vegetation, and the quality of its waters. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);">
            <div class="image">
                <img src="Turquoise Bay.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">TURQUOISE BAY</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹251000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
            ">Known as one of Western Australia's best beaches, Turquoise Bay is the perfect spot to spend the day relaxing, swimming and snorkelling. The white, sandy shores give way to clear waters harbouring a plethora of marine life. Dive into the pristine waters at Turquoise Bay and be in awe of the abundance of life and beauty of Ningaloo Marine Park.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none">
            <div class="image">
                <img src="Quarta Praia.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">QUARTA PRAIA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹350000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Quarta Praia is the best and longest beach of Morro de Sao Paulo in Brazil. In comparison with the First and Second beaches, there are no people at all. While the landscapes are scenic - with palms, white sand and good entry into the water at the high tide. .</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none">
            <div class="image">
                <img src="Eagle Beach.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">EAGLE BEACH</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹250500</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Eagle Beach, famous for its fofoti trees, is located north-east of Manchebo Beach, and it’s simply one of the best beaches of Aruba. It goes without saying that this great beach has been reviewed many times in various magazines and brochures, all leading to the same conclusion.  </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none">
            <div class="image">
                <img src="Radhanagar Beach.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">RADHANAGAR BEACH</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹150000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Radhanagar Beach is amongst the most beautiful beaches in Asia. Located in Havelock Island of Andaman and Nicobar Islands, this astounding beach has been attracting Globetrotters with its impeccable and serene ambiance. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none">
            <div class="image">
                <img src="Baia do Sancho.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;text-align:center;">
                <h3 style="font-size:2.5rem;">BAIA DO SANCHO</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹350000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;">Baia do Sancho is a small but very picturesque beach in the eponymous secluded bay on Fernando de Noronha, recognized as the first Brazilian marine park. From year to year, this beach is invariably one of the top ten places for a beach holiday in the vast Brazil. .</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);box-shadow: var(--box-shadow);background: var(--white);display:none">
            <div class="image">
                <img src="Trunk Bay Beach.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;
        text-align:center;">
                <h3 style="font-size:2.5rem;">TRUNK BAY BEACH</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹250600</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
    ">Trunk Bay is the most iconic spot to visit in Virgin Islands National Park on the island of St. John and perhaps in all of the Caribbean for that matter.
        Trunk Bay has routinely been voted as a top ten most beautiful beach to visit in the world.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);display:none">
            <div class="image">
                <img src="Baía dos Golfinhos.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;
            text-align:center;">
                <h3 style="font-size:2.5rem;">Baía dos Golfinhos</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹350000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
        ">aia dos Golfinhos Beach is really amazing! Very famous for its impeccable nature, calm waters and mainly for the facility in giving prestige to the dolphin show in its natural habitat. It is the only beach around here that can only be accessed in the dry tide and walking along the sand .</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>
    <div class="load-more3"><span class="btn">Load more</span></div>
    <h3 style="text-align:center;margin-top: 3rem;margin-bottom: 3rem;font-size: 3rem;text-transform: uppercase;color:var(--main-color);"> HOLI SITES PACKAGES</h3>
    <div class="box-container4" style="display:grid;
    grid-template-columns:repeat(auto-fit,minmax(30rem,1fr));
    gap:2rem;">
    
        <div class="box" style="border:var(--border);
    box-shadow: var(--box-shadow);
    background: var(--white);">
    
            <div class="image ">
                <img src="mecca.jpg" alt=""  style="transition:2s linear;">
            </div>
            <div class="content" style="padding:2rem;
    text-align:center;">
                <h3 style="font-size:2.5rem;">MECCA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹350000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
        ">Mecca is the holiest city in the world in Islam. The city of Mecca and the surrounding areas are unsurpassed in its historical and religious significance to more than 1.9 billion people around the world. Prophet Muhammad (may the peace and blessings of Allah be upon him) was born in Mecca.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
             box-shadow: var(--box-shadow);
            background: var(--white);">
            <div class="image">
                <img src="MADINA.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;
             text-align:center;">
                <h3 style="font-size:2.5rem;">MADINA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹350000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
            ">Medina, also known as Madinah Munawarrah (“the enlightened city”) and Madinat Rasul Allah ("the city of the Messenger of God"), is the second holiest place in Islam after MeccaThe Prophet Mohammad gained refuge in Medina after his Hijrah (migration) from Mecca, and the city is his burial place..</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);">
            <div class="image">
                <img src="JERUSELUM.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;
             text-align:center;">
                <h3 style="font-size:2.5rem;">JERUSELUM</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹250000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
            ">The Prophet Mohammad gained refuge in Medina after his Hijrah (migration) from Mecca, and the city is his burial place.Jerusalem plays a central role in the spiritual and emotional perspective of the three major monotheistic religions.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);display:none;">
            <div class="image">
                <img src="ayodhya.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;
            text-align:center;">
                <h3 style="font-size:2.5rem;">AYODHYA</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹150000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
            ">Ayodhya, also called Oudh or Awadh, town, south-central Uttar Pradesh state, northern India. It lies on the Ghaghara River just east of Faizabad.An ancient town, Ayodhya is regarded as one of the seven sacred cities of the Hindus, revered because of its association in the great Indian epic poem Ramayana with the birth of Rama and with the rule of his father, Dasharatha. </p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);display:none;">
            <div class="image">
                <img src="varanasi.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;
            text-align:center;">
                <h3 style="font-size:2.5rem;">VARANASI</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹15000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
        ">Varanasi, or Benaras, (also known as Kashi) is one of the oldest living cities in the world. Varanasi`s Prominence in Hindu mythology is virtually unrevealed. Mark Twain, the English author and literature, who was enthralled by the legend and sanctity of Benaras, once wrote :
“Benaras is older than history, older than tradition, older even than legend and looks twice as old as all of them put together”.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
             box-shadow: var(--box-shadow);
                background: var(--white);display:none;">
            <div class="image">
                <img src="haridwar.jpg" alt="" style="transition:2s linear;"  >
            </div>
            <div class="content" style="padding:2rem;
             text-align:center;">
                <h3 style="font-size:2.5rem;">HARIDWAR</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹17000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
        ">Haridwar is district of Uttarakhand state in India. Haridwar is place where the river Ganges enters in plain areas north India after flowing 250 km from its origin Gaumukh (Gangotri Glacier).Haridwar is the destination where people from across the India visit for pilgrimage and to take a holy dip into the holy river Ganges.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);display:none;">
            <div class="image">
                <img src="palestine.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;
            text-align:center;">
                <h3 style="font-size:2.5rem;">PALESTINE</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹125000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
            ">Palestine, area of the eastern Mediterranean region, comprising parts of modern Israel and the Palestinian territories of the Gaza Strip (along the coast of the Mediterranean Sea) and the West Bank (west of the Jordan River).

The term Palestine has been associated variously and sometimes controversially with this small region, which some have asserted also includes Jordan..</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);display:none;">
            <div class="image">
                <img src="rome.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;
            text-align:center;">
                <h3 style="font-size:2.5rem;">ROME</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹75000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
            ">Rome, Italian Roma, historic city and capital of Roma provincia (province), of Lazio regione (region), and of the country of Italy. Rome is located in the central portion of the Italian peninsula, on the Tiber River about 15 miles (24 km) inland from the Tyrrhenian Sea.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" style="border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);display:none;">
            <div class="image">
                <img src="anandpur sahib.jpg" alt="" style="transition:2s linear;" >
            </div>
            <div class="content" style="padding:2rem;
            text-align:center;">
                <h3 style="font-size:2.5rem;">ANANDPUR SAHIB</h3>
                <span style="font-size:1.5rem;text-align:right;color:green;">₹25000</span>
                <p style="font-size:1.5rem;line-height:2;padding:1rem 0;font-family: 'Raleway', sans-serif;
            ">Anandpur Sahib, the Holy City of Bliss, is about 95 km north-west of Chandigarh, Punjab. The city is located in the Rupnagar district (Roper) in the state of Punjab, India. It is nestled between the Shivalik hills in the east and Sutlej River at far west. Furthermore, this place is surrounded with vast green stretch that delivers calmness and spiritualism in its aroma.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        
</div>
<div class="load-more4"><span class="btn">Load more</span></div>

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
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>