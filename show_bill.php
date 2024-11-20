<?php
session_start();
if($_SESSION["name"]){
    $con=mysqli_connect("localhost","root","","tour");
    $name=$_SESSION["name"];
    $sql="select *  from tour_table where name='$name'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if($result){
        // echo "table";
    }
    else{
        header("Location:login.php");
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
    <title>showBill</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<style>
    .form-div{
     display: flex;
     
  justify-content: center;
  align-items: center;
       /* flex-direction:column; */
       height:100vh;
       
     
       
    }
    input{
        box-shadow: 18px 18px 18px black;
    }
    h2{
        padding-bottom:1.5rem;
        font-weight:bold;
        
    }
    body{
      /* background-image:url('new2.jpg') ;
      background-repeat: no-repeat;
      background-size:cover !important;
    background-position:center !important; */
       color:black;
       /* font-size:3vh; */
       /* text-shadow:10px 10px 10px black; */
        /* font-weight:bold; */
        height:100vh;  
        user-select:none;  
        
    }
    
    .child{
        /* width:70vh; */
        padding:10vh;
        border-radius: 6px;
        border:1px solid  #F6314C;
        /* box-shadow: 30px 20px 50px black; */
        /* opacity: 0.8; */
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
        background-color:#F6314C;
        font-size:16px;
        border:none;
        border-radius:4px;
        width:50%;
        height:5vh;
        color:white;
        font-weight:bold;
        box-shadow: 28px 28px 28px black;
    }
    
    @media screen and (max-width:544px){
        .child{
        width:60vh;
        padding:4vh 6vh;
        
        
        }
    }
    @media screen and (max-width:463px){
        .child{
        width:50vh;
        padding:3vh 4vh;
        }
       
    }
    
        
    
    @media screen and (max-width:272px){
        .child{
        width:30vh;
        padding:4% 6%;
        position: absolute;
        top:20%;
        
        }
        body{
       
       font-size:1.7vh;
        font-weight:bold;
    }
    h2{
        font-size:2.5vh;
    }

}
p{
    
   
   text-align:center;
}
a{
    font-weight:900;
    cursor:pointer;
    text-decoration:none;
    color:  white;
}
   hr{
    background-color:#F6314C;
    height:0.1rem;
   }
    
</style>
<body id="back">
<form action="show_bill.php" method="post" class="form-div ">
        
        <div class="child">
        <div class="mb-3">
            <p style="text-transform:uppercase;color:black;text-align:center;font-weight:900;"><?php echo " ".$row["name"] ?></p>
        </div>
        <div class="mb-3">
        <p style="color:black;"><?php echo " ".$row["email"] ?></p>
        </div>
        <div class="mb-3">
            <p style="color:black;"><?php echo " ".$row["phone"]."," ?>
            <?php echo " ".$row["address"]."," ?>
            <?php echo " ".$row["country"] ?></p>
        </div>
        
        <div class="mb-3">
           <p style="color:black;">No. of Person:<?php echo " ".$row["guest"] ?></p>
            
        </div>
        <div class="mb-3">
           <p style="color:black;">No. of Days:<?php echo " ".$row["day"] ?></p>
            
        </div>
        <div class="mb-3">
           <p style="color:black;font-weight:900;">Amount:<?php echo " "."₹".$row["total"] ?></p>
            
        </div>
        
       
        </div>    
    </form>
</body>
</html>