<?php
session_start();
include "../config.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$students = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM students"));
$lost = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM lost_ids"));
$found = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM lost_ids WHERE status='Found'"));
$pending = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM lost_ids WHERE status='Lost'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>System Reports</title>

<style>
body{
    font-family:Arial;
    background:#f4f4f4;
}

.container{
    width:70%;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px lightgray;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid #ccc;
    padding:12px;
    text-align:center;
}

th{
    background:#0066cc;
    color:white;
}

h2{
    text-align:center;
}
</style>

</head>

<body>

<div class="container">

<h2>Student ID Tracker Reports</h2>

<table>

<tr>
<th>Report</th>
<th>Total</th>
</tr>

<tr>
<td>Registered Students</td>
<td><?php echo $students; ?></td>
</tr>

<tr>
<td>Lost IDs</td>
<td><?php echo $lost; ?></td>
</tr>

<tr>
<td>Found IDs</td>
<td><?php echo $found; ?></td>
</tr>

<tr>
<td>Pending IDs</td>
<td><?php echo $pending; ?></td>
</tr>

</table>

</div>

</body>
</html>