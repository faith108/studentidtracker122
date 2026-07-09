<?php
session_start();

if(!isset($_SESSION['student_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['student_name']; ?></h2>

<hr>

<a href="report_lost.php">
<button>Report Lost ID</button>
</a>

<br><br>

<a href="logout.php">
<button>Logout</button>
<a href="search.php">
    <button>Search My ID</button>
</a>

<br><br>
</a>
<br><br>

<a href="notifications.php">
<button>🔔 My Notifications</button>
</a>

</body>
</html>