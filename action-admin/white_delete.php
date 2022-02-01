<?php

include './db.php';
$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM `whitepaper` WHERE `whitepaper`.`id` = $id ";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Course info Deleted Successfully")</script>';
    header("Location: whitepaper_info.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>