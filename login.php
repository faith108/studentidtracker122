<?php
session_start();
include "config.php";

$message = "";

if(isset($_POST['login'])){

    $registration_number = $_POST['registration_number'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students122
            WHERE registration_number='$registration_number'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_id'] = $row['id'];
        $_SESSION['student_name'] = $row['full_name'];

        header("Location: dashboard.php");
        exit();

    }else{

        $message = "Invalid Registration Number or Password.";

    }

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Login</title>

<style>

body{
    background:#f4f4f4;
    font-family:Arial;
}

.container{

    width:400px;
    margin:80px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px gray;

}

h2{

    text-align:center;
    color:#0066cc;

}

input{

    width:100%;
    padding:12px;
    margin-top:10px;
    margin-bottom:15px;

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

    color:red;
    text-align:center;

}

</style>

</head>

<body>

<div class="container">

<h2>Student Login</h2>

<div class="message">
<?php echo $message; ?>
</div>

<form method="POST">

<input
type="text"
name="registration_number"
placeholder="Registration Number"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button
type="submit"
name="login">
Login
</button>

</form>

</div>

</body>
</html>