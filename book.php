<?php
session_start();
if(!$_SESSION['user_name']){
    header("location:login_form.php");
}

if(isset($_POST["send"])){
    $con=mysqli_connect("localhost","root","","tour");
    $name=$_SESSION['user_name'];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $country=$_POST["country"];
    $guest=$_POST["guest"];
    $day=$_POST["day"];
    $date=date("d-m-Y",strtotime($_POST["date"]));
    //$date=$_POST["date"];
    switch ($country) {
      case "Chennai":
          $total=20000*$guest*$day;
        break;
      case "Shimla":
          $total=15000*$guest*$day;
        break;
      case "Kashmir":
          $total=18000*$guest*$day;
        break;
      case "Sikkim":
          $total=17000*$guest*$day;
      break;
      case "Rajasthan":
          $total=15000*$guest*$day;
          break;
       case "Mumbai":
       $total=10000*$guest*$day;
          break;
      case "Hydrabad":
       $total=20000*$guest*$day;
      break;
      case "Kolkata":
       $total=10250*$guest*$day;
      break;
      case "Delhi":
      $total=12500*$guest*$day;
      break;
      case "Thailand":
          $total=130000*$guest*$day;
  break;
  case "Vietnam":
      $total=250000*$guest*$day;
  break;
  case "Singapore":
      $total=150000*$guest*$day;
  break;
  case "Australia":
      $total=100000*$guest*$day;
  break;
  case "Malaysia":
      $total=250000*$guest*$day;
  break;
  case "Paris":
      $total=250000*$guest*$day;
  break;
  case "Dubai":
      $total=350000*$guest*$day;
  break;
  case "Korea":
      $total=235000*$guest*$day;
  break;
  case "Africa":
      $total=255000*$guest*$day;
  break;
  case "Grace":
      $total=150000*$guest*$day;
  break;
  case "Varadero":
      $total=250000*$guest*$day;
  break;
  case "Turquoise":
      $total=251000*$guest*$day;
  break;
  case "Quarta ":
      $total=350000*$guest*$day;
  break;
  case "Eagle ":
      $total=250500*$guest*$day;
  break;
  case "RadhaNagar ":
      $total=150000*$guest*$day;
  break;
  case "Trunk ":
      $total=250600*$guest*$day;
  break;
  case "Baia":
      $total=350000*$guest*$day;
  break;
  case "mecca":
      $total=350000*$guest*$day;
  break;
  case "madina":
      $total=350000*$guest*$day;
  break;
  case "jeruselum":
      $total=250000*$guest*$day;
  break;
  case "ayodhya":
      $total=150000*$guest*$day;
  break;
  case "varanasi":
      $total=15000*$guest*$day;
  break;
  case "haridwar":
      $total=17000*$guest*$day;
  break;
  case "palestine":
      $total=125000*$guest*$day;
  break;
  case "rome":
      $total=75000*$guest*$day;
  break;
  case "anand":
      $total=25000*$guest*$day;
  break;
  
    }
    
    $sql="insert into tour_table(name,email,phone,address,country,guest,total,day,date) values('$name','$email',$phone,'$address','$country',$guest,$total,$day,'$date')";
    $result=mysqli_query($con,$sql);
   if($result){
          header("location:bill.php"); 
    }
    else{
        header("location:login_form.php"); 
     echo mysqli_error($con);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

    <div class="heading" style="background:url(book1_bg.jpg) no-repeat;">
<div style="width:85rem;">
<h3  style=" animation:fadeIn 2s linear backwards 1s;  font-size:4vw;color:white;text-align:center;">"Don't be tourist be a traveller"</h3>
</div>
</div>
<section class="booking">
    <h1 class="heading-title">Book your trip!</h1>
    <form action="book.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Full Name:</span>
                <?php     $name=$_SESSION['user_name'];?>
                <input type="text" value="<?php echo $name ?>" name="name" readonly>
            </div>
            <div class="inputBox">
                <span>Email ID:</span>
                <input type="text" placeholder="email" name="email" required>
            </div>
            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="Phone" name="phone" required>
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="address" name="address" required>
            </div>
            <div class="inputBox">
            <label for="country">Country:</label>
                <select name="country" id="country">
                    <option value="Chennai">Chennai</option>
                    <option value="Shimla">Shimla</option>
                    <option value="Kashmir">Kashmir</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Hydrabad">Hydrabad</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Australia">Australia</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Paris">Paris</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Korea">Korea</option>
                    <option value="Africa">Africa</option>
                    <option value="Grace">Grace Bay Beach</option>
                    <option value="Varadero">Varadero Beach</option>
                    <option value="Turquoise">Turquoise Bay Beach</option>
                    <option value="Quarta">Quarta Praia Beach</option>
                    <option value="Eagle">Eagle Beach</option>
                    <option value="RadhaNagar ">RadhaNagar Beach</option>
                    <option value="Trunk">Trunk Bay Beach</option>
                    <option value="Baia">Baia Dos Golfinhos</option>
                    <option value="mecca"> Mecca</option>
                    <option value="madina"> Madina</option>
                    <option value="jeruselum"> Jeruselum</option>
                    <option value="ayodhya">Ayodhya </option>
                    <option value="varanasi">Varanasi</option>
                    <option value="haridwar">Haridwar </option>
                    <option value="palestine">Palestine </option>
                    <option value="rome">Rome </option>
                    <option value="anand">AnandPur Sahib </option>
                    
                </select>
                
                </div>
            <div class="inputBox">
                <span>No. of Person</span>
                <input type="text" placeholder="how many guest" name="guest" required>
            </div>
            <div class="inputBox">
                <span>Date:</span>
                <input type="date" name="date"  required>
            </div>
            <div class="inputBox">
                <span>No. of Days</span>
                <input type="text" placeholder="No. of days to stay" name="day" required>
            </div>

        </div>
        <?php
         $con=mysqli_connect("localhost","root","","tour");
        $query="select * from tour_table";
        $query_run=mysqli_query($con,$query);
        $row=mysqli_fetch_array($query_run);
            ?>
        <div style="display:flex;justify-content:center;"><input  type="submit"  class="btn" name="send"></div>
    <?php
    ?>
    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>

 
    