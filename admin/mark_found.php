<?php
include "../config.php";

$id = $_GET['id'];

// Get the student_id before updating
$get = mysqli_query($conn, "SELECT student_id FROM lost_ids WHERE id='$id'");
$row = mysqli_fetch_assoc($get);

$student_id = $row['student_id'];

// Update lost ID status
mysqli_query($conn, "UPDATE lost_ids SET status='Found' WHERE id='$id'");

// Create notification
$message = "🎉 Your Student ID has been found. Please collect it from the Student Affairs Office.";

mysqli_query($conn, "INSERT INTO notifications(student_id, message)
VALUES('$student_id', '$message')");

header("Location:view_lost_ids.php");
exit();
?>