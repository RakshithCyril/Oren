<?php
session_start();
include "./db.php";
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql= "select * from login where username='$username'and password='$password'";
$query=mysqli_query($conn,$sql);
// echo $sql; die;
if(mysqli_num_rows($query)>0)


{
	echo "<script>window.open('index.php','_self')</script>";
$_SESSION['username']=$username;
}
else{

	echo "<script>alert('Incorrect Email or Password');</script>";
	 echo "<script>window.open('login.php','_self')</script>";
}
}




?>