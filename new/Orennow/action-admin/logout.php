<?php 
session_start();
unset($_SESSION['username']);
 echo "<script>alert('You have Logout Successfully.');</script>";
     echo "<script>window.open('login.php','_self')</script>";

 ?>