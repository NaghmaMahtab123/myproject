<?php
@include 'config.php';

session_start();
if(!$_SESSION['admin_name']){
    header("location:login_form.php");
    
}
error_reporting(0);
$packagename=$_GET['id'];
$query="delete from package_manage where packagename='$packagename'";
$data=mysqli_query($conn, $query);
if($data){
   header("location:Packages_details.php");
}
else{
    echo "data not deleted";
}

?>
