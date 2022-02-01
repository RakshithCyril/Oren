
<?php

$conn = mysqli_connect("localhost","oren_admin","oren_admin","oren") ;
if(!$conn){
    die(mysqli_error($conn));
}
