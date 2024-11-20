<?php
session_start();
if(!$_SESSION['admin_name']){
    header("location:login_form.php");
}
error_reporting(0);
ini_set("dispay_errors",0);
if(isset($_POST["submit"]) and isset($_FILES['img'] )){
  $con=mysqli_connect("localhost","root","","tour");
  $file_name=$_FILES["img"]["name"];
  $file_tmp=$_FILES["img"]["type"];
    move_uploaded_file($file_tmp,$file_name);
    $packagename=$_POST["packagename"];
    $packageprice=$_POST["packageprice"];
    $packagedetail=$_POST["packagedetail"];
    $sql="insert into package_manage(packagename,packagedetail,packageprice,packagepic) values('$packagename','$packagedetail',$packageprice, '$file_name')";
      $result=mysqli_query($con,$sql);
      echo '<script>alert("Data added successfully")</script>';
   
}
if(isset($_POST["Packages_Details"])){
  header("location:Packages_details.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body{
    background-color:#efe4e5;
}
.container{
    max-width: 80%;
  margin: auto;
  background: white;
  padding: 10px;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:#F6314C;
}

input[type=submit] {
  background-color: #F6314C;
  color: white;
  padding: 12px 25px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #e4445a;
}
input[type=text]:focus , textarea{
    border-color:#F6314C;
  outline:none;
}
.container {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.col-50 {
  float: right;
  /* width: 50%; */
  margin-top: 6px;
  margin-left:30px;
  margin-bottom:10px;
}
/* .btn{
    margin-right:10%;
} */
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75,.col-50, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <form action="admin_page.php" method="post" enctype="multipart/form-data">
  <div class="row">
  <div class="col-50">
</div>
<div class="col-50">
      <input type="submit" value="Packages_Details" name="Packages_Details" >
   <a href="Packages_details.php"></a>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Package Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="packagename" placeholder="Package Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="packageprice" placeholder="Price">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Package Images</label>
      </div>
      <div class="col-75">
        <input type="file" id="lname" name="img" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Package Details</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="packagedetail" placeholder="Package Details" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Add" name="submit">
    </div>
  </form>
</div>

</body>
</html>
