<?php
session_start();
include "config.php";

if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];

$sql = "SELECT * FROM notifications
        WHERE student_id='$student_id'
        ORDER BY id DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Notifications</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
}

.container{
    width:70%;
    margin:40px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px lightgray;
}

.notification{
    background:#e8f5e9;
    border-left:5px solid green;
    padding:15px;
    margin-bottom:15px;
    border-radius:5px;
}

h2{
    color:#0066cc;
}

</style>

</head>

<body>

<div class="container">

<h2>My Notifications</h2>

<?php

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result))
{

?>

<div class="notification">

<p><?php echo $row['message']; ?></p>

<small><?php echo $row['created_at']; ?></small>

</div>

<?php

}

}else{

echo "<p>No notifications available.</p>";

}

?>

</div>

</body>

</html>