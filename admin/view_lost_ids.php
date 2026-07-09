<?php
session_start();
include "../config.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT
students122.id,
students122.registration_number,
students122.full_name,
lost_ids.id AS lost_id,
lost_ids.date_lost,
lost_ids.place_lost,
lost_ids.description,
lost_ids.status
FROM students122
INNER JOIN lost_ids
ON students122.id = lost_ids.student_id
ORDER BY lost_ids.id DESC";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>

<title>Lost ID Reports</title>

<style>

body{

font-family:Arial;
background:#f4f4f4;

}

.container{

width:98%;
margin:auto;
margin-top:20px;

}

table{

width:100%;
border-collapse:collapse;
background:white;

}

table,th,td{

border:1px solid #ccc;

}

th{

background:#0066cc;
color:white;
padding:12px;

}

td{

padding:10px;
text-align:center;

}

.button{

background:green;
color:white;
padding:8px 15px;
text-decoration:none;
border-radius:5px;

}

</style>

</head>

<body>

<div class="container">

<h2 align="center">Lost ID Reports</h2>

<table>

<tr>

<th>ID</th>

<th>Registration Number</th>

<th>Student Name</th>

<th>Date Lost</th>

<th>Place Lost</th>

<th>Description</th>

<th>Status</th>

<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['lost_id']; ?></td>

<td><?php echo $row['registration_number']; ?></td>

<td><?php echo $row['full_name']; ?></td>

<td><?php echo $row['date_lost']; ?></td>

<td><?php echo $row['place_lost']; ?></td>

<td><?php echo $row['description']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<a class="button"
href="mark_found.php?id=<?php echo $row['lost_id']; ?>">

Mark Found

</a>

</td>

</tr>

<?php

}

?>

</table>

</div>

</body>

</html>