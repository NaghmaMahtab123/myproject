<?php
session_start();
if(!$_SESSION['user_name']){
    header("location:login_form.php");
}
if($_SESSION["user_name"]){
    $con=mysqli_connect("localhost","root","","tour");
   
   
    $name=$_SESSION["user_name"];
    $sql="select *  from tour_table where name='$name'";
    $result=mysqli_query($con,$sql);
    //$row = mysqli_fetch_array($result);
    
};
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
   table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  border-color:#F6314C;
}body{
    background-color:#efe4e5;
}
.child2{
    width:100%;
        border-radius: 6px;
      
        font-size:1.5rem;
}
.child2>p{
    font-size:1.3rem;
}
th{
    background:#F6314C;
}
   
</style>
<body>
    <section>
    
    <div class="main"style="margin-bottom:1px;" >
    <div class="child2">
    <h1 style="text-transform:uppercase;color:black;font-weight:900;"><?php echo " ".$name ?></h1>
</div>
</div>
<div class="main">
<table class="child2"  >
    <tr>
    <th>Package</th>
        <th>No. of Person</th>
        <th>No. of Days</th>
        <th>Date</th>
        <th>Amount</th>
        
       
    </tr>
    <?php
            // $num=mysqli_num_rows($result);
            // echo $num;
           
            while ($row = mysqli_fetch_array($result)) {
         ?>
         
    <tr>
    

    <td style="text-align:center;"><?php echo " ".$row["country"] ?></td>
        <td style="text-align:center;"><?php echo " ".$row["guest"] ?>
        <td style="text-align:center;"><?php echo " ".$row["day"] ?></td>
        <td style="text-align:center;"><?php echo " ".$row["date"] ?></td>
        <td style="text-align:center;"><?php echo " "."₹".$row["total"] ?></td>
      
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