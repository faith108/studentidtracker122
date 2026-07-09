<?php
session_start();
include "../config.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM students122";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>View Students</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
}

.container{

    width:95%;
    margin:auto;
    margin-top:30px;

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

h2{

    text-align:center;
    color:#0066cc;

}

a{

    text-decoration:none;
    color:white;
    background:#28a745;
    padding:8px 15px;
    border-radius:5px;

}

</style>

</head>

<body>

<div class="container">

<h2>Registered Students</h2>

<table>

<tr>

<th>ID</th>

<th>Registration Number</th>

<th>Full Name</th>

<th>Department</th>

<th>Course</th>

<th>Phone</th>

<th>Email</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['registration_number']; ?></td>

<td><?php echo $row['full_name']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['course']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['email']; ?></td>

</tr>

<?php

}

?>

</table>

</div>

</body>

</html>