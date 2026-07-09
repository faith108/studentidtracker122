<?php
session_start();
include "config.php";

if(!isset($_SESSION['student_id'])){
    header("Location: login.php");
    exit();
}

$message = "";

if(isset($_POST['submit'])){

    $student_id = $_SESSION['student_id'];
    $date_lost = $_POST['date_lost'];
    $place_lost = $_POST['place_lost'];
    $description = $_POST['description'];

    $sql = "INSERT INTO lost_ids
    (student_id, date_lost, place_lost, description)
    VALUES
    ('$student_id','$date_lost','$place_lost','$description')";

    if(mysqli_query($conn,$sql)){
        $message = "Lost ID reported successfully.";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Report Lost ID</title>
<style>
body{font-family:Arial;background:#f4f4f4;}
.container{
width:500px;
margin:40px auto;
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px gray;
}
input,textarea{
width:100%;
padding:10px;
margin:10px 0;
}
button{
width:100%;
padding:12px;
background:#0066cc;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}
.message{
color:green;
font-weight:bold;
text-align:center;
}
</style>
</head>
<body>

<div class="container">

<h2>Report Lost Student ID</h2>

<div class="message"><?php echo $message; ?></div>

<form method="POST">

<label>Date Lost</label>
<input type="date" name="date_lost" required>

<label>Place Lost</label>
<input type="text" name="place_lost" required>

<label>Description</label>
<textarea name="description" rows="5"></textarea>

<button type="submit" name="submit">Submit Report</button>

</form>

</div>

</body>
</html>