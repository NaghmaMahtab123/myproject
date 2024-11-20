<?php
@include 'config.php';

session_start();
if(!$_SESSION['admin_name']){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="style.css">
</head>
<style>
  th{
    background-color:#F6314C;

  }
  
    body{
        /* background-image:url('ocean.jpg'); */
        background-color:#efe4e5 ;
    }
    .child{
        width:100%;
        /* padding:10vh; */
        border-radius: 6px;
        
        opacity: 0.8;
        margin:4rem;
        font-size:1.5rem;
    }
    .batan{
    display: inline-block;
    background:#F6314C;
    color:white;
    font-size:1.3rem;
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
  border-color:#F6314C;
}
@media screen (max-width:833px) {
    .child{
        /* width:50rem; */
        
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


</style>
<body>
    <!-- <section class="header">
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
    </section> -->
    <section>
    <div class="main ">
<!-- <div class="table-responsive-lg "> -->
<table class="child" align="center"  >
    <tr>
        <th>Packages</th>
        <th>Prices(per person)</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <tr>
        <td>Chennai</td>
        <td>₹20000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Shimla</td>
        <td>₹15000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Kashmir</td>
        <td>₹18000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Sikkim</td>
        <td>₹17000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Rajasthan</td>
        <td>₹15000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Mumbai</td>
        <td>₹10000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Hydrabad</td>
        <td>₹20000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Kolkata</td>
        <td>₹10250</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Delhi</td>
        <td>₹12500</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Thailand</td>
        <td>₹130000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Vietnam</td>
        <td>₹250000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Singapore</td>
        <td>₹150000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Australia</td>
        <td>₹100000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Malaysia</td>
        <td>₹250000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Paris</td>
        <td>₹250000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Dubai</td>
        <td>₹350000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Korea</td>
        <td>₹235000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Africa</td>
        <td>₹255000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Grace Bay Beach</td>
        <td>₹150000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Varadero Beach</td>
        <td>₹250000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    
    <tr>
        <td>Turquoise Bay Beach</td>
        <td>₹251000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Quarta Praia Beach</td>
        <td>₹350000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Eagle Beach</td>
        <td>₹250500</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>RadhaNagar Beach</td>
        <td>₹150000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Trunk Bay Beach</td>
        <td>₹250600</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Baia Dos Golfinhos</td>
        <td>₹350000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Mecca</td>
        <td>₹350000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Madina</td>
        <td>₹350000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Jeruselum</td>
        <td>₹250000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Ayodhya</td>
        <td>₹150000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Varanasi</td>
        <td>₹15000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Haridwar</td>
        <td>₹17000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Palestine</td>
        <td>₹125000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>Rome</td>
        <td>₹75000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <tr>
        <td>AnandPur Sahib </td>
        <td>₹25000</td>
        <td> <a href="book.php" class="batan">Edit </a></td>
        <td> <a href="delete.php" class="batan">Delete </a></td>
    </tr>
    <?php
        $query="select * from package_manage";
        $query_run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($query_run)){
            ?>
           <tr>
        <td><?php echo $row["packagename"] ?></td>
        <td><?php echo $row["packageprice"] ?></td>
        <td><a href="edit.php?id=<?php echo $row['packageid']?>" class="batan">Edit</a></td>
        <td> <a href="delete.php?id=<?php echo $row['packagename']?>" class="batan">Delete </a></td>
    </tr>  
 <?php
        }
        ?>
</table>
</div>
</div>
    </section>
    
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>