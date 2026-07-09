<?php
session_start();
include "../config.php";

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}

$totalStudents = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM students122"));
$totalLost = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM lost_ids"));
$totalFound = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM lost_ids WHERE status='Found'"));
$totalPending = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM lost_ids WHERE status='Lost'"));
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#f4f6f9;
}

.sidebar{

width:250px;
height:100vh;
background:#003366;
position:fixed;
left:0;
top:0;

}

.sidebar h2{

color:white;
text-align:center;
padding:20px;

}

.sidebar a{

display:block;
color:white;
padding:15px;
text-decoration:none;

}

.sidebar a:hover{

background:#0055aa;

}

.main{

margin-left:250px;
padding:30px;

}

.cards{

display:flex;
gap:20px;
flex-wrap:wrap;

}

.card{

width:220px;
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 0 10px lightgray;
text-align:center;

}

.card h1{

color:#0066cc;

}

</style>

</head>

<body>

<div class="sidebar">

<h2>Student ID Tracker</h2>

<a href="dashboard.php">Dashboard</a>

<a href="view_students.php">Students</a>

<a href="view_lost_ids.php">Lost IDs</a>
<a href="reports.php">Reports</a>

<a href="../logout.php">Logout</a>

</div>

<div class="main">

<h1>Administrator Dashboard</h1>

<br>

<div class="cards">

<div class="card">

<h1><?php echo $totalStudents; ?></h1>

<p>Total Students</p>

</div>

<div class="card">

<h1><?php echo $totalLost; ?></h1>

<p>Lost IDs</p>

</div>

<div class="card">

<h1><?php echo $totalFound; ?></h1>

<p>Found IDs</p>

</div>

<div class="card">

<h1><?php echo $totalPending; ?></h1>

<p>Pending IDs</p>

</div>

</div>

</div>

</body>

</html>