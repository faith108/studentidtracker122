<?php
session_start();
include "../config.php";

$message = "";

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admins
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $admin = mysqli_fetch_assoc($result);

        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['username'];

        header("Location: dashboard.php");
        exit();

    } else {

        $message = "Invalid Username or Password";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:400px;
            margin:80px auto;
            background:white;
            padding:30px;
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
            margin-bottom:15px;
        }

        button{
            width:100%;
            padding:12px;
            background:#0066cc;
            color:white;
            border:none;
            cursor:pointer;
            border-radius:5px;
        }

        .message{
            color:red;
            text-align:center;
            margin-bottom:15px;
        }
    </style>
</head>

<body>

<div class="container">

<h2>Administrator Login</h2>

<div class="message">
<?php echo $message; ?>
</div>

<form method="POST">

<input type="text"
       name="username"
       placeholder="Username"
       required>

<input type="password"
       name="password"
       placeholder="Password"
       required>

<button type="submit"
        name="login">
Login
</button>

</form>

</div>

</body>
</html>