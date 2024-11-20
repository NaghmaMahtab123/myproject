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
    <title>details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<style>
    .main{
     display: flex;
     
  justify-content: center;
  align-items: center;
  
       /* flex-direction:column; */
       
       
     
       
    }
    input{
        box-shadow: 18px 18px 18px black;
    }
    h2{
        padding-bottom:1.5rem;
        font-weight:bold;
        
    }
    body{
      background-image:url('table3_bg.jpg') ;
      background-repeat: no-repeat;
      background-size:cover !important;
    background-position:center !important;
       color:white;
       font-size:2.5vh;
       /* text-shadow:10px 10px 10px black; */
        font-weight:bold;
       
       
        /* margin-top:15rem; */
        text-align:center;

        
    }
    
    .child{
        /* width:100vh; */
        /* padding:10vh; */
        border-radius: 6px;
        box-shadow: 18px 18px 18px black;
        opacity: 0.8;
        margin:4rem;
    }
    form{
        
    }
    i{
        margin-right:6px;
    }
    input{
        width:17%;
    }
    .batan{
        display: inline-block;
    background:#F6314C;
    color:white;
    font-size:1rem;
    padding:0 1rem;
    margin:0.5rem;
    cursor:pointer;
    text-shadow:none;
    border-radius:4px;
    }
    .batan:hover{
        text-decoration:underline;
        color:white;
    }
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  border-color:white;
}

   @media screen (max-width:833px) {
    .child{
        width:50rem;
        
        border-radius: 6px;
        box-shadow: 18px 18px 18px black;
        opacity: 0.8;
    }
   }
p{
    font-weight:100;
   color:white;
   text-align:center;
}
a{
    font-weight:900;
    cursor:pointer;
    text-decoration:none;
    color:  white;
}
  th{
    padding:1vh;
    font-size:3vh;
  } 
  td{
    padding:0.5vh 1vh ;
    font-size:2.5vh;
  }
    
</style>
<body>
<section class="header">
        <a href="home.php" class="logo">T</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="login.php">Login</a>
            <a href="Packages_details.php">Package Details</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>
    <div class="main ">
<!-- <div class="table-responsive-lg "> -->
<table class="child" align="center"  >
    <tr>
        <th>Packages</th>
        <th>Prices(per person)</th>
        <th>No. of Days</th>
        <th>Booking</th>
    </tr>
    <tr>
        <td>Chennai</td>
        <td>₹20000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Shimla</td>
        <td>₹15000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Kashmir</td>
        <td>₹18000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Sikkim</td>
        <td>₹17000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Rajasthan</td>
        <td>₹15000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Mumbai</td>
        <td>₹10000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Hydrabad</td>
        <td>₹20000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Kolkata</td>
        <td>₹10250</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Delhi</td>
        <td>₹12500</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Thailand</td>
        <td>₹130000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Vietnam</td>
        <td>₹250000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Singapore</td>
        <td>₹150000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Australia</td>
        <td>₹100000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Malaysia</td>
        <td>₹250000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Paris</td>
        <td>₹250000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Dubai</td>
        <td>₹350000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Korea</td>
        <td>₹235000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Africa</td>
        <td>₹255000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Grace Bay Beach</td>
        <td>₹150000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Varadero Beach</td>
        <td>₹250000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    
    <tr>
        <td>Turquoise Bay Beach</td>
        <td>₹251000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Quarta Praia Beach</td>
        <td>₹350000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Eagle Beach</td>
        <td>₹250500</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>RadhaNagar Beach</td>
        <td>₹150000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Trunk Bay Beach</td>
        <td>₹250600</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Baia Dos Golfinhos</td>
        <td>₹350000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Mecca</td>
        <td>₹350000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Madina</td>
        <td>₹350000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Jeruselum</td>
        <td>₹250000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Ayodhya</td>
        <td>₹150000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Varanasi</td>
        <td>₹15000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Haridwar</td>
        <td>₹17000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Palestine</td>
        <td>₹125000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>Rome</td>
        <td>₹75000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    <tr>
        <td>AnandPur Sahib </td>
        <td>₹25000</td>
        <td>1</td>
        <td> <a href="book.php" class="batan">Book </a></td>
    </tr>
    

</table>
</div>
</div>
</body>
</html>