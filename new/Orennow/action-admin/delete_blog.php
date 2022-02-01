<?php

include './db.php';
$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM `blog` WHERE `blog`.`id` = $id ";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Course info Deleted Successfully")</script>';
    header("Location: blog_info.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>